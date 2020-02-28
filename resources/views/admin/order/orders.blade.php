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
                        <h2 class="title-1">all Order</h2>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Date Order</th>
                                    <th>Total</th>
                                    <th>User Address</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($bills as $bill)

                                    <tbody>
                                    <tr class="tr-shadow">
                                        <td class="desc">{{$bill->users['name']}}</td>
                                        <td class="desc">{{$bill->date_order}}</td>
                                        <td class="desc">${{number_format($bill->total)}}</td>
                                        <td class="desc">{{$bill->user_address}}</td>
                                        <td class="desc">{{$bill->user_phone}}</td>
                                        <td>
                                            <a class="col-4" href="{{route('order.show',$bill->id)}}">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                        <td>
                                            @if($bill->status==0)
                                                <form action="{{route('order.update',$bill->id)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="col-4">
                                                        <i class="fas fa-check" style="color: #4272d7"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    {!! $bills->links() !!}
                    <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
