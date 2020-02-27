@extends('welcome')
@section('content')
    <main class="mt-5 pt-4">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <!--Card content-->
                <form class="card-body" action="{{route('change',Auth::user()->id)}}" method="POST">
                    @method('POST')
                    <div hidden class="md-form input-group pl-0 mb-5">
                        <input type="text" class="form-control py-0"
                               aria-describedby="basic-addon1" value="{{Auth::user()->id}}">
                    </div>
                    <div class="md-form input-group pl-0 mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control py-0" placeholder="Name"
                               aria-describedby="basic-addon1" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <!--email-->
                    <div class="md-form mb-5">
                        <input disabled type="text" id="email" class="form-control"
                               value="{{Auth::user()->email}}" name="email"
                               placeholder="youremail@example.com">
                        <label for="email" class="">Email</label>
                    </div>
                    <!--address-->
                    <div class="md-form mb-5">
                        <input type="text" id="address" class="form-control"
                               value="{{Auth::user()->address}}" name="address"
                               placeholder="Address">
                        <label for="address" class="">Address</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" id="address" class="form-control"
                               value="{{Auth::user()->phone}}" name="phone"
                               placeholder="Phone">
                        <label for="address" class="">Phone</label>
                    </div>
                    @csrf
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Save
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
