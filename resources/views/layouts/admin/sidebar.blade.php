<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('shop')}}"><h2>Shop</h2></a>
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
