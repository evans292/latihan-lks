<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request) 
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        return redirect()->route('login')->with('success', 'Registration success, please login');
    } 

    public function loginProcess(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if($user) {
            # code...
            if (Hash::check($request->password, $user->password)) {
                # code...
                Session::put('user_id', $user->id);
                Session::put('role_id', $user->role_id);
                Session::put('name', $user->name);
                Session::put('password', $user->password);

                Session::put('login', TRUE);

                return redirect(route('home'));
            }
        }
    }
    
    public function logout()
    {
        Session::flush();

        return back();
    }
}
