<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ClientController extends Controller
{
    public static function add(){
        return view('backend.clients.add');
    }

    public static function store(Request $request){
        $request->validate([
            'client_logo'   => 'required|image|mimes:png,jpg',
            'alt_txt'       => 'required|max:255',
            'company_name'  => 'required|max:255'
        ]);
        Client::addClient($request);
        Swal::success([
            'title' => 'Client added successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public static function index(){
        $clients = Client::orderBy('created_at', 'desc')->get();
        return view('backend.clients.index', [
            'clients' => $clients
        ]);
    }

    // store active status to db 
    public function changeStatus(Request $request, $id){
        $client = Client::findOrFail($id);
        $client->status = $request->status;  // 1 or 0
        $client->save();

        return response()->json([
            'success' => true,
            'message' => 'Client updated successfully.',
            'status' => $client->status
        ]);
    }

    public static function view(String $id){
        $client = Client::findOrFail($id);
        return view('backend.clients.view', [
            'client' => $client
        ]);
    }

    public static function edit(String $id){
        $client = Client::findOrFail($id);
        return view('backend.clients.edit', [
            'client' => $client
        ]);
    }

    public static function update(Request $request, String $id){
        $request->validate([
            'client_logo'   => 'nullable|image|mimes:png,jpg',
            'alt_txt'       => 'required|max:255',
            'company_name'  => 'required|max:255'
        ]);
        Client::updateClient($request, $id);
        Swal::success([
            'title' => 'Client info updated successfully.',
            'timer' => 2000,
        ]);
        return redirect()->route('admin.all.client');
    }

    // delete data 
    public static function delete(String $id){
        Client::deleteClient($id);
        Swal::success([
            'title' => "Client deleted successfully.",
            'timer' => 2000,
        ]);
        return back();
    }
}
