<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
    function showLoginPage (Request $request){
        return view('login');
    }

    function Login (Request $request){
       if (auth()->attempt (request(['email','password']))==false){
           return back()->withErrors([
         'massage'=>' email or pass not found'
           ]);
       }
       return redirect()->to('/dashboard');
    }
}
