<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
  public function getloginpage(){
    return view('login');
  }


    public function login(Request $request){
      $credentials= $request->only('email','password');
      if(Auth::attempt($credentials)){
        return redirect()->route('login');
      }else{

        return redirect()->intended('login');
      }

    }
}
