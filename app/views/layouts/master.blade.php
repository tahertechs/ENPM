<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ENPM - Erciyes Not Paylasim Merkezi</title>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">--}}
    {{--<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>--}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css')}}"/>
    <style>
        body{
            padding-top: 60px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/')}}">ENPM</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">Support</a></li>
                    <li><a href="#contact">FAQ</a></li>
                    @if(!Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">members <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{URL::route('login')}}">Login</a></li>
                                <li class="divider"></li>
                                <li><a href="{{URL::route('register')}}">Register</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{URL::route('logout')}}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @include('partials.notify')

    @yield('content')



    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>