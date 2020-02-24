<nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

    <!-- Navbar brand -->
{{--    <span class="navbar-brand">Categories:</span>--}}

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('shop')}}">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('newProducts')}}">New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('bestseller')}}">Bestseller</a>
            </li>
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('filter',$category->id)}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
        <!-- Links -->

        <form class="form-inline" action="/search" method="GET">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="search"  name="search" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->
</nav>
