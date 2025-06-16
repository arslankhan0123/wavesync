<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <!-- <img src="{{ asset('landingPage/assets/img/logo/logo5.png') }}" alt="" height="22"> -->
                        <h4>Wavesync</h4>
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="{{ asset('landingPage/assets/img/logo/logo5.png') }}" alt="" height="22"> -->
                        <h4>Wavesync</h4>
                    </span>
                </a>

                <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <!-- <img src="{{ asset('landingPage/assets/img/logo/logo5.png') }}" alt="" height="22"> -->
                        <h4>Wavesync</h4>
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="{{ asset('landingPage/assets/img/logo/logo5.png') }}" alt="" height="22"> -->
                        <h4>Wavesync</h4>
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-sm" data-feather="search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded bg-light border-0"
                                    placeholder="Search...">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <!-- <img class="rounded-circle header-profile-user" src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}"
                        alt="Header Avatar"> -->
                        <i class="fas fa-user-circle fa-2x text-primary me-2"></i>
                    <span class="ms-2 d-none d-sm-block user-item-desc">
                        <span class="user-name">{{Auth::user()->name}}</span>
                        <span class="user-sub-title"><b>Role: </b>Admin</span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 bg-primary border-bottom">
                        <h6 class="mb-0 text-white">{{Auth::user()->name}}</h6>
                        <p class="mb-0 font-size-11 text-white-50 fw-semibold">{{Auth::user()->email}}</p>
                    </div>
                    <a class="dropdown-item" href="{{route('admin.profile.index')}}"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Profile</span></a>
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>

                    <a class="dropdown-item" href="javascript:void(0);" onclick="document.getElementById('logout-form').submit();"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i><span class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('dashboard')}}" id="topnav-dashboard"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="monitor"></i>
                                <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                role="button">
                                <i class="icon nav-icon" data-feather="layers"></i>
                                <span data-key="t-components">Users</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <a href="#" class="dropdown-item" data-key="t-widgets">Users</a>
                                <a href="#" class="dropdown-item" data-key="t-widgets">Roles</a>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('contact')}}" id="topnav-dashboard"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="monitor"></i>
                                <span data-key="t-newsData">User Contacts</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('services.index')}}" id="topnav-dashboard"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="monitor"></i>
                                <span data-key="t-newsData">Services</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>