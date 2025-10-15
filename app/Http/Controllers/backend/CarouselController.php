<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class CarouselController extends Controller
{
    // show carousel form 
    public static function add(){
        return view('backend.carousel.add');
    }

    // add carousel 
    public static function store(Request $request){
        Carousel::addCarousel($request);
        Swal::success([
            'title' => 'Carousel added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    // all carousels 
    public static function index(){
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        return view('backend.carousel.index', [
            'carousels' => $carousels
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $carousel = Carousel::findOrFail($id);
        $carousel->status = $request->status;  // 1 or 0
        $carousel->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $carousel->status
        ]);
    }

    public static function view($slug){
        $carousel = Carousel::where('slug', $slug)->firstOrFail();
        return view('backend.carousel.view', [
            'carousel' => $carousel
        ]);
    }

}
