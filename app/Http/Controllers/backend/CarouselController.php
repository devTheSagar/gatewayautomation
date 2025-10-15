<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class CarouselController extends Controller
{
    public static function add(){
        return view('backend.carousel.add');
    }

    public static function store(Request $request){
        Carousel::addCarousel($request);
        Swal::success([
            'title' => 'Carousel added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public static function index(){
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        return view('backend.carousel.index', [
            'carousels' => $carousels
        ]);
    }
}
