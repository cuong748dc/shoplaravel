@include('layouts.slide')
@extends('welcome')
@section('content')
    @include('layouts.filter')

    @if (count($products)==0)
        <h3 class="font-weight-bold blue-text">
            No results found with keyword: {{$search}}
            <br>
            Try again with another keyword!!!
        </h3>
    @else
        <h3 class="font-weight-bold blue-text">
            Found {{count($products)}} results with keyword: {{$search}}
        </h3>
    @endif
    <!--Section: Products v.3-->
    <section class="text-center mb-4">
        <!--Grid row-->
        <div class="row wow fadeIn">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="images/{{$product->image}}" class="card-img-top"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->
                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="{{route('filter',$product->categories['id'])}}" class="grey-text">
                                <h5>{{$product->categories['name']}}</h5>
                            </a>
                            <h5>
                                <strong>
                                    @if($product->status ==1)
                                        <a class="badge badge-pill danger-color" href="{{route('newProducts')}}">NEW</a>
                                    @endif
                                    @if($product->bestseller==1)
                                        <a class="badge badge-pill warning-color" href="{{route('bestseller')}}">BESTSELLER</a>
                                    @endif
                                </strong>
                            </h5>
                            <h5>
                                <strong>
                                    <a href="{{route('detailProduct',$product->id)}}" class="dark-grey-text">{{$product->name}}
                                    </a>
                                </strong>
                            </h5>
                            @if($product->promotion_price==0)
                                <h4 class="font-weight-bold blue-text">
                                    <strong>Price: ${{$product->price}}</strong>
                                </h4>
                            @else
                                <h4 class="font-weight-bold blue-text" style="text-decoration: line-through">
                                    <strong>Price: ${{$product->price}}</strong>
                                </h4>
                                <h4 class="font-weight-bold blue-text">
                                    <strong>Promotion price: ${{$product->promotion_price}}</strong>
                                </h4>
                            @endif
                        </div>
                        <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
            @endforeach
        </div>
        <!--Grid row-->
    </section>
    <!--Section: Products v.3-->
    <!--Pagination-->
    {!! $products->links() !!}
    <!--Pagination-->
@endsection
