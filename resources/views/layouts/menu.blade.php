@extends('layouts.layout')

@section('title', 'Menu')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Our Menu</h1>

    <!-- Categories Pills -->
    <div class="mb-5">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('menu') }}">All</a>
            </li>
            @foreach($categories as $category)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('menu.category', $category->id_categories) }}">{{ $category->name_categories }}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Menu Items -->
    <div class="row">
        @foreach($menus as $menu)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/' . $menu->image_menu) }}" class="card-img-top" alt="{{ $menu->name_menu }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->name_menu }}</h5>
                    <p class="card-text text-primary fw-bold">{{ $menu->price_menu }}</p>
                    <p class="card-text">{{ $menu->description_menu }}</p>
                    <p class="card-text"><small class="text-muted">Category: {{ $menu->category->name_categories }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
