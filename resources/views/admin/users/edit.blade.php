@extends('layouts.layout_admin')

@section('title', 'Edit User')

@section('header', 'Edit User')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="username_user" class="form-label">Username</label>
                <input type="text" class="form-control @error('username_user') is-invalid @enderror"
                       id="username_user" name="username_user" value="{{ old('username_user', $user->username_user) }}" required>
                @error('username_user')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email_user" class="form-label">Email</label>
                <input type="email" class="form-control @error('email_user') is-invalid @enderror"
                       id="email_user" name="email_user" value="{{ old('email_user', $user->email_user) }}" required>
                @error('email_user')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="role_user" class="form-label">Role</label>
                <select class="form-select @error('role_user') is-invalid @enderror" id="role_user" name="role_user" required>
                    <option value="">Select Role</option>
                    <option value="admin" {{ old('role_user', $user->role_user) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="staff" {{ old('role_user', $user->role_user) == 'staff' ? 'selected' : '' }}>Staff</option>
                </select>
                @error('role_user')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_user" class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                <input type="password" class="form-control @error('password_user') is-invalid @enderror"
                       id="password_user" name="password_user">
                @error('password_user')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update User</button>
            </div>
        </form>
    </div>
</div>
@endsection
