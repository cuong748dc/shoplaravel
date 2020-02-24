@extends('welcome')
@section('content')
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">
            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <img src="/images/{{$products->image}}"
                         class="img-fluid" alt="" >
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Content-->
                    <div class="p-4">

                        <div class="mb-3">
                            <a href="{{route('filter',$products->categories['id'])}}">
                                <span class="badge purple mr-1">{{$products->categories['name']}}</span>
                            </a>
                            @if($products->status ==1)
                                <a class="badge badge-pill danger-color" href="{{route('newProducts')}}">NEW</a>
                            @endif
                            @if($products->bestseller==1)
                                <a class="badge badge-pill warning-color"
                                   href="{{route('bestseller')}}">BESTSELLER</a>
                            @endif
                        </div>

                        @if($products->promotion_price==0)
                            <h4 class="font-weight-bold blue-text">
                                <strong>${{number_format($products->price)}}</strong>
                            </h4>
                        @else
                            <h4 class="font-weight-bold blue-text" >
                                <del>${{number_format($products->price)}}</del>
                                <strong>${{number_format($products->promotion_price)}}</strong>
                            </h4>
                        @endif

                        <p class="lead font-weight-bold">Description</p>

                        <p>{{$products->description}}.</p>

                        <form class="d-flex justify-content-left" action="{{route('addToCart', $products->id)}}"method="get">
                            <!-- Default input -->
                            <input type="number" min="1" max="{{$products->quantity}}" name="qty"  value="1" aria-label="Search" class="form-control"
                                   style="width: 100px">
                            <button type="submit" class="btn btn-primary btn-md my-0 p" >Add to cart
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>
                        </form>
                    </div>
                    <!--Content-->
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </main>
@endsection
