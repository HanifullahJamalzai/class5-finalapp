<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

        User::create([
                'name' => $request->name,
                'email' => $request->email,
                'bio' => $request->bio,
                'password' => bcrypt($request->password)
            ]);
        
        // dd($request->all());
        session()->flash('success', 'You have successfully registered');
        return redirect('login');
    }
}
