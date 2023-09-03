<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class customLoginController extends Controller
{
    public function login(){
        return view('login/login');        
    }
    public function register(){
        return view('login/register');
    }
    
    public function registerUser(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:4',
        ]);
        
        // If validation passes, create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
    //
}


