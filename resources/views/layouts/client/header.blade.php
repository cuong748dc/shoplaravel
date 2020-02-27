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
                <li class="nav-item dropdown">
                    @if (Route::has('login'))
                        @auth
                            <div class="nav-link border border-light rounded waves-effect"
                                 data-toggle="dropdown" style="background: white">
                                <i class="fa fa-user mr-2"></i>{{ Auth::user()->name }}
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                @if(Auth::user()->admin ==1)
                                    <a class="dropdown-item" href="{{ route('admin') }}"><i
                                            class="fas fa-lock mr-2"></i>ADMIN</a>
                                @endif
                                <a class="dropdown-item" href="{{route('account',Auth::user()->id)}}"><i
                                        class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="{{route('bills.index')}}"> <i
                                        class="fas fa-money-bill-alt mr-2"></i>Billing</a>
                                <div class="dropdown-divider"></div>
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
                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

