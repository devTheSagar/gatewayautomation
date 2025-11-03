<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SuccessStories;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class SuccessStoriesController extends Controller
{
    // add form 
    public static function add(){
        return view('backend.success-stories.add');
    }

    // store 
    public static function store(Request $request){
        $request->validate([
            'image'     => 'required|mimes:png,jpg,jpeg,webp',
            'heading'   => 'required|max:250',
            'content'   => 'required|max:1200'
        ]);
        SuccessStories::store($request);
        Swal::success([
            'title' => 'Success story added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    // all
    public static function index(){
        $successStories = SuccessStories::orderBy('created_at', 'desc')->get();
        return view('backend.success-stories.index', [
            'successStories' => $successStories
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $carousel = SuccessStories::findOrFail($id);
        $carousel->status = $request->status;  // 1 or 0
        $carousel->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $carousel->status
        ]);
    }

    // show
    public static function view(String $id){
        $successStory = SuccessStories::findOrFail($id);
        return view('backend.success-stories.view', [
            'successStory' => $successStory
        ]);
    }

    // edit 
    public static function edit(String $id){
        $successStory = SuccessStories::findOrFail($id);
        return view('backend.success-stories.edit', [
            'successStory' => $successStory
        ]);
    }

    // update 
    public static function update(Request $request, String $id){
        $request->validate([
            'image'     => 'nullable|mimes:png,jpg,jpeg,webp',
            'heading'   => 'required|max:250',
            'content'   => 'required|max:1200'
        ]);
        SuccessStories::updateSuccessStory($request, $id);
        Swal::success([
            'title' => "Success story updated successfully.",
            'timer' => 2000,
        ]);
        return redirect()->route('admin.all.success-stories');
    }

    // delete data 
    public static function delete(String $id){
        SuccessStories::deleteSuccessStory($id);
        Swal::success([
            'title' => "Success story deleted successfully.",
            'timer' => 2000,
        ]);
        return back();
    }

}
