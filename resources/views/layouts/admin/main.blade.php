<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="auth-user-id" content="{{ auth()->id() }}">
    <title>@yield('title', 'Wavesync')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('adminDashboard/assets/images/favicon.ico') }}">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- plugin css -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- <link href="{{ asset('adminDashboard') }}/assets/css/jsvectormap.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Bootstrap Css -->
    <link href="{{ asset('adminDashboard/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
    <!-- <link href="{{ asset('https://preview.pichforest.com/dashonic/layouts/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" /> -->


    <!-- Icons Css -->
    <link href="{{ asset('adminDashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('https://preview.pichforest.com/dashonic/layouts/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> -->

    <!-- App Css-->
    <link href="{{ asset('adminDashboard/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('https://preview.pichforest.com/dashonic/layouts/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" /> -->

    <!-- Toaster Link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- Header dropdown css  -->
    <!-- <style>
        .dropdown-menu {
            width: 100%;
            margin: 0;
            overflow-y: auto;
            height: 250px;
            scrollbar-width: thin;
            scrollbar-color: #dcdcdc #f1f1f1;
        }

        .dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }

        .dropdown-menu::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .dropdown-menu::-webkit-scrollbar-thumb {
            background-color: #dcdcdc;
            border-radius: 10px;
        }

        .dropdown-menu::-webkit-scrollbar-thumb:hover {
            background-color: #b0b0b0;
        }
    </style> -->


    <!-- Action Buttons -->
    <style>
        /* View Button */
        .view_btn {
            --fs: 1.25em;
            --col1: honeydew;
            --col3: #17a2b8;
            --col4: honeydew;
            /* --pd: .5em .65em; */
            width: 1.875rem;
            height: 1.875rem;
            display: grid;
            align-content: baseline;
            appearance: none;
            border: 0;
            grid-template-columns: min-content 1fr;
            padding: var(--pd);
            font-size: var(--fs);
            color: var(--col1);
            background-color: var(--col3);
            border-radius: 6px;
            position: relative;
            transition: all 0.75s ease-out;
            transform-origin: center;
        }

        .view_btn:hover {
            color: var(--col4);
        }

        .view_btn:active {
            animation: offset 1s ease-in-out infinite;
            outline-offset: 0;
        }

        .view_btn::after,
        .view_btn::before {
            content: "";
            align-self: center;
            justify-self: center;
            height: 0.5em;
            margin: 0 0.5em;
            grid-column: 1;
            grid-row: 1;
            opacity: 1;
        }

        .view_btn::after {
            position: relative;
            border: 2px solid var(--col4);
            border-radius: 50%;
            transition: all 0.5s ease-out;
            height: 0.1em;
            width: 0.1em;
            top: 0.438rem;
            left: -0.188rem;
        }

        .view_btn:hover::after {
            border: 2px solid var(--col3);
            transform: rotate(-120deg) translate(10%, 164%);
        }

        .view_btn::before {
            border-radius: 50% 0%;
            border: 4px solid var(--col4);
            transition: all 1s ease-out;
            transform: rotate(45deg);
            height: 1rem;
            width: 1rem;
            position: relative;
            top: 0.438rem;
            left: -0.188rem;
        }

        .view_btn:hover::before {
            border-radius: 50%;
            border: 4px solid var(--col1);
            transform: scale(1.25) rotate(0deg);
            animation: blink 1.5s ease-out 1s infinite alternate;
        }

        @keyframes blink {
            0% {
                transform: scale(1, 1) skewX(0deg);
                opacity: 1;
            }

            5% {
                transform: scale(1.5, 0.1) skewX(10deg);
                opacity: 0.5;
            }

            10%,
            35% {
                transform: scale(1, 1) skewX(0deg);
                opacity: 1;
            }

            40% {
                transform: scale(1.5, 0.1) skewX(10deg);
                opacity: 0.25;
            }

            45%,
            100% {
                transform: scale(1, 1) skewX(0deg);
                opacity: 1;
            }
        }

        @keyframes offset {
            50% {
                outline-offset: 0.15em;
                outline-color: var(--col1);
            }

            55% {
                outline-offset: 0.1em;
                transform: translateY(1px);
            }

            80%,
            100% {
                outline-offset: 0;
            }
        }


        /* Edit Button */
        .editBtn {
            width: 1.875rem;
            height: 1.875rem;
            border-radius: 7px;
            border: none;
            background-color: rgb(93, 93, 116);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.123);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }

        .editBtn::before {
            content: "";
            width: 200%;
            height: 200%;
            background-color: rgb(102, 102, 141);
            position: absolute;
            z-index: 1;
            transform: scale(0);
            transition: all 0.3s;
            border-radius: 50%;
            filter: blur(10px);
        }

        .editBtn:hover::before {
            transform: scale(1);
        }

        .editBtn:hover {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.336);
        }

        .editBtn svg {
            height: 0.813rem;
            fill: white;
            z-index: 3;
            transition: all 0.2s;
            transform-origin: bottom;
        }

        .editBtn:hover svg {
            transform: rotate(-15deg) translateX(5px);
        }

        .editBtn::after {
            content: "";
            width: 1.563rem;
            height: 0.094rem;
            position: absolute;
            bottom: 9px;
            left: -11px !important;
            background-color: white;
            border-radius: 2px;
            z-index: 2;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease-out;
        }

        .editBtn:hover::after {
            transform: scaleX(1);
            left: 0px;
            transform-origin: right;
        }

        /* Delete Button */
        .bin-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 1.875rem;
            height: 1.875rem;
            border-radius: 7px;
            background-color: rgb(255, 95, 95);
            cursor: pointer;
            border: none;
            transition-duration: 0.3s;
        }

        .bin-bottom {
            width: 0.625rem;
        }

        .bin-top {
            width: 0.875rem;
            transform-origin: right;
            transition-duration: 0.3s;
        }

        .bin-button:hover .bin-top {
            transform: rotate(45deg);
        }

        .bin-button:hover {
            background-color: rgb(255, 0, 0);
        }

        .bin-button:active {
            transform: scale(0.9);
        }


        /* AddButton */

        .plusButton {
            /* Config start */

            --plus_sideLength: 1.875rem;
            --plus_topRightTriangleSideLength: 0.9rem;
            /* Config end */
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid white;
            width: var(--plus_sideLength);
            height: var(--plus_sideLength);
            background-color: #084298;
            overflow: hidden;
            border-radius: 6px;
        }

        .plusButton::before {
            position: absolute;
            content: "";
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-width: 0 var(--plus_topRightTriangleSideLength) var(--plus_topRightTriangleSideLength) 0;
            border-style: solid;
            border-color: transparent #6ea8fe transparent transparent;
            transition-timing-function: ease-in-out;
            transition-duration: 0.2s;
        }

        .plusButton:hover {
            cursor: pointer;
        }

        .plusButton:hover::before {
            --plus_topRightTriangleSideLength: calc(var(--plus_sideLength) * 2);
        }

        .plusButton:focus-visible::before {
            --plus_topRightTriangleSideLength: calc(var(--plus_sideLength) * 2);
        }

        .plusButton>.plusIcon,
        .plusButton>.minusIcon {
            fill: white;
            width: calc(var(--plus_sideLength) * 0.7);
            height: calc(var(--plus_sideLength) * 0.7);
            z-index: 1;
            transition-timing-function: ease-in-out;
            transition-duration: 0.2s;
        }

        .plusButton:hover>.plusIcon,
        .plusButton:hover>.minusIcon {
            fill: black;
            transform: rotate(180deg);
        }

        .plusButton:focus-visible>.plusIcon,
        .plusButton:focus-visible>.minusIcon {
            fill: black;
            transform: rotate(180deg);
        }


        /* Shine Heading CSS */
        .shine {
            font-size: 1.5em !important;
            font-weight: 900 !important;
            color: rgba(255, 255, 255, 0.3) !important;
            background: #222 -webkit-gradient(linear,
                    left top,
                    right top,
                    from(#222),
                    to(#222),
                    color-stop(0.5, #fff)) 0 0 no-repeat;
            background-image: -webkit-linear-gradient(-40deg,
                    transparent 0%,
                    transparent 40%,
                    #fff 50%,
                    transparent 60%,
                    transparent 100%);
            -webkit-background-clip: text;
            -webkit-background-size: 50px;
            -webkit-animation: zezzz;
            -webkit-animation-duration: 5s;
            -webkit-animation-iteration-count: infinite;
        }

        /* Shine Heading CSS */
        @-webkit-keyframes zezzz {

            0%,
            10% {
                background-position: -200px;
            }

            20% {
                background-position: top left;
            }

            100% {
                background-position: 200px;
            }
        }



        /* Customizing the tooltip style */
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
            /* If you want dots under the hoverable text */
        }

        /* Tooltip text */
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;

            /* Position the tooltip text - see examples below! */
            position: absolute;
            z-index: 1;
        }

        /* Show the tooltip text when you mouse over the tooltip container */
        .tooltip:hover .tooltiptext {
            visibility: visible;
        }

        /* select2 selected option CSS */
        .select2-selection__choice {
            background-color: #00249c !important;
            color: white !important;
            border: 1px solid #00249c !important;
        }

        .select2-selection {
            background-color: #f8f9fa !important;
            /* height: 38px; */
        }
    </style>

    <!-- DataTables CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-dt/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#custom-table').DataTable({
                // "pagingType": "simple", You can use simple, full, etc.
                "pagingType": "simple_numbers", // Show Previous/Next + Page Numbers
                // "pageLength": 5, // Set the number of records per page
                "lengthChange": false, // Hide the option to change the number of records
                "searching": true, // Enable search functionality
                "ordering": false, // Enable sorting
                "info": false, // Disable table information (e.g. "Showing 1 to 5 of 100 entries")
            });
        });
    </script>

    <!-- Pagination Custom Styles -->
    <style>
        .dataTables_paginate .paginate_button {
            border-radius: 5px;
            margin: 0 5px;
            padding: 8px 12px;
            font-size: 14px;
            color: #6c757d;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            transition: background-color 0.3s, color 0.3s;
        }

        .dataTables_paginate .paginate_button:hover {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .dataTables_paginate .paginate_button:active {
            background-color: #0056b3;
        }

        .dataTables_paginate .paginate_button.current {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border: 1px solid #0056b3;
        }

        .dataTables_paginate .paginate_button.disabled {
            color: #ced4da;
            cursor: not-allowed;
            background-color: #f8f9fa;
        }


        /* Logo Style */
        .custom-logo-style {
            width: 60px;
            height: 60px;
            border: 3px solid #00249c;
            padding: 5px;
            box-sizing: border-box;
        }

        .select2-container--default .select2-selection--single {
            height: 38px !important;
            border: 1px solid #eff0f2 !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 33px !important;
        }
    </style>
</head>

<body data-layout="horizontal">
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.admin.header')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start Breadcrumb -->
                    <!-- Dynamic Breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 shine">
                                    @yield('breadcrumbTitle', '')
                                </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        @yield('breadcrumbs', '<li class="breadcrumb-item active">Dashboard</li>')
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Breadcrumb -->

                    @yield('content')

                </div>
            </div>
            <!-- End Page-content -->


            @include('layouts.admin.footer')
        </div>
        <!-- end main content-->

    </div>
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('adminDashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminDashboard/assets/js/metismenujs.min.js') }}"></script>
    <script src="{{ asset('adminDashboard/assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('adminDashboard/assets/js/feather.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('adminDashboard/assets/js/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('adminDashboard/assets/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('adminDashboard/assets/js/world-merc.js') }}"></script>

    <script src="{{ asset('adminDashboard/assets/js/dashboard-sales.init.js') }}"></script>

    <!-- <script src="https://preview.pichforest.com/dashonic/layouts/assets/js/app.js"></script> -->
    <!-- <script src="{{ asset('adminDashboard/assets/js/app.js') }}"></script> -->

    <!-- Toaster script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Select2 CDN and Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}")
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}")
    </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            tooltipElements.forEach((el) => {
                new bootstrap.Tooltip(el, {
                    animation: true,
                    placement: 'top', // Adjust placement as needed
                });
            });
        });
    </script>
    <script>
        $('#topic-Select').select2({
            placeholder: "Select Topic",
            allowClear: true,
            tags: true
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#topicSelect').select2({
                placeholder: "Open to Select Topic",
                allowClear: true,
            });
        });
    </script>

</body>

</html>