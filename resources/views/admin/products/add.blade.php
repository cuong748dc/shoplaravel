@extends('layouts.app')
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
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <strong>ADD</strong> Product
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">New Product Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name" placeholder="New Product Name"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Category</label>
                                    </div>

                                    <div class="col-12 col-md-9">
                                        <select name="categories_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value='{{ $category->id }}'>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="price" type="text" class="form-control" name="price"
                                               placeholder="Price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Promotion Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="promotion_price" type="text" class="form-control" name="promotion_price"
                                               placeholder="Promotion Price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Quantity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="quantity" type="text" class="form-control" name="quantity"
                                               placeholder="Quantity">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="description" type="text" class="form-control" name="description"
                                               placeholder="Description">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Product Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="image" type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="zmdi zmdi-check"></i> Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
