<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_user' => 'required|email',
            'password_user' => 'required',
        ]);
    
        // Super Admin Hardcoded
        $superAdminEmail = 'admin@example.com';
        $superAdminPassword = 'supersecurepassword';
    
        $user = User::where('email_user', $request->email_user)->first();
    
        if ($request->email_user === $superAdminEmail && $request->password_user === $superAdminPassword) {
            $user = User::where('email_user', $superAdminEmail)->first();
            if ($user) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }
        }
    
        return back()->withErrors([
            'email_user' => 'Email atau password salah.',
        ]);
    }
    
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username_user' => 'required|string|max:255',
            'email_user' => 'required|string|email|max:255|unique:users',
            'password_user' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'username_user' => $request->username_user,
            'email_user' => $request->email_user,
            'password_user' => $request->password_user,
        ]);

        Auth::login($user);

        return redirect('/admin/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
