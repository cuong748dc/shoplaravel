@extends('layouts.admin.app')
@include('layouts.admin.headerDesktop')
@include('layouts.admin.headerMobile')
@include('layouts.admin.sidebar')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-1">Bill Detail</h2>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($billDetail as $bill)
                                    <tbody>
                                    <tr class="tr-shadow">
                                        <td class="desc">{{$bill->bills_id}}</td>
                                        <td class="desc">{{$bill->products['name']}}</td>
                                        <td class="desc">{{$bill->quantity}}</td>
                                        <td class="desc">${{number_format($bill->price)}}</td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    {!! $billDetail->links() !!}
                    <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
