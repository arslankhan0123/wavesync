@extends('layouts.admin.main')
@section('title', 'Profile')

@section('breadcrumbTitle', 'Admin Profile')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('admin.profile.index')}}">Profile</a></li>
<li class="breadcrumb-item active">View</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Admin Profile</h5>
    </div>
    <div class="card-body">
        {{-- Success message --}}
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Validation errors --}}
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>There were some problems with your input:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" >
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" id="password" class="form-control" value="{{ old('password', $user->real_password) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
</div>
@endsection