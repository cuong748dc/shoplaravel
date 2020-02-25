@extends('welcome')
@section('content')
    <main class="mt-5 pt-4">
        <div class="container">
            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Bill Detail</h2>
            <!--Grid row-->
            <div class="row">
                <div class="col-md-12 mb-4" style="text-align: center">
                    <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Bills:

                        </span>
                    </h4>
                    <ul class="list-group mb-3 z-depth-1">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="col-4">
                                <h6 class="my-0">Product</h6>
                            </div>
                            <div class="col-4">
                                <h6 class="my-0">Quantity</h6>
                            </div>
                            <div class="col-4">
                                <h6 class="my-0">Price</h6>
                            </div>

                        </li>
                        @foreach($billDetails as $bill)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div class="col-4">
                                    <h6 class="my-0">{{$bill->products['name']}}</h6>
                                </div>
                                <div class="col-4">
                                    <h6 class="my-0">{{$bill->quantity}}</h6>
                                </div>
                                <div class="col-4">
                                    <h6 class="my-0">{{$bill->price}}</h6>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    {!! $billDetails->links() !!}
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </main>
@endsection
