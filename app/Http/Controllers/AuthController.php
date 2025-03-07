<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm(){
        $roles=Role::where('name','<>','Admin')->get();
        // dd($roles);
        return view('auth.register',compact('roles'));
    }
    public function showLoginForm(){
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => ['required','string','max:255'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
            'role_id'=>'required|exists:roles,id',
        ]);

        User::create([
            'name' => $request->name,
            'image'=> $request->image,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id'=> $request->role_id,
        ]);

        return redirect()->route('login')->with('success', 'Inscription réussie, connectez-vous !');
        // return redirect("/login")->with('success', 'Inscription réussie, connectez-vous !');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // return redirect('dashboard');
            return view('dashboard');
        }

        return back()->withErrors(['email' => 'Email ou mot de passe incorrect']);
    }


}