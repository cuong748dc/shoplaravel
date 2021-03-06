<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header"></form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <i class="zmdi zmdi-account-o" style=" font-size: 40px;color: #4272D7"></i>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix" style="text-align: center;">
                                    <span class="name">{{ Auth::user()->name }}</span>
                                    <br>
                                    <span class="email">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{route('users.edit',Auth::user()->id)}}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{route('bills.index')}}">
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
