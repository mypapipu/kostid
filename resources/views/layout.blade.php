<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $_TITLE_ }}</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css' />

        <!-- CSS-->
        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" type="text/css" />
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" type="text/css" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="{{ asset('/img/favicon.ico') }}" rel="Shortcut Icon" type="image/ico" />

        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

    </head>
    <body>

        @section('slider')
            <!-- showing slide -->
        @show

        <!--header-->     
        <div class="row navbar head linedown">
            <div class="col-md-3 padleft">085 755717995</div>
            <div class="col-md-6"></div>
            <div class="col-md-3">Sign In<span class="marginright"></span>Wishlist<span class="marginright"></span>Purchase This Template</div>
        </div>

        <!--navigation brand-->
        <nav class="navbar navbar-default navbar-fixed-top navdef">
            <div class="concon">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/logo.png') }} "/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-brand menu">
                        <li class="dropdown">
                            <a href="{{ url() }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kota <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/malang') }}">Malang</a></li>
                                <li><a href="{{ url('/malang/blimbing') }}">Blimbing</a></li>
                                <li><a href="{{ url('/malang/kedungkandang') }}">Kedungkandang</a></li>
                                <li><a href="{{ url('/malang/klojen') }}">Klojen</a></li>
                                <li><a href="{{ url('/malang/lowokwaru') }}">Lowokwaru</a></li>
                                <li><a href="{{ url('/malang/sukun') }}">Sukun</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

        <script src="{{ asset('/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/js/jquery.stellar.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.js') }} "></script>
        <script src="{{ asset('/js/script.js') }}"></script>

    </body>
</html>