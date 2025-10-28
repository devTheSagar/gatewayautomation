<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::where('status', 1)->latest()->get();
        return view('frontend.clients.index', [
            'clients' => $clients
        ]);
    }
}
