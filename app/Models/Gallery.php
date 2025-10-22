<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    private static $gallery, $image, $imageName, $directory, $imageUrl;

    // for image storage 
    public static function imageUpload($request){
        if($request->hasFile('gallery_image')){
            self::$image = $request->gallery_image;
            self::$imageName = time() . '_' . uniqid() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'uploads/backend/gallery-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }else{
            return 'uploads/backend/gallery-images/default_gallery_image.jpg';
        }
    }

    // store 
    public static function addToGallery($request){
        self::$gallery = new Gallery();
        self::$gallery->gallery_image = self::imageUpload($request);
        self::$gallery->save();
    }


    // for deleting data 
    public static function deleteGaleryImage($id){
        self::$gallery = Gallery::findOrFail($id);
        if(self::$gallery->gallery_image !== 'uploads/backend/gallery-images/default_gallery_image.jpg' && file_exists(self::$gallery->gallery_image)){
            unlink(self::$gallery->gallery_image);
        }
        self::$gallery->delete();
    }
}
