<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
<div class="bg-page py-5">
    <div class="container">
        <!-- main-heading -->
        <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
        <!--// main-heading -->
        <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
            <form method="POST" action="{{ route('login.user') }}">@csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="form-check col-md-6 text-sm-left text-center">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="forgot col-md-6 text-sm-right text-center">
                        <a href="forgot.html">forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
            </form>
            <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                <a href="register.html">Create an account</a>
            </p>
            <h1 class="paragraph-agileits-w3layouts mt-2">
                <a href="index.html">Back to Home</a>
            </h1>
        </div>

        <!-- Copyright -->
        <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
            {{--<p>© 2018 Modernize . All Rights Reserved | Design by--}}
            {{--<a href="http://w3layouts.com/"> W3layouts </a>--}}
            </p>
        </div>
        <!--// Copyright -->
    </div>
</div>


<!-- Required common Js -->
<script src='js/jquery-2.2.3.min.js'></script>
<!-- //Required common Js -->

<!-- Js for bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //Js for bootstrap working -->

</body>

</html>
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Login') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('login') }}">--}}
{{--@csrf--}}

{{--<div class="form-group row">--}}
{{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--@error('email')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--@error('password')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<div class="form-check">--}}
{{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--<label class="form-check-label" for="remember">--}}
{{--{{ __('Remember Me') }}--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-8 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Login') }}--}}
{{--</button>--}}

{{--@if (Route::has('password.request'))--}}
{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--{{ __('Forgot Your Password?') }}--}}
{{--</a>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
