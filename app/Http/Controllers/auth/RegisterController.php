<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required|email',
            'bio' => 'required|min:10|max:255',
            'password' => 'required|min:6|max:255|confirmed'
        ]);
        
    }
}
