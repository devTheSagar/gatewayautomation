<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public static function index(string $slug){
        $service = Service::where('slug', $slug)
                        ->where('status', 1)  // only active
                        ->firstOrFail();      // return single model or 404

        return view('frontend.services.index', [
            'service' => $service
        ]);
    }

}
