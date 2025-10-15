<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public static function add(){
        return view('backend.carousel.add');
    }

    public static function index(){
        return view('backend.carousel.index');
    }
}
