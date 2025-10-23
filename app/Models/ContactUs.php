<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    private static $contactUs;

    public static function storeContactUs($request){
        self::$contactUs                = new ContactUs();
        self::$contactUs->address       = $request->address;
        self::$contactUs->email         = $request->email;
        self::$contactUs->day_to_day    = $request->day_to_day;
        self::$contactUs->time_to_time  = $request->time_to_time;
        self::$contactUs->tnt           = $request->tnt;
        self::$contactUs->mobile        = $request->mobile;
        self::$contactUs->save();
    }

    public static function updateContactUs($request){
        self::$contactUs = self::first(); // get the first (only) record

        if (self::$contactUs) {
            self::$contactUs->address       = $request->address;
            self::$contactUs->email         = $request->email;
            self::$contactUs->day_to_day    = $request->day_to_day;
            self::$contactUs->time_to_time  = $request->time_to_time;
            self::$contactUs->tnt           = $request->tnt;
            self::$contactUs->mobile        = $request->mobile;
            self::$contactUs->save();
        }
    }

    public static function deleteContactUs(){
        self::$contactUs = self::first();

        if (self::$contactUs) {
            self::$contactUs->delete();
        }
    }
}
