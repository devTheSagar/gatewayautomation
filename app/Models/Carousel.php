<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Carousel extends Model
{
    private static $carousel, $image, $imageName, $directory, $imageUrl;





    protected static function boot()
    {
        parent::boot();

        // Automatically generate slug when creating
        static::creating(function ($carousel) {
            $carousel->slug = self::generateUniqueSlug($carousel->carousel_heading);
        });

        // Optionally regenerate slug when updating (if heading changes)
        static::updating(function ($carousel) {
            if ($carousel->isDirty('carousel_heading')) {
                $carousel->slug = self::generateUniqueSlug($carousel->carousel_heading);
            }
        });
    }

    private static function generateUniqueSlug($heading)
    {
        $baseSlug = Str::slug($heading);
        $slug = $baseSlug;
        $count = 1;

        // Ensure slug is unique
        while (self::where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-{$count}";
            $count++;
        }

        return $slug;
    }








    // for image storage 
    public static function imageUpload($request){

        if($request->hasFile('carousel_image')){
            self::$image = $request->carousel_image;
            self::$imageName = time() . '_' . uniqid() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'uploads/backend/carousel-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }else{
            return 'uploads/backend/carousel-images/default_carousel_image.jpg';
        }
        
    }

    // for storing data of carousel 
    public static function addCarousel($request){
        self::$carousel = new Carousel();
        self::$carousel->carousel_image = self::imageUpload($request);
        self::$carousel->carousel_heading = $request->carousel_heading;
        self::$carousel->learn_more_link = $request->learn_more_link;
        self::$carousel->status = $request->status ?? 1; // default active if not provided
        self::$carousel->save();
    }

}
