<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Technologies;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class TechnologiesController extends Controller
{
    public static function add(){
        return view('backend.technologies.add');
    }

    public static function store(Request $request){
        $request->validate([
            'tech_logo' => 'required|image|mimes:png,jpg',
            'alt_txt'   => 'required'
        ]);
        Technologies::store($request);
        Swal::success([
            'title' => 'Technogoy added successfully.',
            'timer' => 2000
        ]);
        return back();
    }

    public static function index(){
        $technologies = Technologies::orderBy('created_at', 'desc')->get();
        return view('backend.technologies.index', [
            'technologies' => $technologies
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $technology = Technologies::findOrFail($id);
        $technology->status = $request->status;  // 1 or 0
        $technology->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $technology->status
        ]);
    }


    // update 
    public static function update(Request $request, String $id){
        $request->validate([
            'tech_logo' => 'nullable|image|mimes:png,jpg',
            'alt_txt'   => 'required'
        ]);
        Technologies::updateTechnology($request, $id);
        Swal::success([
            'title' => 'Served industry updated successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    // delete data 
    public static function delete(String $id){
        Technologies::deleteTechnology($id);
        Swal::success([
            'title' => "Technology deleted successfully.",
            'timer' => 2000,
        ]);
        return back();
    }
}
