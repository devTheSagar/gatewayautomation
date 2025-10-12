<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    private static $message;

    public static function storeMessage($request){
        self::$message = new Contact();
        self::$message->name        = $request->name;
        self::$message->phone       = $request->phone;
        self::$message->email       = $request->email;
        self::$message->message     = $request->message;
        self::$message-> save();
    }

    public static function destroyMessage($id) {
        $message = Contact::findOrFail($id);
        $message->delete();
    }

}
