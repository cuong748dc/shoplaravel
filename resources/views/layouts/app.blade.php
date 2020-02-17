<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Dashboard</title>
    <base href="{{asset('')}}">

    <!-- Fontfaces CSS-->
    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/theme.css" rel="stylesheet" media="all">

</head>

<body>
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a href="#"><h2>ADMIN</h2></a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="{{url('/admin')}}">Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="{{route('products.index')}}">Products</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="{{url('admin/allOrder')}}">All Order</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="{{route('users.index')}}">Users</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#"><h2>Shop</h2></a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a href={{url('/admin')}}>Dashboard</a>
                    </li>
                    <li class="active has-sub">
                        <a href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li class="active has-sub">
                        <a href="{{route('products.index')}}">Products</a>
                    </li>
                    <li class="active has-sub">
                        {{--                        <a href="{{route('allOrder.index')}}">All Order</a>--}}
                    </li>
                    <li class="active has-sub">
                        <a href={{route('users.index')}}>Users</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search"
                                   placeholder="Search"/>
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <i class="zmdi zmdi-account-o" style=" font-size: 40px;color: #4272D7"></i>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <span class="name">{{ Auth::user()->name }}</span>
                                            <br>
                                            <span class="email">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i
                                                    class="fas fa-power-off mr-2"></i>Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
    @yield('content')
    <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
{{--<!-- Vendor JS       -->--}}
{{--<script src="/vendor/slick/slick.min.js">--}}
{{--</script>--}}
{{--<script src="/vendor/wow/wow.min.js"></script>--}}
{{--<script src="/vendor/animsition/animsition.min.js"></script>--}}
{{--<script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">--}}
{{--// </script>--}}
{{--<script src="/vendor/counter-up/jquery.waypoints.min.js"></script>--}}
{{--<script src="/vendor/counter-up/jquery.counterup.min.js">--}}
{{--</script>--}}
{{--<script src="/vendor/circle-progress/circle-progress.min.js"></script>--}}
<script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
{{--<script src="/vendor/chartjs/Chart.bundle.min.js"></script>--}}
{{--<script src="/vendor/select2/select2.min.js">--}}
{{--// </script>--}}

<!-- Main JS-->
<script src="/js/main.js"></script>

</body>

</html>
<!-- end document-->
