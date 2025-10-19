<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStories extends Model
{
    private static $successStories, $image, $imageName, $directory, $imageUrl;

    // for image storage 
    public static function imageUpload($request){

        if($request->hasFile('image')){
            self::$image = $request->image;
            self::$imageName = time() . '_' . uniqid() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'uploads/backend/success-stories-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }else{
            return 'uploads/backend/success-stories-images/default_success_image.png';
        }
        
    }

    // for storing data 
    public static function store($request){
        self::$successStories = new SuccessStories();
        self::$successStories->image = self::imageUpload($request);
        self::$successStories->heading = $request->heading;
        self::$successStories->content = $request->content;
        self::$successStories->save();
    }


    // for update success story
    public static function updateSuccessStory($request, $id){

        self::$successStories = SuccessStories::findOrFail($id);
        // Update image if a new file is uploaded
        if ($request->hasFile('image')) {
            if(self::$successStories->image !=='uploads/backend/success-stories-images/default_success_image.png' && file_exists(self::$successStories->image)){
                unlink(self::$successStories->image);
            }
            self::$successStories->image = self::imageUpload($request); // your existing imageUpload method
        }
        // Update other fields
        self::$successStories->heading = $request->heading;
        self::$successStories->content  = $request->content;
        self::$successStories->save();
    }


    // for deleting data 
    public static function deleteSuccessStory($id){
        self::$successStories = SuccessStories::findOrFail($id);
        if(self::$successStories->image !== 'uploads/backend/success-stories-images/default_success_image.png' && file_exists(self::$successStories->image)){
            unlink(self::$successStories->image);
        }
        self::$successStories->delete();
    }
}
