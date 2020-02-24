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
                        <h2 class="title-1">all Products</h2>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small"
                                        href="{{route('products.create')}}">
                                    <i class="zmdi zmdi-plus"></i>ADD product
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th>category</th>
                                    <th>price</th>
                                    <th>promotion price</th>
                                    <th>quantity</th>
                                    <th>image</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($products as $product)
                                    <tbody>
                                    <tr class="tr-shadow">
                                        <td class="desc">{{$product->name}}</td>
                                        <td class="desc">{{$product->categories['name']}}</td>
                                        <td class="desc">{{$product->price}}</td>
                                        <td class="desc">{{$product->promotion_price}}</td>
                                        <td class="desc">{{$product->quantity}}</td>
                                        <td style="padding: 0">
                                            <img width="100px" src="images/{{$product->image }}">
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="{{ route('products.edit',$product->id) }}"
                                                   data-placement="top"
                                                   title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="{{route('products.destroy', $product->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="item" data-placement="top"
                                                            title="Delete"><i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    </tbody>
                                @endforeach
                                {!! $products->links() !!}
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
