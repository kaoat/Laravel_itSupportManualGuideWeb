<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function getLoginPage()
    {
        $title = "Login";
        return view('userPage', compact('title'));
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email:rfc,dns'],
            'password' => ['required'],
        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return Redirect(route('managementpage'));
        }
        return Redirect(route('indexpage'));
    }

    function register(Request $request){
        $request->validate([
            "email"=>['required','email:rfc,dns'],
            "password"=>['required'],
        ]);
        $data=$request->all();
        $check=$this->create($data);
        return Redirect('/');
    }

    function create(array $data){
        return User::create([
            'username'=>"ImaiSan",
            'email'=>$data["email"],
            'password'=>Hash::make($data["password"]),
        ]);
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect(route('indexpage'));
    }
}
