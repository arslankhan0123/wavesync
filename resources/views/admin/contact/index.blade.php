@extends('layouts.admin.main')
@section('title', 'Contact Us')

@section('breadcrumbTitle', 'Contact Us Listing')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('contact')}}">Contacts</a></li>
<li class="breadcrumb-item active">Listing</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title shine">Contact Us Table</h4>
                <!-- <a href="#" class="btn btn-sm btn-info">Create <i class="mdi mdi-arrow-right align-middle"></i></a> -->
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
                            <th>Action</th>
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
                            <td>
                                <div class="btn-group" role="group" aria-label="Job Actions">
                                    <!-- <a class="text-decoration-none me-2 text-dark ml-1" fdprocessedid="568bh6" href="{{route('contact.edit',['contact_id' => $data->id])}}" data-bs-toggle="tooltip" title="Edit Magazine">
                                        <button class="editBtn" fdprocessedid="568bh6">
                                            <svg height="1em" viewBox="0 0 512 512">
                                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                            </svg>
                                        </button>
                                    </a> -->
                                    <a href="{{route('contact.delete',['contact_id' => $data->id])}}" class="bin-button ml-1" fdprocessedid="jtrex" data-bs-toggle="tooltip" title="Delete Magazine">
                                        <svg class="bin-top" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line y1="5" x2="39" y2="5" stroke="white" stroke-width="4"></line>
                                            <line x1="12" y1="1.5" x2="26.0357" y2="1.5" stroke="white" stroke-width="3"></line>
                                        </svg>
                                        <svg class="bin-bottom" viewBox="0 0 33 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-inside-1_8_19" fill="white">
                                                <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"></path>
                                            </mask>
                                            <path d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z" fill="white" mask="url(#path-1-inside-1_8_19)"></path>
                                            <path d="M12 6L12 29" stroke="white" stroke-width="4"></path>
                                            <path d="M21 6V29" stroke="white" stroke-width="4"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection