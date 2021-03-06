<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body>
<div class="page-wrapper">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <h2>Register</h2>
                </div>
                <div class="login-form">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                   placeholder="Name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password Confirm</label>

                            <input id="password-confirm" type="password"
                                   class="form-control" name="password_confirmation" required
                                   placeholder="Password-Confirm">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input id="address" type="text"
                                   class="form-control @error('address') is-invalid @enderror"
                                   name="address" value="{{ old('address') }}" required autocomplete="address"
                                   autofocus
                                   placeholder="Address">

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input id="phone" type="text"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                   autofocus
                                   placeholder="Phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="login-checkbox">
                            <label>
                                <a href="#">Forgotten Password?</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Don't you have account?
                            <a href="#">Sign Up Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
{{--<!-- Vendor JS       -->--}}
{{--<script src="/vendor/slick/slick.min.js">--}}
{{--</script>--}}
{{--<script src="/vendor/wow/wow.min.js"></script>--}}
{{--<script src="/vendor/animsition/animsition.min.js"></script>--}}
{{--<script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">--}}
{{--// </script>--}}
{{--<script src="/vendor/counter-up/jquery.waypoints.min.js"></script>--}}
{{--<script src="/vendor/counter-up/jquery.counterup.min.js">--}}
{{--</script>--}}
{{--<script src="/vendor/circle-progress/circle-progress.min.js"></script>--}}
<script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
{{--<script src="/vendor/chartjs/Chart.bundle.min.js"></script>--}}
{{--<script src="/vendor/select2/select2.min.js">--}}
{{--// </script>--}}

<!-- Main JS-->
<script src="/js/main.js"></script>

</body>

</html>
<!-- end document-->


