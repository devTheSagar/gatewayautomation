<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServedIndustries extends Model
{
    private static $servedIndustry;

    public static function storeServedIndustry($request){
        self::$servedIndustry = new ServedIndustries();
        self::$servedIndustry->icon_code = $request->icon_code;
        self::$servedIndustry->industry = $request->industry;
        self::$servedIndustry->save();
    }
}
