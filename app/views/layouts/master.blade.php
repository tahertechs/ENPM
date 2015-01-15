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

        /*Account Modal Styles*/
        .nav-tabs {
            margin-bottom: 15px;
        }
        .sign-with {
            margin-top: 25px;
            padding: 20px;
        }
        div#OR {
            height: 30px;
            width: 30px;
            border: 1px solid #C2C2C2;
            border-radius: 50%;
            font-weight: bold;
            line-height: 28px;
            text-align: center;
            font-size: 12px;
            float: right;
            position: absolute;
            right: -16px;
            top: 40%;
            z-index: 1;
            background: #DFDFDF;
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
                        <li><a href="#" data-toggle="modal" data-target="#myModal" >QuickLogin</a></li>
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

    @include('partials.modal')

    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>