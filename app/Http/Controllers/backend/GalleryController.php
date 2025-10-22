<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class GalleryController extends Controller
{
    public static function index(){
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        return view('backend.gallery.index', [
            'gallery' => $gallery
        ]);
    }

    public static function store(Request $request){
        Gallery::addToGallery($request);
        Swal::success([
            'title' => 'Gallery image added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public static function delete(String $id){
        Gallery::deleteGaleryImage($id);
        Swal::success([
            'title' => 'Image deleted successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public static function view(String $id){
        $gallery = Gallery::findOrFail($id);
        
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $gallery = Gallery::findOrFail($id);
        $gallery->status = $request->status;  // 1 or 0
        $gallery->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $gallery->status
        ]);
    }
}
