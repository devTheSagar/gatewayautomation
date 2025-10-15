<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    private static $carousel, $image, $imageName, $directory, $imageUrl;

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
