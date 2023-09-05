<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard Admin</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap-5.1.3/css/bootstrap.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome6.1.1/css/all.css')}}">
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="{{asset('assets/modules/boxicons/css/boxicons.min.css')}}">
    <!-- Apexcharts  CSS -->
    <link rel="stylesheet" href="{{asset('assets/modules/apexcharts/apexcharts.css')}}">
    @stack('css')
</head>

<body>
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="menu">
            <ul>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{asset('assets/images/avatar/avatar-1.png')}}" alt="">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
                        <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out-alt size-icon-1"></i> <span>Log Out</span></a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @include('admin.sidebar')
    @yield('main')

    <script src="{{asset('assets/js/atrana.js')}}"></script>
    <script src="{{asset('assets/modules/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @stack('js')
</body>

</html>
