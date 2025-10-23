<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brochure;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class BrochureController extends Controller
{
    public static function index(){
        $brochure = Brochure::first();
        return view('backend.brochure.index', [
            'brochure' => $brochure
        ]);
    }

    // Upload brochure
    public function upload(Request $request){
        $brochure = Brochure::first() ?? new Brochure();

        // If brochure already exists, delete the old file first
        if ($brochure->brochure && file_exists(public_path($brochure->brochure))) {
            unlink(public_path($brochure->brochure));
        }

        if ($request->hasFile('brochure')) {
            $file = $request->file('brochure');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/backend/brochure'), $fileName);
            $brochure->brochure = 'uploads/backend/brochure/'.$fileName;
        }

        $brochure->save();

        Swal::success([
            'title' => 'Brochure updated successfully',
            'timer' => 2000
        ]);

        return back();
    }


}
