<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ContactUsController extends Controller
{
    public static function index(){
        $contactUs = ContactUs::first();
        return view('backend.contact-us.index', [
            'contactUs' => $contactUs
        ]);
    }

    public static function store(Request $request){
        ContactUs::storeContactUs($request);
        Swal::success([
            'title' => 'Contact us details added successfully',
            'timer' => 2000
        ]);
        return back();
    }

    public function update(Request $request){
        ContactUs::updateContactUs($request);
        Swal::success([
            'title' => 'Contact us details updated successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public function delete(){
        ContactUs::deleteContactUs();
        Swal::success([
            'title' => 'AContact us deleted successfully.',
            'timer' => 2000,
        ]);
        return back();
    }
}
