<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('sign-in', [
            'title'     => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username'  =>  'required',
            'password'  =>  'required'
        ]);



        dd("berhasil");
    }
}
