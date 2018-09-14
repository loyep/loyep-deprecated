<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Planet::name() }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css', 'planet-assets') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/planet-assets/img/apple-touch-icon.png">
    <link rel="icon" href="/planet-assets/img/favicon.png">
</head>

<body>
<!-- Preloader -->
{{--<div class="preloader">--}}
{{--<div class="spinner-dots">--}}
{{--<span class="dot1"></span>--}}
{{--<span class="dot2"></span>--}}
{{--<span class="dot3"></span>--}}
{{--</div>--}}
{{--</div>--}}

<!-- Sidebar -->
<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg sidebar-color-dark">
    <header class="sidebar-header">
        <a class="logo-icon" href="{{ route('planet.home') }}">
            <img src="/planet-assets/img/logo-icon-light.png" alt="logo">
        </a>
        <span class="logo">
            <a href="{{ route('planet.home') }}">
                {{ Planet::name() }}
                {{--<img src="/planet-assets/img/logo-light.png" alt="logo">--}}
            </a>
        </span>
        <span class="sidebar-toggle-fold"></span>
    </header>

    <nav class="sidebar-navigation">
        <ul class="menu">

            {{--<li class="menu-category">Dashboard</li>--}}

            <li class="menu-divider"></li>

            <li class="menu-item active">
                <a class="menu-link" href="{{ route('planet.home') }}">
                    <span class="icon fa fa-home"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="menu-divider"></li>

            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-user"></span>
                    <span class="title">Users</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Moderators</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Customers</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon ti-layout"></span>
                    <span class="title">Layout</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Sidebar</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Header</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Footer</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

</aside>
<!-- END Sidebar -->

<!-- Topbar -->
<header class="topbar">
    <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
    </div>

    <div class="topbar-right">
        <div class="topbar-divider"></div>

        <ul class="topbar-btns">
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown">
                    <img class="avatar" src="{{ getAvatar(Auth::user()->email) }}"
                         alt="..."></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="page/profile.html"><i class="ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="page-app/mailbox.html">
                        <div class="flexbox">
                            <i class="ti-email"></i>
                            <span class="flex-grow">Inbox</span>
                            <span class="badge badge-pill badge-info">5</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('planet.lock') }}"><i class="ti-lock"></i> Lock</a>
                    <a class="dropdown-item" href="{{ route('planet.logout') }}"><i class="ti-power-off"></i> Logout</a>
                </div>
            </li>

            <!-- Notifications -->
            <li class="dropdown d-none d-md-block">
                <span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="media-list media-list-hover media-list-divided media-list-xs">
                        <a class="media media-new" href="#">
                            <span class="avatar bg-success"><i class="ti-user"></i></span>
                            <div class="media-body">
                                <p>New user registered</p>
                                <time datetime="2018-07-14 20:00">Just now</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                            <div class="media-body">
                                <p>New order received</p>
                                <time datetime="2018-07-14 20:00">2 min ago</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                            <div class="media-body">
                                <p>Refund request from <b>Ashlyn Culotta</b></p>
                                <time datetime="2018-07-14 20:00">24 min ago</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-primary"><i class="ti-money"></i></span>
                            <div class="media-body">
                                <p>New payment has made through PayPal</p>
                                <time datetime="2018-07-14 20:00">53 min ago</time>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="#">Read all notifications</a>
                        </div>

                        <div class="right">
                            <a href="#" data-provide="tooltip" title="Mark all as read"><i
                                        class="fa fa-circle-o"></i></a>
                            <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- END Notifications -->
        </ul>
    </div>
</header>
<!-- END Topbar -->

<!-- Main container -->
<main class="main-container">
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Card title</h4>
            <div class="card-body">
            </div>
        </div>
    </div><!--/.main-content -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center text-md-left">Copyright
                    © {{ date('Y') }}
                    <a href="https://loyep.com" class="text-primary dim no-underline">Loyep</a>.
                    All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</main>
<!-- END Main container -->

<!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="/planet-assets/data/quickview-global.html">
    <div class="spinner-linear">
        <div class="line"></div>
    </div>
</div>
<!-- END Global quickview -->


<!-- Scripts -->
<script src="/planet-assets/js/core.min.js"></script>
<script src="/planet-assets/js/app.min.js"></script>
<script src="/planet-assets/js/script.min.js"></script>
</body>
</html>
