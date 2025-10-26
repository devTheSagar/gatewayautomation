<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ServiceController extends Controller
{
    public static function add(){
        return view('backend.services.add');
    }

    public static function store(Request $request){
        Service::addService($request);
        Swal::success([
            'title' => 'Service added successfully',
            'timer' => 2000
        ]);
        return back();
    }

    public static function index(){
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('backend.services.index', [
            'services' => $services
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $service = Service::findOrFail($id);
        $service->status = $request->status;  // 1 or 0
        $service->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $service->status
        ]);
    }
    
    public static function show(String $id){
        $service = Service::findOrFail($id);
        return view('backend.services.view', [
            'service' => $service
        ]);
    }

    public static function edit(String $id){
        $service = Service::findOrFail($id);
        return view('backend.services.edit', [
            'service' => $service
        ]);
    }

    // app/Http/Controllers/backend/ServiceController.php

    public static function update(Request $request, String $id){
        // Update service using the model method
        Service::updateService($request, $id);
        // Success message (SweetAlert)
        Swal::success([
            'title' => 'Service updated successfully',
            'timer' => 2000
        ]);
        return redirect()->route('admin.all.service');
    }

}
