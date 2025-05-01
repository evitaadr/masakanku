@extends('layouts.layout_admin')

@section('title', 'Menus')

@section('header', 'Menus')

@section('actions')
<a href="{{ route('menus.create') }}" class="btn btn-sm btn-primary">
    <i class="fas fa-plus"></i> Add New Menu
</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td>{{ $menu->id_menu }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $menu->image_menu) }}" alt="{{ $menu->name_menu }}" class="img-thumbnail" width="80">
                        </td>
                        <td>{{ $menu->name_menu }}</td>
                        <td>{{ $menu->price_menu }}</td>
                        <td>{{ $menu->category->name_categories }}</td>
                        <td>
                            <a href="{{ route('menus.edit', $menu->id_menu) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('menus.destroy', $menu->id_menu) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
