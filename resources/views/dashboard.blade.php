@extends('layouts.admin.main')
@section('title', 'Dashboard')

@section('breadcrumbTitle', 'Dashboard')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<!-- <li class="breadcrumb-item"><a href="">Home</a></li> -->
<li class="breadcrumb-item active">Home</li>
@endsection

<!-- Font Awesome for Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
    /* Enhanced Card Styling */
    .enhanced-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .enhanced-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
    }

    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: #fff;
        margin-right: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    /* Gradient Backgrounds */
    .gradient-blue {
        background: linear-gradient(45deg, #36D1DC, #5B86E5);
    }

    .gradient-green {
        background: linear-gradient(45deg, #11998e, #38ef7d);
    }

    .gradient-yellow {
        background: linear-gradient(45deg, #f7971e, #ffd200);
    }

    .gradient-red {
        background: linear-gradient(45deg, #f953c6, #b91d73);
    }

    /* Text Styling */
    .text-content h5 {
        font-size: 1rem;
        color: #555;
        text-transform: uppercase;
        margin-bottom: 5px;
        letter-spacing: 1px;
    }

    .text-content h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin: 0;
    }

    .text-content p {
        color: #888;
        font-size: 0.9rem;
        margin-top: 5px;
    }

    .enhanced-card h6,
    .enhanced-card h2 {
        color: white !important;
    }
</style>
@section('content')

<div class="row">
    <div class="col-xl-3 col-sm-6 mb-4">
        <a href="#">
            <div class="enhanced-card gradient-red">
                <div class="icon-circle">
                    <i class="fas fa-cogs"></i> {{-- Services --}}
                </div>
                <div>
                    <h6>Total Services</h6>
                    <h2>{{ count($services) }}</h2>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-sm-6 mb-4">
        <a href="#">
            <div class="enhanced-card gradient-blue">
                <div class="icon-circle">
                    <i class="fas fa-address-book"></i> {{-- Contacts --}}
                </div>
                <div>
                    <h6>Total Contacts</h6>
                    <h2>{{ count($contacts) }}</h2>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning border-0 d-flex align-items-center" role="alert">
                    <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
                    <div class="flex-grow-1 text-truncate">
                        Your free trial expired in <b>21</b> days.
                    </div>
                    <div class="flex-shrink-0">
                        <a href="pricing-basic.html"
                            class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <p class="font-size-18">Upgrade your plan from a <span
                                class="fw-semibold">Free
                                trial</span>, to ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i>
                        </p>
                        <div class="mt-4">
                            <a href="pricing-basic.html" class="btn btn-primary">Upgrade
                                Account!</a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <img src="assets/images/illustrator/2.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div>
        <!-- end card -->

        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold">Report By:</span> <span
                                class="text-muted">Monthly<i
                                    class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Yearly</a>
                            <a class="dropdown-item" href="#">Monthly</a>
                            <a class="dropdown-item" href="#">Weekly</a>
                            <a class="dropdown-item" href="#">Today</a>
                        </div>
                    </div>
                </div>

                <h4 class="card-title mb-4">Earning Reports</h4>

                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <div class="row mb-3">
                            <div class="col-6">
                                <p class="text-muted mb-2">This Month</p>
                                <h5>$12,582<small
                                        class="badge badge-success-subtle font-13 ms-2">+15%</small>
                                </h5>
                            </div>

                            <div class="col-6">
                                <p class="text-muted mb-2">Last Month</p>
                                <h5>$98,741</h5>
                            </div>
                        </div>
                        <p class="text-muted"><span class="text-success me-1"> 25.2%<i
                                    class="mdi mdi-arrow-up"></i></span>From previous period</p>

                        <div class="mt-4">
                            <a href="" class="btn btn-secondary-subtlebtn-sm">Generate Reports <i
                                    class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-sm-5">
                        <div class="mt-4 mt-0">
                            <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col-->

    <div class="col-xl-8">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold">Sort By:</span> <span
                                class="text-muted">Yearly<i
                                    class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Yearly</a>
                            <a class="dropdown-item" href="#">Monthly</a>
                            <a class="dropdown-item" href="#">Weekly</a>
                            <a class="dropdown-item" href="#">Today</a>
                        </div>
                    </div>
                </div>
                <h4 class="card-title mb-4">Sales Analytics</h4>

                <div class="mt-1">
                    <ul class="list-inline main-chart mb-0 text-center">
                        <li class="list-inline-item chart-border-left me-0 border-0">
                            <h3 class="text-primary">$<span
                                    data-plugin="counterup">3.85k</span><span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">Income</span>
                            </h3>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h3><span data-plugin="counterup">258</span><span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">Sales</span>
                            </h3>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h3><span data-plugin="counterup">52</span>k<span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">Users</span>
                            </h3>
                        </li>
                    </ul>
                </div>

                <div class="mt-3">
                    <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-4">Orders</h4>

                    <div>
                        <div class="dropdown d-inline">
                            <a class="dropdown-toggle text-muted me-3 mb-3 align-middle" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class='bx bx-search font-size-16'></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control rounded bg-light border-0"
                                                placeholder="Search...">
                                            <i class="bx bx-search font-size-16 search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline">
                            <a class="dropdown-toggle text-reset mb-3" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="fw-semibold">Report By:</span> <span
                                    class="text-muted">Monthly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                                <a class="dropdown-item" href="#">Today</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="rounded-start" style="width: 15px;">
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        </label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Customer</th>
                                <th>Purchased</th>
                                <th colspan="2" class="rounded-end">Revenue</th>
                            </tr>
                            <!-- end tr -->
                        </thead>
                        <!-- end thead -->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckexampleone">
                                        <label class="form-check-label" for="flexCheckexampleone">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1018
                                </td>
                                <td>
                                    1 Jun, 11:21
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Alex Fox</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Wireframing Kit for Figma
                                </td>

                                <td>
                                    $129.99
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckexamplethree">
                                        <label class="form-check-label" for="flexCheckexamplethree">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1017
                                </td>
                                <td>
                                    29 May, 18:36
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Joya Calvert</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Mastering the Grid <span class="text-muted">+2 more</span>
                                </td>

                                <td>
                                    $228.88
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckexamplefour">
                                        <label class="form-check-label" for="flexCheckexamplefour">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1016
                                </td>
                                <td>
                                    25 May , 08:09
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-arrow-left-thin-circle-outline text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Refunded</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Gracyn Make</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Wireframing Kit for Figma
                                </td>

                                <td>
                                    $9.99
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckexamplefive">
                                        <label class="form-check-label" for="flexCheckexamplefive">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1015
                                </td>
                                <td>
                                    19 May , 14:09
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Monroe Mock</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Spiashify 2.0
                                </td>

                                <td>
                                    $44.00
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckexamplesix">
                                        <label class="form-check-label" for="flexCheckexamplesix">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1014
                                </td>
                                <td>
                                    10 May , 10:00
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Lauren Bond</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Mastering the Grid
                                </td>

                                <td>
                                    $75.87
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckexamplenine">
                                        <label class="form-check-label" for="flexCheckexamplenine">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1011
                                </td>
                                <td>
                                    29 Apr , 12:46
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-close-circle-outline text-danger"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Changeback</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Ricardo Schaefer</a> </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Spiashify 2.0
                                </td>

                                <td>
                                    $63.99
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                            value="" id="flexCheckDefaultexample">
                                        <label class="form-check-label"
                                            for="flexCheckDefaultexample">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1010
                                </td>
                                <td>
                                    27 Apr , 10:53
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                                                class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                    class="text-reset">Arvi Hasan</a> </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Wireframing Kit for Figma
                                </td>

                                <td>
                                    $51.00
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->

                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-4">Sales by County</h4>
                    <div class="dropdown">
                        <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold">Report By:</span> <span
                                class="text-muted">Monthly<i
                                    class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Yearly</a>
                            <a class="dropdown-item" href="#">Monthly</a>
                            <a class="dropdown-item" href="#">Weekly</a>
                            <a class="dropdown-item" href="#">Today</a>
                        </div>
                    </div>
                </div>

                <div id="world-map-markers" style="height: 242px;"></div>

                <div class="pt-3 px-2 pb-2">
                    <p class="mb-1 fw-medium">USA <span class="float-end">75%</span></p>
                    <div class="progress animated-progess custom-progress mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                        </div>
                    </div>

                    <p class="mt-4 mb-1 fw-medium">Russia <span class="float-end">55%</span></p>
                    <div class="progress animated-progess custom-progress mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 55%"
                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                        </div>
                    </div>

                    <p class="mt-4 mb-1 fw-medium">Australia <span class="float-end">85%</span></p>
                    <div class="progress animated-progess custom-progress mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 85%"
                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection