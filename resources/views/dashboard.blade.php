@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="w-full max-w-5xl px-4 py-8">
    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold">Halo, {{ Auth::user()->name }}! 👋</h1>
        <p class="text-gray-600">Selamat datang di area dashboard kamu.</p>
    </div>

    {{-- Info akun --}}
    <div class="grid md:grid-cols-2 gap-6 mb-10">
        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Profil</h2>
            <ul class="space-y-2 text-gray-700">
                <li><strong>Nama:</strong>  {{ Auth::user()->name }}</li>
                <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                <li><strong>Bergabung:</strong> {{ Auth::user()->created_at->format('d M Y') }}</li>
            </ul>
        </div>

        {{-- Contoh statistik --}}
        <div class="grid grid-cols-2 gap-4">
        