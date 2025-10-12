<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact.index');
    }

    public function sendMessage(Request $request){
        $request->validate([
            'name'      => 'required|string|max:255',
            'phone'     => 'nullable|string|max:20|regex:/^[0-9+\-\s()]*$/',
            'email'     => 'required|email|max:255',
            'message'   => 'required|string',
        ], [
            'name.required'        => 'Please enter your full name.',
            'name.max'             => 'Name cannot be longer than 255 characters.',
            'phone.max'            => 'Phone number cannot be longer than 20 characters.',
            'phone.regex'          => 'Please enter a valid phone number.',
            'email.required'       => 'Please enter your email address.',
            'email.email'          => 'Please enter a valid email address.',
            'email.max'            => 'Email cannot be longer than 255 characters.',
            'message.required'     => 'Please write a message.',
        ]);

        Contact::storeMessage($request);
        Swal::success([
            'title' => 'Message sent successfully',
            'timer' => 2000,
        ]);
        return back()->with('message', 'Message sent successfully');
    }
}
