@extends('welcome')
@section('content')
    <main class="mt-5 pt-4">
        <div class="container">
            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Bill</h2>
            <!--Grid row-->
            <div class="row">
                <div class="col-md-12 mb-4" style="text-align: center">
                    <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Bills</span>
                    </h4>
                    <ul class="list-group mb-3 z-depth-1">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="col-3">
                                <h6 class="my-0">Date Order</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="my-0">Total</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="my-0">Address</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="my-0">Detail</h6>
                            </div>

                        </li>
                        @foreach($bills as $bill)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div class="col-3">
                                    <h6 class="my-0">{{$bill->date_order}}</h6>
                                </div>
                                <div class="col-3">
                                    <h6 class="my-0">{{$bill->total}}</h6>
                                </div>
                                <div class="col-3">
                                    <h6 class="my-0">{{$bill->user_address}}</h6>
                                </div>
                                <a class="col-3" href="{{route('bills.show',$bill->id)}}">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    {!! $bills->links() !!}
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </main>
@endsection
