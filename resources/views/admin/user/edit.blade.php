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
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('users.update',$users->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit</strong> {{$users->name}}
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">User Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name"
                                               placeholder="User Name"
                                               class="form-control" value="{{$users->name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">
                                            Authorization</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="admin" class="form-control">

                                            <option @if($users->admin == 1)
                                                    {{'selected'}}
                                                    @endif value='1'> ADMIN
                                            </option>
                                            <option @if($users->admin == 0)
                                                    {{'selected'}}
                                                    @endif value='0'> Customer
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="address"
                                               placeholder="Address"
                                               class="form-control" value="{{$users->address}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Phone</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="phone"
                                               placeholder="Phone"
                                               class="form-control" value="{{$users->phone}}">
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
