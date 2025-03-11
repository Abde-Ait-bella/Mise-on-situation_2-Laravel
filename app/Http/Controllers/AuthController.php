<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Auth::attempt($data);

        if (Auth::check()) {
            return redirect('/');
        }else{
            return redirect('/login')->with('message','!!!!');
        }
    }
}
