@extends('layouts.admin.main')
@section('title', 'Services')

@section('breadcrumbTitle', 'Create Service')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('services.index')}}">Services</a></li>
<li class="breadcrumb-item active">Listing</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Create Service</h5>
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
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.services.form')
            <button type="submit" class="btn btn-success">Create</button>
        </form>

    </div>
</div>
@endsection