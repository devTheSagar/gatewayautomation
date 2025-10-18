<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ContentController extends Controller
{
    public static function index(){
        // Get the first (and only) content record
        $content = Content::first();
        return view('backend.content.index',[
            'content' => $content
        ]);
    }

    public static function store(Request $request){
        $request->validate([
            'heading'       => 'required|max:300',
            'sub_heading'   => 'required|max:500',
            'content'       => 'required|max:5000'
        ]);
        Content::storeContent($request);
        Swal::success([
            'title' => 'Carousel added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public function update(Request $request){
        $request->validate([
            'heading'       => 'required|max:300',
            'sub_heading'   => 'required|max:500',
            'content'       => 'required|max:5000'
        ]);
        Content::updateContent($request);
        Swal::success([
            'title' => 'Content updated successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public function delete(){
        Content::deleteContent();

        Swal::success([
            'title' => 'Content deleted successfully.',
            'timer' => 2000,
        ]);

        return back();
    }
}
