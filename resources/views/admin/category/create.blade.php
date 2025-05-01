@extends('layouts.layout_admin')

@section('title', 'Add Category')

@section('header', 'Add New Category')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name_categories" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('name_categories') is-invalid @enderror" id="name_categories" name="name_categories" value="{{ old('name_categories') }}" required>
                @error('name_categories')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
        </form>
    </div>
</div>
@endsection
