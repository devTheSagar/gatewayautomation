<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'sections',
        'conclusion',
    ];

    // Cast sections JSON column automatically to array
    protected $casts = [
        'sections' => 'array',
    ];

    private static $service;

    /**
     * Add a new service with dynamic sections, features, and images.
     */
    public static function addService($request)
{
    self::$service = new Service();

    self::$service->service_name = $request->service_name;
    self::$service->conclusion = $request->conclusion;

    $sections = [];

    foreach ($request->section_heading as $index => $heading) {
        // Handle features for this section
        $featureKey = 'feature_list_' . $index;
        $features = $request->$featureKey ?? [];

        // Handle section image upload
        $imagePath = null;
        if (isset($request->section_image[$index])) {
            $file = $request->section_image[$index];

            // Generate unique filename
            $filename = time().'_'.$index.'.'.$file->getClientOriginalExtension();

            // Define destination path
            $destinationPath = public_path('uploads/backend/services');

            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move file
            $file->move($destinationPath, $filename);

            // Save relative path for DB
            $imagePath = 'uploads/backend/services/' . $filename;
        }

        $sections[] = [
            'heading' => $heading,
            'content' => $request->section_content[$index] ?? '',
            'features' => $features,
            'image' => $imagePath,
        ];
    }

    self::$service->sections = $sections; // automatically cast to JSON
    self::$service->save();

    return self::$service;
}

}
