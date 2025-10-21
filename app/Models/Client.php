<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    private static $client, $image, $imageName, $directory, $imageUrl;

    // for image storage 
    public static function imageUpload($request){
        if($request->hasFile('client_logo')){
            self::$image = $request->client_logo;
            self::$imageName = time() . '_' . uniqid() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'uploads/backend/client-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }else{
            return 'uploads/backend/client-images/default_client_image.jpg';
        }
    }

    // for storing data of carousel 
    public static function addClient($request){
        self::$client = new Client();
        self::$client->client_logo = self::imageUpload($request);
        self::$client->alt_txt = $request->alt_txt;
        self::$client->company_name = $request->company_name;
        self::$client->status = $request->status ?? 1; // default active if not provided
        self::$client->save();
    }



    // for update client
    public static function updateClient($request, $id){
        self::$client = Client::findOrFail($id);

        // Update image if a new file is uploaded
        if ($request->hasFile('client_logo')) {
            if(self::$client->client_logo !=='uploads/backend/client-images/default_client_image.jpg' && file_exists(self::$client->client_logo)){
                unlink(self::$client->client_logo);
            }
            self::$client->client_logo = self::imageUpload($request); // your existing imageUpload method
        }

        // Update other fields
        self::$client->alt_txt = $request->alt_txt;
        self::$client->company_name = $request->company_name;
        self::$client->save();
    }


    // for deleting data 
    public static function deleteClient($id){
        self::$client = Client::findOrFail($id);
        if(self::$client->client_logo !== 'uploads/backend/client-images/default_client_image.jpg' && file_exists(self::$client->client_logo)){
            unlink(self::$client->client_logo);
        }
        self::$client->delete();
    }
}
