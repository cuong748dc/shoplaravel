{{--<style>--}}
{{--    .show-dropdown .js-dropdown {--}}
{{--        -webkit-transform: scale(1);--}}
{{--        -moz-transform: scale(1);--}}
{{--        -ms-transform: scale(1);--}}
{{--        -o-transform: scale(1);--}}
{{--        transform: scale(1);--}}
{{--    }--}}

{{--    .account-dropdown {--}}
{{--        min-width: 305px;--}}
{{--        position: absolute;--}}
{{--        top: 58px;--}}
{{--        right: 0;--}}
{{--        background: #fff;--}}
{{--        -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);--}}
{{--        -moz-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);--}}
{{--        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);--}}
{{--        -webkit-transform: scale(0);--}}
{{--        -moz-transform: scale(0);--}}
{{--        -ms-transform: scale(0);--}}
{{--        -o-transform: scale(0);--}}
{{--        transform: scale(0);--}}
{{--        -webkit-transition: all 0.4s ease;--}}
{{--        -o-transition: all 0.4s ease;--}}
{{--        -moz-transition: all 0.4s ease;--}}
{{--        transition: all 0.4s ease;--}}
{{--        -webkit-transform-origin: right top;--}}
{{--        -moz-transform-origin: right top;--}}
{{--        -ms-transform-origin: right top;--}}
{{--        -o-transform-origin: right top;--}}
{{--        transform-origin: right top;--}}
{{--        z-index: 3;--}}
{{--    }--}}

{{--    .account-dropdown .info {--}}
{{--        padding: 25px;--}}
{{--        border-top: 1px solid #f5f5f5;--}}
{{--        border-bottom: 1px solid #f2f2f2;--}}
{{--    }--}}

{{--    .account-dropdown .info .image {--}}
{{--        float: left;--}}
{{--        height: 65px;--}}
{{--        width: 65px;--}}
{{--        overflow: hidden;--}}
{{--        -webkit-border-radius: 3px;--}}
{{--        -moz-border-radius: 3px;--}}
{{--        border-radius: 3px;--}}
{{--    }--}}

{{--    .account-dropdown .info .content {--}}
{{--        margin-left: 65px;--}}
{{--        padding: 11px 0;--}}
{{--        padding-left: 12px;--}}
{{--    }--}}

{{--    .account-dropdown .info .content .name {--}}
{{--        line-height: -webkit-calc(20/16);--}}
{{--        line-height: -moz-calc(20/16);--}}
{{--        line-height: calc(20/16);--}}
{{--    }--}}

{{--    .account-dropdown .info .content .name a {--}}
{{--        color: #333;--}}
{{--        font-weight: 500;--}}
{{--        text-transform: capitalize;--}}
{{--    }--}}

{{--    .account-dropdown .info .content .name a:hover {--}}
{{--        color: #666;--}}
{{--    }--}}

{{--    .account-dropdown .info .content .email {--}}
{{--        font-size: 13px;--}}
{{--        color: #999;--}}
{{--        line-height: -webkit-calc(20/13);--}}
{{--        line-height: -moz-calc(20/13);--}}
{{--        line-height: calc(20/13);--}}
{{--    }--}}

{{--    .account-dropdown:after {--}}
{{--        content: '';--}}
{{--        display: block;--}}
{{--        width: 19px;--}}
{{--        height: 19px;--}}
{{--        border-bottom: 9px solid #fff;--}}
{{--        border-top: 9px solid transparent;--}}
{{--        border-left: 9px solid transparent;--}}
{{--        border-right: 9px solid transparent;--}}
{{--        position: absolute;--}}
{{--        top: -18px;--}}
{{--        right: 33px;--}}
{{--    }--}}

{{--    .account-dropdown__item a {--}}
{{--        display: block;--}}
{{--        color: #333;--}}
{{--        padding: 15px 25px;--}}
{{--        font-size: 14px;--}}
{{--    }--}}

{{--    .account-dropdown__item a:hover {--}}
{{--        background: #4272d7;--}}
{{--        color: #fff;--}}
{{--    }--}}

{{--    .account-dropdown__item a i {--}}
{{--        line-height: 1;--}}
{{--        margin-right: 20px;--}}
{{--        font-size: 18px;--}}
{{--        vertical-align: middle;--}}
{{--    }--}}

{{--    .account-dropdown__body {--}}
{{--        padding: 12px 0;--}}
{{--    }--}}

{{--    .account-dropdown__footer {--}}
{{--        border-top: 1px solid #f2f2f2;--}}
{{--    }--}}

{{--    .account-dropdown__footer a {--}}
{{--        display: block;--}}
{{--        color: #333;--}}
{{--        padding: 15px 25px;--}}
{{--        font-size: 14px;--}}
{{--    }--}}

{{--    .account-dropdown__footer a:hover {--}}
{{--        background: #4272d7;--}}
{{--        color: #fff;--}}
{{--    }--}}

{{--    .account-dropdown__footer a i {--}}
{{--        line-height: 1;--}}
{{--        margin-right: 20px;--}}
{{--        font-size: 18px;--}}
{{--        vertical-align: middle;--}}
{{--    }--}}
{{--</style>--}}

<nav class="navbar fixed-top navbar-expand-lg navbar-light white ">
    <div class="container">
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="navbar-brand waves-effect" href="{{route('shop')}}">
                        <strong class="blue-text">Shop</strong>
                    </a>
                </li>
            </ul>
            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    @if(Session::has('cart'))
                        <a class="nav-link waves-effect" href="{{route('cart')}}">
                        <span class="badge red z-depth-1 mr-1">
                                {{Session('cart')->totalQty}}
                        </span>
                            <i class="fas fa-shopping-cart"></i>
                            <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                        </a>
                    @else
                        <a class="nav-link waves-effect">
                            <span class="badge red z-depth-1 mr-1">0</span>
                            <i class="fas fa-shopping-cart"></i>
                            <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <div class="dropdown">
                                    <div class="nav-link border border-light rounded waves-effect"
                                         data-toggle="dropdown" style="background: white">
                                        <i class="fa fa-user mr-2"></i>{{ Auth::user()->name }}
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="account-dropdown__body">
                                            @if(Auth::user()->admin ==1)
                                                <a class="dropdown-item" href="{{ route('admin') }}"><i
                                                        class="fas fa-lock mr-2"></i>ADMIN</a>
                                            @endif
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-user mr-2"></i>Account</a>
                                            <a class="dropdown-item" href="{{route('bills.index')}}"> <i class="fas fa-money-bill-alt mr-2"></i>Bills</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i
                                                    class="fas fa-power-off mr-2"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                        @else
                                            <a href="{{ route('login') }}"
                                               class="nav-link border border-light rounded waves-effect">
                                                <i class="fa fa-user mr-2"></i>Login
                                            </a>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

