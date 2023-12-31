<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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

    public function loginUser(Request $request){
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:4',
        ]);

      
    
        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            // Authentication passed
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('/dashboard')->with('success', 'Login successful!');
            }else{
                return back()->with('fail', 'Login failed. Please check your password.');

            }

            // return redirect('/'); // Redirect to a dashboard or any desired page
        } else {
            // Authentication failed
            return back()->with('fail', 'Login failed. Please check your user.');
        }
    }
    // use Illuminate\Support\Facades\Session;

    public function dashboard(){
        $data = null; // Initialize the data variable
    
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $data = User::find($userId); // Retrieve user data by the loginId from the session
        }
    
        return view('dashboard/dashboard', compact('data'));
    }

    public function logout(){
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
    
}

