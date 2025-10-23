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
        $request->validate([
            'mission'        => 'required|max:2000',
            'vision'         => 'required|max:2000',
            'card_icon.*'    => 'required|max:250',
            'card_heading.*' => 'required|max:250',
            'card_text.*'    => 'required|max:500',
            'story'          => 'required|max:5000',
        ], [
            'card_icon.*.required'    => 'Card logo is required',
            'card_heading.*.required' => 'Card heading is required',
            'card_text.*.required'    => 'Card text is required',
        ]);

        AboutUs::storeaboutUs($request);
        Swal::success([
            'title' => 'About us content added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }


    public function update(Request $request){
        $request->validate([
            'mission'        => 'required|max:2000',
            'vision'         => 'required|max:2000',
            'card_icon.*'    => 'required|max:250',
            'card_heading.*' => 'required|max:250',
            'card_text.*'    => 'required|max:500',
            'story'          => 'required|max:5000',
        ], [
            'card_icon.*.required'    => 'Card logo is required',
            'card_heading.*.required' => 'Card heading is required',
            'card_text.*.required'    => 'Card text is required',
        ]);
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
