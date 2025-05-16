@extends('layouts.layout_admin')

@section('title', 'Edit Galeri')
@section('header', 'Edit Galeri')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('galeris.update', $galeri->id_galeri) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name_galeri" class="form-label">Judul Foto</label>
                <input type="text" class="form-control @error('name_galeri') is-invalid @enderror" id="name_galeri" name="name_galeri" value="{{ old('name_galeri', $galeri->name_galeri) }}" required>
                @error('name_galeri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description_galeri" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('description_galeri') is-invalid @enderror" id="description_galeri" name="description_galeri" rows="3" required>{{ old('description_galeri', $galeri->description_galeri) }}</textarea>
                @error('description_galeri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Saat Ini</label>
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $galeri->image_galeri) }}" alt="{{ $galeri->name_galeri }}" class="img-thumbnail" style="width: 200px; height: auto;">
                </div>
                <label for="image_galeri" class="form-label">Ganti Gambar (opsional)</label>
                <input class="form-control @error('image_galeri') is-invalid @enderror" type="file" id="image_galeri" name="image_galeri">
                @error('image_galeri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('galeris.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
