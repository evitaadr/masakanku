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
        $superAdminEmail = 'aprilisarahma4@gmail.com';
        $superAdminPassword = 'aprilisarah2025';

        if ($request->email_user === $superAdminEmail && $request->password_user === $superAdminPassword) {
            // Cari user super admin di database, jika tidak ada, buat dulu
            $user = \App\Models\User::firstOrCreate(
                ['email_user' => $superAdminEmail],
                [
                    'username_user' => 'SuperAdmin',
                    'password_user' => $superAdminPassword, // akan di-hash oleh mutator
                    'role_user' => 'super_admin',
                ]
            );
            \Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        // Login staff/admin dari database
        $user = \App\Models\User::where('email_user', $request->email_user)->first();
        if ($user && in_array($user->role_user, ['admin', 'staff']) && \Hash::check($request->password_user, $user->password_user)) {
            \Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        // Jika gagal login, tampilkan error
        return back()->withInput()->withErrors([
            'email_user' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
