<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    private static $content;

    public static function storeContent($request){
        self::$content = new Content();
        self::$content->heading = $request->heading;
        self::$content->sub_heading = $request->sub_heading;
        self::$content->content = $request->content;
        self::$content->save();
    }

    public static function updateContent($request){
        self::$content = self::first(); // get the first (only) record

        if (self::$content) {
            self::$content->heading = $request->heading;
            self::$content->sub_heading = $request->sub_heading;
            self::$content->content = $request->content;
            self::$content->save();
        }
    }

    public static function deleteContent(){
        self::$content = self::first();

        if (self::$content) {
            self::$content->delete();
        }
    }
}
