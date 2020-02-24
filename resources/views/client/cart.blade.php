@extends('welcome')
@section('content')
    <main class="mt-5 pt-4">
        <div class="container">
            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Checkout</h2>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!--Card content-->
                        <form class="card-body" action="{{route('checkout')}}" method="POST">
                            <!--Username-->
                            <div  hidden class="md-form input-group pl-0 mb-5">
                                <input type="text" class="form-control py-0"
                                       aria-describedby="basic-addon1" name="user_id" value="{{Auth::user()->id}}">
                            </div>
                            <div class="md-form input-group pl-0 mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control py-0" placeholder="Name"
                                       aria-describedby="basic-addon1" value="{{Auth::user()->name}}">
                            </div>
                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="text" id="email" class="form-control"
                                       value="{{Auth::user()->email}}"
                                       placeholder="youremail@example.com">
                                <label for="email" class="">Email</label>
                            </div>
                            <!--address-->
                            <div class="md-form mb-5">
                                <input type="text" id="address" class="form-control"
                                       value="{{Auth::user()->address}}"
                                       placeholder="Address">
                                <label for="address" class="">Address</label>
                            </div>
                            @csrf
                            <button @if(Session('cart')->totalPrice==0)
                                    disabled
                                    @endif
                                    class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout
                            </button>
                        </form>
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">
                            @if(Session::has('cart'))
                                {{Session('cart')->totalQty}}
                            @else 0
                            @endif</span>
                    </h4>
                    <!-- Cart -->
                    @if(Session::has('cart'))
                        <ul class="list-group mb-3 z-depth-1">
                            @foreach($products as $product)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{$product['items']['name']}}</h6>
                                        <small class="text-muted">@if($product['items']['promotion_price']==0)
                                                ${{number_format($product['items']['price'])}}
                                            @else
                                                ${{number_format($product['items']['promotion_price'])}}
                                            @endif</small>
                                    </div>
                                    <input disabled type="number" value="{{ $product['qty'] }}" aria-label="Search"
                                           class="form-control" min="1" max="1000"
                                           style="width: 80px">
                                    {{--                                        <a href="{{route('updateItems',$product['items']['id'])}}"><i--}}
                                    {{--                                                class="fa fa-refresh"></i> </a>--}}
                                    <a href="{{route('deleteItems',$product['items']['id'])}}"><i
                                            class="fa fa-trash"></i> </a>

                                </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong>${{number_format(Session('cart')->totalPrice)}}</strong>
                            </li>
                        </ul>
                    @endif
                </div>
                <!-- Cart -->
                <!-- Promo code -->
            {{--                    <form class="card p-2">--}}
            {{--                        <div class="input-group">--}}
            {{--                            <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
            {{--                            <div class="input-group-append">--}}
            {{--                                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </form>--}}
            <!-- Promo code -->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </main>
@endsection
