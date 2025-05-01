<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
      // Username dan password hardcode
      protected $validUsername = 'admin';
      protected $validPassword = 'password123';

      /**
       * Menampilkan form login
       *
       * @return \Illuminate\View\View
       */
      public function showLoginForm()
      {
          return view('auth.login');
      }

      /**
       * Memproses permintaan login
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\RedirectResponse
       */
      public function login(Request $request)
      {
          // Validasi input
          $request->validate([
              'username' => 'required|string',
              'password' => 'required|string',
          ]);

          $username = $request->input('username');
          $password = $request->input('password');

          // Cek apakah username dan password sesuai dengan nilai hardcode
          if ($username === $this->validUsername && $password === $this->validPassword) {
              // Login berhasil
              Session::put('isLoggedIn', true);
              Session::put('username', $username);
              Session::put('role', 'admin');

              return redirect()->route('admin.dashboard')
                  ->with('success', 'Login berhasil! Selamat datang ' . $username);
          }

          // Login gagal
          return redirect()->back()
              ->withInput($request->only('username'))
              ->withErrors(['loginError' => 'Username atau password salah!']);
      }

      /**
       * Melakukan logout
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\RedirectResponse
       */
      public function logout(Request $request)
      {
          // Hapus semua data sesi
          Session::flush();

          return redirect()->route('login')
              ->with('success', 'Anda telah berhasil logout.');
      }

      /**
       * Middleware untuk memastikan user sudah login
       * Bisa digunakan di routes untuk melindungi rute admin
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \Closure  $next
       * @return mixed
       */
      public function authenticate($request, $next)
      {
          if (!Session::has('isLoggedIn')) {
              return redirect()->route('login')
                  ->withErrors(['loginError' => 'Harap login terlebih dahulu!']);
          }

          return $next($request);
      }

}
