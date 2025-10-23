<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    private static $socialLink;

    public static function storeSocialLink($request){
        self::$socialLink               = new SocialLink();
        self::$socialLink->facebook     = $request->facebook;
        self::$socialLink->instagram    = $request->instagram;
        self::$socialLink->twitter      = $request->twitter;
        self::$socialLink->linkedin     = $request->linkedin;
        self::$socialLink->save();
    }

    public static function updateSocialLink($request){
        self::$socialLink = self::first(); // get the first (only) record

        if (self::$socialLink) {
            self::$socialLink->facebook     = $request->facebook;
            self::$socialLink->instagram    = $request->instagram;
            self::$socialLink->twitter      = $request->twitter;
            self::$socialLink->linkedin     = $request->linkedin;
            self::$socialLink->save();
        }
    }

    public static function deleteSocialLink(){
        self::$socialLink = self::first();

        if (self::$socialLink) {
            self::$socialLink->delete();
        }
    }
}
