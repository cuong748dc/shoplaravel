<nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('filter',$category->id)}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
        <!-- Links -->

        <form class="form-inline" action="{{route('search')}}" method="GET">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                       aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->
</nav>
