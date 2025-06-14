@extends('layouts.admin.main')
@section('title', 'Contact Us')

@section('breadcrumbTitle', 'Contact Us Listing')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('contact')}}">Contact Us</a></li>
<li class="breadcrumb-item active">Listing</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title shine">Contact Us Table</h4>
                <a href="#" class="btn btn-sm btn-info">Create <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
            <div class="card-body">
                <!-- Table -->
                <table id="custom-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->message }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection