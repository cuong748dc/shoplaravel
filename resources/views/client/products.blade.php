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
                            <a href="{{route('detailProduct',$product->id)}}">
                                @if($product->status ==1)
                                    <span class="badge badge-pill badge-danger"
                                          style="position: absolute;z-index: 1000;right: 0;">NEW</span>
                                @endif
                                <img src="images/{{$product->image}}" class="card-img-top"
                                     alt="">
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
                                <div class="name-products">
                                    <a href="{{route('detailProduct',$product->id)}}"
                                       class="dark-grey-text">{{$product->name}}
                                    </a>
                                </div>
                            </h5>
                            @if($product->promotion_price==0)
                                <h4 class="font-weight-bold blue-text">
                                    <strong>${{number_format($product->price)}}</strong>
                                </h4>
                            @else
                                <h4 class="font-weight-bold blue-text">
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
        {!! $products->links() !!}


        <h2>New Products</h2>
        <div class="row wow fadeIn">
            @foreach($newProducts as $product)
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <a href="{{route('detailProduct',$product->id)}}">
                                @if($product->status ==1)
                                    <span class="badge badge-pill badge-danger"
                                          style="position: absolute;z-index: 1000;right: 0;">NEW</span>
                                @endif
                                <img src="images/{{$product->image}}" class="card-img-top"
                                     alt="">
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
                                <div class="name-products">
                                    <a href="{{route('detailProduct',$product->id)}}"
                                       class="dark-grey-text">{{$product->name}}
                                    </a>
                                </div>
                            </h5>
                            @if($product->promotion_price==0)
                                <h4 class="font-weight-bold blue-text">
                                    <strong>${{number_format($product->price)}}</strong>
                                </h4>
                            @else
                                <h4 class="font-weight-bold blue-text">
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
        {!! $newProducts->links() !!}


        <h2>Best Seller</h2>
        <div class="row wow fadeIn">
            @foreach($bestseller as $product)
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <a href="{{route('detailProduct',$product->id)}}">
                                @if($product->status ==1)
                                    <span class="badge badge-pill badge-danger"
                                          style="position: absolute;z-index: 1000;right: 0;">NEW</span>
                                @endif
                                <img src="images/{{$product->image}}" class="card-img-top"
                                     alt="">
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
                                <div class="name-products">
                                    <a href="{{route('detailProduct',$product->id)}}"
                                       class="dark-grey-text">{{$product->name}}
                                    </a>
                                </div>
                            </h5>
                            @if($product->promotion_price==0)
                                <h4 class="font-weight-bold blue-text">
                                    <strong>${{number_format($product->price)}}</strong>
                                </h4>
                            @else
                                <h4 class="font-weight-bold blue-text">
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
    {!! $bestseller->links() !!}
    <!--Grid row-->
    </section>
    <!--Section: Products v.3-->
    <!--Pagination-->

    <!--Pagination-->
@endsection
