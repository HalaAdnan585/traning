<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class registerationController extends Controller
{
    //


    function showRegisterPage(Request $request){
        return view('register');
    }
   
public function store(Request $request){
    $this->validate(request(),[
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',

    ]);
    $user = user::create(request(['name','email','password','place','mobile']));
    // auth()->login($user);
    return redirect()->to('/');


}
}
