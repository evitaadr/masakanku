@extends('layouts.layout_admin')

@section('title', 'Add Menu')

@section('header', 'Add New Menu')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name_menu" class="form-label">Menu Name</label>
                <input type="text" class="form-control @error('name_menu') is-invalid @enderror" id="name_menu" name="name_menu" value="{{ old('name_menu') }}" required>
                @error('name_menu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price_menu" class="form-label">Price</label>
                <input type="text" class="form-control @error('price_menu') is-invalid @enderror" id="price_menu" name="price_menu" value="{{ old('price_menu') }}" required>
                @error('price_menu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description_menu" class="form-label">Description</label>
                <textarea class="form-control @error('description_menu') is-invalid @enderror" id="description_menu" name="description_menu" rows="4" required>{{ old('description_menu') }}</textarea>
                @error('description_menu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image_menu" class="form-label">Image</label>
                <input type="file" class="form-control @error('image_menu') is-invalid @enderror" id="image_menu" name="image_menu" required>
                @error('image_menu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="id_categories" class="form-label">Category</label>
                <select class="form-select @error('id_categories') is-invalid @enderror" id="id_categories" name="id_categories" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id_categories }}" {{ old('id_categories') == $category->id_categories ? 'selected' : '' }}>
                            {{ $category->name_categories }}
                        </option>
                    @endforeach
                </select>
                @error('id_categories')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('menus.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Menu</button>
            </div>
        </form>
    </div>
</div>
@endsection
