<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username_user' => 'required',
            'email_user' => 'required|email|unique:users,email_user',
            'password_user' => 'required|min:8',
            'role_user' => 'required|in:admin,staff',
        ]);

        User::create([
            'username_user' => $request->username_user,
            'email_user' => $request->email_user,
            'password_user' => $request->password_user, // mutator akan hash otomatis
            'role_user' => $request->role_user,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username_user' => 'required',
            'email_user' => 'required|email|unique:users,email_user,' . $user->id_user . ',id_user',
            'role_user' => 'required|in:admin,staff',
            'password_user' => 'nullable|min:8',
        ]);

        $user->username_user = $request->username_user;
        $user->email_user = $request->email_user;
        $user->role_user = $request->role_user;
        if ($request->filled('password_user')) {
            $user->password_user = $request->password_user; // mutator akan hash otomatis
        }
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}
