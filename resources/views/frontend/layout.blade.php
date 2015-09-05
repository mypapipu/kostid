<!DOCTYPE html>
<html lang="en" ng-app="kostidApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $_TITLE_ }}</title>
        <base href="/">
        <meta name="keywords" content="{{ $_KEYWORDS_ }}" />
        <meta name="description" content="{{ $_DESCRIPTION_ }}">
        
        <link rel="shortcut icon" href="{{ asset('asset/frontend/img/favicon.ico') }}">

        {!! HTML::style('asset/frontend/css/bootstrap.css') !!}
        {!! HTML::style('asset/frontend/css/style.css') !!}
        {!! HTML::style('asset/frontend/css/animate.css') !!}
        {!! HTML::style('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css') !!}
        {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,600,300') !!}
        @yield('custom_css')

        
    
        {!! HTML::script('asset/plugins/jQuery/jQuery-2.1.4.min.js'); !!}
        {!! HTML::script('asset/frontend/js/bootstrap.js'); !!}
        {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'); !!}
        {!! HTML::script('asset/frontend/js/jquery.stellar.js'); !!}
        {!! HTML::script('asset/frontend/js/scrip.js'); !!}
        {!! HTML::script('asset/frontend/js/jquery.nicescroll.js'); !!}

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!--HEADER-->     
        <div class="row navbar head linedown">
            <div class="col-md-3 padleft">085 755717995</div>
            <div class="col-md-6"></div>
            <div class="col-md-3">Sign In<span class="marginright"></span>Wishlist<span class="marginright"></span>Purchase This Template</div>
        </div>

        <!--Brand Menu-->
        <nav class="navbar navbar-default navbar-fixed-top navdef">
            <div class="concon">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="{{ url() }}">
                        <img src="{{ asset('/asset/frontend/img/logo.png') }}"/>
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

        <ng-view></ng-view>

        <div id="wall_3" class="imagefooter" data-stellar-background-ratio="0.4"  >
            <div class="txtprlxx concon">
                <div class="txtprllx">
                    <div class="center col-md-3 linedown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique risus sit amet lacus sagittis, eget viverra ex.</p>
                    </div>
                    <div class="center col-md-3 linedown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique risus sit amet lacus sagittis, eget viverra ex.</p>
                    </div>
                    <div class="center col-md-3 linedown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique risus sit amet lacus sagittis, eget viverra ex.</p>
                    </div>
                    <div class="center col-md-3 linedown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique risus sit amet lacus sagittis, eget viverra ex.</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var TEMPLATE_PATH = '{!! url("asset/frontend/view/") !!}';
        </script>

        {!! HTML::script('asset/plugins/angular/angular.js'); !!}
        {!! HTML::script('asset/plugins/angular/angular-route.js'); !!}
        {!! HTML::script('asset/plugins/angular/angular-resource.js'); !!}
        {!! HTML::script('asset/plugins/angular/angular-sanitize.js'); !!}
        {!! HTML::script('asset/plugins/angular/angular-animate.js'); !!}
        {!! HTML::script('asset/plugins/angular/angular-flash.js'); !!}
        {!! HTML::script('asset/plugins/angular/ui-bootstrap-tpls-0.13.3.min.js'); !!}

        {!! HTML::script('asset/frontend/js/KostidApp.js'); !!}
        {!! HTML::script('asset/frontend/js/controllers/HomeController.js'); !!}
        {!! HTML::script('asset/frontend/js/controllers/CityController.js'); !!}
        {!! HTML::script('asset/frontend/js/controllers/DetailController.js'); !!}
        {!! HTML::script('asset/frontend/js/controllers/CartController.js'); !!}

        @yield('custom_js')
    </body>
</html>