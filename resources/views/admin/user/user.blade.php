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
                        <h2 class="title-1">all user</h2>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>admin</th>
                                    <th>address</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($users as $user)
                                    <tbody>
                                    <tr class="tr-shadow">
                                        <td class="desc">{{$user->name}}</td>
                                        <td>
                                            <span class="block-email">{{$user->email}}</span>
                                        </td>
                                        <td>@if($user->admin==1)
                                                ADMIN
                                            @else
                                                Customer
                                            @endif</td>
                                        <td>{{$user->address}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="{{ route('users.edit',$user->id) }}"
                                                   data-placement="top"
                                                   title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="{{route('users.destroy', $user->id)}}"
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
                                {!! $users->links() !!}
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
