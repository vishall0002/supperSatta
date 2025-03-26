<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>supper satta matka</title>
    <base href="{{asset('admincss')}}/" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback" />
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0" />
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{asset('admincss/main.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('customCss')

    <style>
        /* Sidebar background color to dark black */




        .user-name-with-imgge {
            display: flex;
            align-items: center;
            /* Center items vertically */
            justify-content: center;
            /* Center everything horizontally */
            border-bottom: 2px solid white;
            /* White bottom border */
            padding: 2px 0;
            text-align: center;
        }

        .user-name-with-imgge .image {
            width: 50px;
            /* Adjust image container size */
            height: 50px;
            margin-right: 10px;
        }

        .user-name-with-imgge .image img {
            width: 90%;
            height: 90%;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            /* Optional: White border around the image */
        }

        .user-name-with-imgge .info {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Center text horizontally */
        }

        .user-name-with-imgge .info p {
            font-weight: 300;
            letter-spacing: 1px;
            color: white;
            margin: 0;
            font-size: 14px;
            /* Adjust text size */
        }

        .main-sidebar {
            background-color: #000 !important;
        }

        /* Sidebar links: White text, thin font, and letter spacing */
        .nav-sidebar .nav-link {
            color: white !important;
            font-weight: 300 !important;
            /* Thin font */
            letter-spacing: 1px !important;
            /* Space between letters */
            transition: all 0.3s ease-in-out;
        }



        /* Ensure active link styling remains distinct */
        .nav-sidebar .nav-link.active {
            background-color: white !important;
            color: black !important;
            font-weight: 500 !important;
            /* Slightly bold */
            border-radius: 5px;
            /* Optional: Rounded corners */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed" ng-app="app">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="#" role="button"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            {{-- <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="supper-satta-matka" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8;" />
                <span class="brand-text" style="font-weight: 300; letter-spacing: 1px;">Dashboard</span>

            </a> --}}
            <div class="user-name-with-imgge">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    @if(Session::has('admin_user'))
                        <p>Welcome, {{ Session::get('admin_user')->name }}</p>
                    @endif
                </div>
            </div>

            <div class="sidebar">



                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}"
                                class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                <i class="fas fa-chart-line"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.games.index') }}"
                                class="nav-link {{ request()->routeIs('admin.games.index') ? 'active' : '' }}">
                                <i class="fas fa-gamepad"></i>
                                <p>Games</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('admin.games.create') }}"
                                class="nav-link {{ request()->routeIs('admin.games.create') ? 'active' : '' }}">
                                <i class="fas fa-gamepad"></i>
                                <p>Add Game</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.contacts.index') }}"
                                class="nav-link {{ request()->routeIs('admin.contacts.index') ? 'active' : '' }}">
                                <i class="fas fa-envelope"></i>
                                <p>Contact</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.contacts.create') }}"
                                class="nav-link {{ request()->routeIs('admin.contacts.create') ? 'active' : '' }}">
                                <i class="fas fa-gamepad"></i>
                                <p>Add Contact Listing</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <script>
            var app = angular.module('app', []);
         
            app.config(function($interpolateProvider) {
                $interpolateProvider.startSymbol('[[');
                $interpolateProvider.endSymbol(']]');
            });

         </script>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2025-2026 <a href="#">Super Satta Matka</a>.</strong>
            All rights reserved.
            {{-- <div class="float-right d-none d-sm-inline-block"><b>Version</b> 3.1.0</div> --}}
        </footer>

        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="plugins/sparklines/sparkline.js"></script>

    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="plugins/summernote/summernote-bs4.min.js"></script>

    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="dist/js/adminlte2167.js?v=3.2.0"></script>

    <script src="dist/js/demo.js"></script>

    <script src="dist/js/pages/dashboard.js"></script>
  
    <script src="{{asset('js/custom.js')}}"></script>
   
    @yield('customJs')

    
</body>

</html>