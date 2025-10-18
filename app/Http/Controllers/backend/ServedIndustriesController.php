<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ServedIndustries;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ServedIndustriesController extends Controller
{
    // show add form 
    public static function add(){
        return view('backend.served-industries.add');
    }

    // store data in db 
    public static function store(Request $request){
        $request->validate([
            'icon_code' => 'required|max:100',
            'industry'  => 'required|max:200'
        ]);
        ServedIndustries::storeServedIndustry($request);
        Swal::success([
            'title' => 'Served industry added successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    // show all db data 
    public static function index(){
        $servedIndustries = ServedIndustries::orderBy('created_at', 'desc')->get();
        return view('backend.served-industries.index', [
            'servedIndustries' => $servedIndustries
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $carousel = ServedIndustries::findOrFail($id);
        $carousel->status = $request->status;  // 1 or 0
        $carousel->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $carousel->status
        ]);
    }

    // update 
    public static function update(Request $request, String $id){
        $request->validate([
            'icon_code' => 'required',
            'industry' => 'required'
        ]);
        ServedIndustries::updateServedIndustry($request, $id);
        Swal::success([
            'title' => 'Served industry updated successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    // delete 
    public static function delete(String $id){
        ServedIndustries::deleteServedIndustry($id);
        Swal::success([
            'title' => 'Served industry deleted successfully',
            'timer' => 2000,
        ]);
        return back();
    }
}
