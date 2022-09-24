<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index() {
        $data['messages'] = Message::orderBy( 'created_at', 'DESC')->get();
        return view('index',$data);
    }
    public function create(Request $request) {
        $message = new Message;
        $message->user_id = Auth::id();
        $message->content = $request->content;
        $message->created_at = now();
        $message->updated_at = now();
        $message->save();
        $data['messages'] = Message::orderBy( 'created_at', 'DESC')->get();
        return view('index',$data);
    }
}
