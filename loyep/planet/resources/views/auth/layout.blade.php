<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="login, signin">

    <title>@yield('title', Planet::name())</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    {{--<link href="/planet-assets/css/core.min.css" rel="stylesheet">--}}
    <link href="{{ mix('css/app.css', 'planet-assets') }}" rel="stylesheet">
{{--<link href="/planet-assets/css/style.min.css" rel="stylesheet">--}}

<!-- Favicons -->
    <link rel="apple-touch-icon" href="/planet-assets/img/apple-touch-icon.png">
    <link rel="icon" href="/planet-assets/img/favicon.png">
</head>

<body>
<div class="row min-h-fullscreen center-vh p-20 m-0">
@yield('content')
{{--<div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">--}}
{{--<h5 class="text-uppercase">Sign in</h5>--}}
{{--<br>--}}

{{--<form class="form-type-material">--}}
{{--<div class="form-group">--}}
{{--<input type="text" class="form-control" id="username">--}}
{{--<label for="username">Username</label>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<input type="password" class="form-control" id="password">--}}
{{--<label for="password">Password</label>--}}
{{--</div>--}}

{{--<div class="form-group flexbox">--}}
{{--<div class="custom-control custom-checkbox">--}}
{{--<input type="checkbox" class="custom-control-input" checked>--}}
{{--<label class="custom-control-label">Remember me</label>--}}
{{--</div>--}}

{{--<a class="text-muted hover-primary fs-13" href="#">Forgot password?</a>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>--}}
{{--</div>--}}
{{--</form>--}}

{{--<div class="divider">Or Sign In With</div>--}}
{{--<div class="text-center">--}}
{{--<a class="btn btn-square btn-facebook" href="#"><i class="fa fa-facebook"></i></a>--}}
{{--<a class="btn btn-square btn-google" href="#"><i class="fa fa-google"></i></a>--}}
{{--<a class="btn btn-square btn-twitter" href="#"><i class="fa fa-twitter"></i></a>--}}
{{--</div>--}}

{{--<hr class="w-30px">--}}

{{--<p class="text-center text-muted fs-13 mt-20">Don't have an account? <a class="text-primary fw-500" href="#">Sign--}}
{{--up</a></p>--}}
{{--</div>--}}

<!-- Scripts -->
</div>
<script src="/planet-assets/js/core.min.js"></script>
<script src="/planet-assets/js/app.min.js"></script>
<script src="/planet-assets/js/script.min.js"></script>
</body>
</html>
