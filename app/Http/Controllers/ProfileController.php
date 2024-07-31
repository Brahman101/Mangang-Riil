<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data atau lakukan aksi lain sesuai kebutuhan Anda

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    //LOGIN
    public function index_login()
    {
        return view('auth.login');
    }
    public function index_regis()
    {
        return view('auth.register');
    }

    public function login_proses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('profile');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email/Password Salah']);
        }
    }

    //LOGOUT
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout Berhasil');
    }
}
