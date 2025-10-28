<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::where('status', 1)->latest()->get();

        return view('frontend.gallery.index', [
            'gallery' => $gallery
        ]);
    }
}
