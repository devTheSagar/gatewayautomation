<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\ServedIndustries;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function index(){
        $message = Contact::all();
        $client = Client::all();
        $service = Service::all();
        $industries = ServedIndustries::all();
        return view('backend.home', [
            'message' => $message,
            'client' => $client,
            'service' => $service,
            'industries' => $industries
        ]);
    }
}
