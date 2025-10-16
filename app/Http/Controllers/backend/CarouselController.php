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
        $request->validate([
            'carousel_image'    => 'required|mimes:png,jpg,jpeg',
            'carousel_heading'  => 'nullable|string|max:2000',
            'learn_more_link'   => 'nullable|url'
        ]);

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

    public function show($identifier){
        $carousel = Carousel::where('slug', $identifier)
                            ->orWhere('id', $identifier)
                            ->firstOrFail();

        return view('backend.carousel.view', compact('carousel'));
    }


    // for see the edit form with specific data 
    public static function edit($id){
        $carousel = Carousel::findOrFail($id);
        return view('backend.carousel.edit', [
            'carousel' => $carousel
        ]);
    }

    // update the edits 
    public static function update(Request $request, String $id){
        Carousel::updateCarousel($request, $id);
        Swal::success([
            'title' => 'Carousel updated successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    // delete data 
    public static function delete(String $id){
        Carousel::deleteCarousel($id);
        Swal::success([
            'title' => 'Carousel updated successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

}
