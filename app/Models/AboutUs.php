<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    private static $aboutUs;

    protected $casts = [
        'card_icon' => 'array',
        'card_heading' => 'array',
        'card_text' => 'array',
    ];

    public static function storeAboutUs($request)
    {
        $aboutUs = new AboutUs();
        $aboutUs->mission = $request->mission;
        $aboutUs->vision = $request->vision;
        $aboutUs->card_icon = $request->card_icon ?? [];
        $aboutUs->card_heading = $request->card_heading ?? [];
        $aboutUs->card_text = $request->card_text ?? [];
        $aboutUs->story = $request->story;
        $aboutUs->save();
    }

    public static function updateAboutUs($request){
        self::$aboutUs = self::first(); // get the first (only) record

        if (self::$aboutUs) {
            self::$aboutUs->mission = $request->mission;
            self::$aboutUs->vision = $request->vision;
            self::$aboutUs->card_icon = $request->card_icon ?? [];
            self::$aboutUs->card_heading = $request->card_heading ?? [];
            self::$aboutUs->card_text = $request->card_text ?? [];
            self::$aboutUs->story = $request->story;
            self::$aboutUs->save();
        }
    }


    public static function deleteAboutUs(){
        self::$aboutUs = self::first();

        if (self::$aboutUs) {
            self::$aboutUs->delete();
        }
    }

}
