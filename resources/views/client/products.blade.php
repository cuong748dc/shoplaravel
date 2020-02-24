@include('layouts.client.slide')
@extends('welcome')
@section('content')
    @include('layouts.client.filter')
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
                                 alt="" >
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
                                    <strong>${{number_format($product->price)}}</strong>
                                </h4>
                            @else
                                <h4 class="font-weight-bold blue-text" >
                                    <del>${{number_format($product->price)}}</del>
                                    <strong>${{number_format($product->promotion_price)}}</strong>
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
