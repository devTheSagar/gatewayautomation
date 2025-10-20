<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    private static $testimonial, $image, $imageName, $directory, $imageUrl;

    // for image storage 
    public static function imageUpload($request){

        if($request->hasFile('company_logo')){
            self::$image = $request->company_logo;
            self::$imageName = time() . '_' . uniqid() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'uploads/backend/testimonial-company-logo/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }else{
            return 'uploads/backend/testimonial-company-logo/default_company.png';
        }
        
    }

    // store data 
    public static function store($request){
        self::$testimonial = new Testimonial();
        self::$testimonial->company_logo = self::imageUpload($request);
        self::$testimonial->alt_txt = $request->alt_txt;
        self::$testimonial->client_name = $request->client_name;
        self::$testimonial->client_designation = $request->client_designation;
        self::$testimonial->testimonial_content = $request->testimonial_content;
        self::$testimonial->save();
    }

    // for update testimonial
    public static function updateTestimonial($request, $id){

        self::$testimonial = Testimonial::findOrFail($id);
        // Update image if a new file is uploaded
        if ($request->hasFile('company_logo')) {
            if(self::$testimonial->company_logo !=='uploads/backend/testimonial-company-logo/default_company.png' && file_exists(self::$testimonial->company_logo)){
                unlink(self::$testimonial->company_logo);
            }
            self::$testimonial->company_logo = self::imageUpload($request); // your existing imageUpload method
        }
        // Update other fields
        self::$testimonial->alt_txt = $request->alt_txt;
        self::$testimonial->client_name = $request->client_name;
        self::$testimonial->client_designation = $request->client_designation;
        self::$testimonial->testimonial_content = $request->testimonial_content;
        self::$testimonial->save();
    }

    // for deleting data 
    public static function deleteTestimonial($id){
        self::$testimonial = Testimonial::findOrFail($id);
        if(self::$testimonial->company_logo !== 'uploads/backend/success-stories-images/default_success_image.png' && file_exists(self::$testimonial->company_logo)){
            unlink(self::$testimonial->company_logo);
        }
        self::$testimonial->delete();
    }


}
