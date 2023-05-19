<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login2Controller extends Controller
{
    public function login2(){
        return view('form');
    }

    public function login2post(Request $request){
        //dd($request);
        $acc =[
            'email'=> $request->name,
            'password'=> $request->password,
        ];
        //dd($acc['name']);
        //dd (Auth::attempt($acc));
        //dd(Auth::check()&&Auth::user()->email=="mrphu852@gmail.com");
        if(Auth::attempt( $acc)){
            $request->session()->regenerate();
            return to_route("homepage");
        }
        return to_route ("login2");
    }
}
