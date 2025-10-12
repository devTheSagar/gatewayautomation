<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class MessageController extends Controller
{
    public function index(){
        $messages = Contact::orderBy('created_at', 'desc')->get();
        return view('backend.message.index', [
            'messages' => $messages
        ]);
    }

    public function view(String $id){
        $message = Contact::find($id);
        
        if ($message->is_read == 0) {
            $message->is_read = 1;
            $message->save();
        }
        return view('backend.message.view', [
            'message' => $message
        ]);
    }

    public function destroy(String $id){
        Contact::destroyMessage($id);
        Swal::success([
            'title' => 'Message deleted successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    public function bulkDestroy(Request $request){
        
        $ids = $request->ids;

        if ($ids && count($ids) > 0) {
            Contact::whereIn('id', $ids)->delete();

            Swal::success([
                'title' => 'Selected messages deleted successfully',
                'timer' => 2000,
            ]);
        } else {
            Swal::warning([
                'title' => 'No messages selected',
                'timer' => 2000,
            ]);
        }

        return back();
    }

}
