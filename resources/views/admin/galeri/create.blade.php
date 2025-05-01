@extends('layouts.layout_admin')

@section('title', 'Tambah Galeri')
@section('header', 'Tambah Galeri')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('galeris.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name_galeri" class="form-label">Nama Galeri</label>
                <input type="text" class="form-control @error('name_galeri') is-invalid @enderror" id="name_galeri" name="name_galeri" value="{{ old('name_galeri') }}" required>
                @error('name_galeri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description_galeri" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('description_galeri') is-invalid @enderror" id="description_galeri" name="description_galeri" rows="3" required>{{ old('description_galeri') }}</textarea>
                @error('description_galeri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image_galeri" class="form-label">Gambar</label>
                <input class="form-control @error('image_galeri') is-invalid @enderror" type="file" id="image_galeri" name="image_galeri" required>
                @error('image_galeri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('galeris.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
