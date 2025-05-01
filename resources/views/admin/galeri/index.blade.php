@extends('layouts.layout_admin')

@section('title', 'Galeri')
@section('header', 'Galeri')

@section('actions')
<a href="{{ route('galeris.create') }}" class="btn btn-sm btn-primary">
    <i class="fas fa-plus"></i> Tambah Galeri
</a>
@endsection

@section('content')
<div class="row">
    @foreach($galeris as $galeri)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/' . $galeri->image_galeri) }}" class="card-img-top" alt="{{ $galeri->name_galeri }}" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">{{ $galeri->name_galeri }}</h5>
                <p class="card-text">{{ $galeri->description_galeri }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('galeris.edit', $galeri->id) }}" class="btn btn-sm btn-info">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('galeris.destroy', $galeri->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus galeri ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
