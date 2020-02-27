<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a href="{{route('shop')}}"><h2>Shop</h2></a>
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
                    <a class="js-arrow" href="{{route('order.index')}}">Order</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="{{route('users.index')}}">Users</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
