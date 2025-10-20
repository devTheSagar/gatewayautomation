<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    private static $technologies, $image, $imageName, $directory, $imageUrl;

    // for image storage 
    public static function imageUpload($request){

        if($request->hasFile('tech_logo')){
            self::$image = $request->tech_logo;
            self::$imageName = time() . '_' . uniqid() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'uploads/backend/technology-we-use/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }else{
            return 'uploads/backend/technology-we-use/default_tech_logo.png';
        }
        
    }

    // store data 
    public static function store($request){
        self::$technologies = new Technologies();
        self::$technologies->tech_logo = self::imageUpload($request);
        self::$technologies->alt_txt = $request->alt_txt;
        self::$technologies->save();
    }

    
    // for update 
    public static function updateTechnology($request, $id){

        self::$technologies = Technologies::findOrFail($id);
        // Update image if a new file is uploaded
        if ($request->hasFile('tech_logo')) {
            if(self::$technologies->tech_logo !=='uploads/backend/technology-we-use/default_tech_logo.png' && file_exists(self::$technologies->tech_logo)){
                unlink(self::$technologies->tech_logo);
            }
            self::$technologies->tech_logo = self::imageUpload($request); // your existing imageUpload method
        }
        // Update other fields
        self::$technologies->alt_txt = $request->alt_txt;
        self::$technologies->save();
    }

    // for deleting data 
    public static function deleteTechnology($id){
        self::$technologies = Technologies::findOrFail($id);
        if(self::$technologies->tech_logo !== 'uploads/backend/technology-we-use/default_tech_logo.png' && file_exists(self::$technologies->tech_logo)){
            unlink(self::$technologies->tech_logo);
        }
        self::$technologies->delete();
    }

}
