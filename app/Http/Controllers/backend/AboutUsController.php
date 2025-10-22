<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class AboutUsController extends Controller
{
    public static function index(){
        $aboutUs = AboutUs::first();
        return view('backend.about-us.index',[
            'aboutUs' => $aboutUs
        ]);
    }

    public static function store(Request $request){
        AboutUs::storeaboutUs($request);
        Swal::success([
            'title' => 'About us content added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }


    public function update(Request $request){
        AboutUs::updateAboutUs($request);
        Swal::success([
            'title' => 'About us updated successfully.',
            'timer' => 2000,
        ]);
        return back();
    }
    

    public function delete(){
        AboutUs::deleteAboutUs();
        Swal::success([
            'title' => 'About us deleted successfully.',
            'timer' => 2000,
        ]);
        return back();
    }
}
