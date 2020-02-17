@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">overview</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class=" col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{count($users)}}</h2>
                                        <span>Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{count($products)}}</h2>
                                        <span>Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-check"></i>
                                    </div>
                                    <div class="text">
                                        <h2>count order</h2>
                                        <span>Order</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-check-all"></i>
                                    </div>
                                    <div class="text">
                                        <h2>count finish</h2>
                                        <span>order</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
