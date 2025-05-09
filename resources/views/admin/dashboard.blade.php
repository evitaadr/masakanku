@extends('layouts.layout_admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card mb-4 text-white" style="background-color: #963d20;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Categories</h5>
                        <h2 class="mb-0">{{ $categoryCount }}</h2>
                    </div>
                    <div>
                        <i class="fas fa-tags fa-3x"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center text-white">
                <span>View Details</span>
                <a href="{{ route('categories.index') }}" class="text-white">
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 text-white" style="background-color: #d32f2f;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Menus</h5>
                        <h2 class="mb-0">{{ $menuCount }}</h2>
                    </div>
                    <div>
                        <i class="fas fa-utensils fa-3x"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center text-white">
                <span>View Details</span>
                <a href="{{ route('menus.index') }}" class="text-white">
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 text-white" style="background-color: #d3582f;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Gallery Items</h5>
                        <h2 class="mb-0">{{ $galeriCount }}</h2>
                    </div>
                    <div>
                        <i class="fas fa-images fa-3x"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center text-white">
                <span>View Details</span>
                <a href="{{ route('galeris.index') }}" class="text-white">
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Overview</h5>
            </div>
            <div class="card-body">
                <p>Welcome to the Restaurant Management System. Use the sidebar to navigate to different sections.</p>
                <ul>
                    <li>Manage food categories</li>
                    <li>Add, edit, or remove menu items</li>
                    <li>Update the gallery</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
