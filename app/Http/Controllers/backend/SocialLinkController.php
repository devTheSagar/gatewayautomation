<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class SocialLinkController extends Controller
{
    public static function index(){
        $socialLink = SocialLink::first();
        return view('backend.social-links.index', [
            'socialLink' => $socialLink
        ]);
    }

    public static function store(Request $request){
        SocialLink::storeSocialLink($request);
        Swal::success([
            'title' => 'Social link details added successfully',
            'timer' => 2000
        ]);
        return back();
    }

    public function update(Request $request){
        SocialLink::updateSocialLink($request);
        Swal::success([
            'title' => 'Social link details updated successfully.',
            'timer' => 2000,
        ]);
        return back();
    }

    public function delete(){
        SocialLink::deleteSocialLink();
        Swal::success([
            'title' => 'Social link deleted successfully.',
            'timer' => 2000,
        ]);
        return back();
    }
}
