@extends('layouts.admin.app')
@include('layouts.admin.headerDesktop')
@include('layouts.admin.headerMobile')
@include('layouts.admin.sidebar')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('products.update',$products->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit</strong> {{$products->name}}
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Product Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name"
                                               placeholder="Category Name"
                                               class="form-control" value="{{$products->name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="categories_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option
                                                    @if($products->categories_id == $category->id)
                                                    {{'selected'}}
                                                    @endif
                                                    value='{{$category->id }}'>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="price"
                                               placeholder="Price"
                                               class="form-control" value="{{$products->price}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Promotion Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="promotion_price"
                                               placeholder="Promotion Price"
                                               class="form-control" value="{{$products->promotion_price}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Quantity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="quantity"
                                               placeholder="Quantity"
                                               class="form-control" value="{{$products->quantity}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="description"
                                               placeholder="Description"
                                               class="form-control" value="{{$products->description}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="status" class="form-control">
                                            <option @if($products->status == 1)
                                                    {{'selected'}}
                                                    @endif value='1'> New
                                            </option>
                                            <option @if($products->status == 0)
                                                    {{'selected'}}
                                                    @endif value='0'>Old
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Product Image</label>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/{{$products->image}}">
                                        <input id="image" type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="zmdi zmdi-check"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
