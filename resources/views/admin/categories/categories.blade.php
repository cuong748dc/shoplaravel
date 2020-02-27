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
                        <h2 class="title-1">all category</h2>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small"
                                   href="{{ route('categories.create')}}">
                                    <i class=" zmdi zmdi-plus"></i>ADD category
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($categories as $category)
                                    <tbody>
                                    <tr class="tr-shadow">
                                        <td class="desc"><a
                                                href="{{route('categories.show',$category->id)}}">{{$category->name}}</a>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="{{ route('categories.edit',$category->id) }}"
                                                   data-placement="top"
                                                   title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="{{ route('categories.destroy', $category->id)}}"
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
                            </table>
                        </div>
                    {!! $categories->links() !!}
                    <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
