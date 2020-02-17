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
                <form action="{{route('categories.update',$categories->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit</strong> {{$categories->name}}
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Category Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name"
                                               placeholder="Category Name"
                                               class="form-control" value="{{$categories->name}}">
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
