@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-semibold mb-6 text-center">Login</h1>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full border rounded px-3 py-2" required autofocus>
            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1">Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button class="w-full py-2 rounded bg-indigo-600 text-white font-semibold hover:bg-indigo-700">
            Login
        </button>
    </form>
</div>
@endsection