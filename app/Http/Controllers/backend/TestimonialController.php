<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class TestimonialController extends Controller
{
    public static function add(){
        return view('backend.testimonials.add');
    }

    public static function store(Request $request){
        $request->validate([
            'company_logo'          => 'required|image|mimes:png,jpg',
            'alt_txt'               => 'required',
            'client_name'           => 'required|max:225',
            'client_designation'    => 'required',
            'testimonial_content'   => 'required|max:3000'
        ]);
        Testimonial::store($request);
        Swal::success([
            'title' => 'Testimonial added successfully.',
            'timer' => 2000
        ]);
        return back();
    }

    public static function index(){
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        return view('backend.testimonials.index', [
            'testimonials' => $testimonials
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->status = $request->status;  // 1 or 0
        $testimonial->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $testimonial->status
        ]);
    }

    // show
    public static function view(String $id){
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonials.view', [
            'testimonial' => $testimonial
        ]);
    }


    // edit 
    public static function edit(String $id){
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonials.edit', [
            'testimonial' => $testimonial
        ]);
    }

    // update 
    public static function update(Request $request, String $id){
        $request->validate([
            'company_logo'          => 'nullable|image|mimes:png,jpg',
            'alt_txt'               => 'required',
            'client_name'           => 'required|max:225',
            'client_designation'    => 'required',
            'testimonial_content'   => 'required|max:3000'
        ]);
        Testimonial::updateTestimonial($request, $id);
        Swal::success([
            'title' => "Testimonial updated successfully.",
            'timer' => 2000,
        ]);
        return redirect()->route('admin.all.testimonial');
    }

    // delete data 
    public static function delete(String $id){
        Testimonial::deleteTestimonial($id);
        Swal::success([
            'title' => "Testimonial deleted successfully.",
            'timer' => 2000,
        ]);
        return back();
    }

}
