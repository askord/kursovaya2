<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/blog/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/blog/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">Brevno</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a  href="{{url('form')}}">{{ __('Contact us') }}</a>
                </li>
                <li class="nav-item">
                    <a  href="{{url('find')}}">{{ __('Find us') }}</a>
                </li>
                <li class="nav-item">
                    @else
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a  href="{{url('form')}}">{{ __('Contact us') }}</a>
                </li>
                <li class="nav-item">
                    <a  href="{{url('find')}}">{{ __('Find us') }}</a>
                </li>
                @endauth

                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/blog/vendor/jquery/jquery.min.js"></script>
<script src="/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/blog/js/clean-blog.min.js"></script>

</body>

</html>
