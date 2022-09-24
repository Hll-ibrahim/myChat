<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class AuthController extends Controller
{
    public function login() {
        return view('auth');
    }

    public function loginPost(Request $request) {
        if(Auth::attempt(['name'=>$request->name, 'password'=>$request->password])) {
            $data['messages'] = Message::orderBy( 'created_at', 'DESC')->get();
            return redirect()->route('index',$data);
        } else {
            return redirect()->route('login');
        }
    }

    public function logOut() {
        Auth::logout();
        return redirect()->route('index');
    }
}
