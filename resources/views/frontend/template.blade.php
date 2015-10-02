<!DOCTYPE html>
<html lang="en" data-ng-app="kostidApp">
<head>
    <base href="/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title data-ng-bind="$state.current.data.pageTitle + ' | Kost.id'"></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('asset/frontend/img/favicon.ico') }}" type="image/x-icon">
    
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    {!! HTML::style('asset/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('asset/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'); !!}
    {!! HTML::style('asset/plugins/ionicons/css/ionicons.min.css') !!}
    {!! HTML::style('asset/frontend/css/style.css') !!}
    {!! HTML::style('asset/frontend/css/menu.css') !!}
    {!! HTML::style('asset/frontend/css/animate.min.css') !!}

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link id="ng_load_plugins_before"/>
</head>
<body>
    <!--[if lte IE 8]>
        <div id="blockframe">
            <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.
        </div>
    <![endif]-->

    <!-- LOADING -->
    <div ng-spinner-bar id="preloader">
        <div class="spinner">
            <img src="{{ asset('/asset/frontend/img/spinner.gif') }}" width="64" height="64" border="0" />
        </div>
    </div>
    <!--// LOADING -->

    <!-- Header -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <i class="ion-phone"></i><strong>+62 341</strong>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li><a href="login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{ url() }}">
                            <img src="{{ asset('/asset/frontend/img/logo.png') }}" border="0" alt="Kost.id" />
                        </a>
                    </div>
                </div>
                
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <div class="main-menu">
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Kota <i class="ion-ios-arrow-down"></i></a>
                                <ul>
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
                </nav>

            </div>
        </div>
    </header>

    <div ui-view class="fade-in-up"></div> 

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                        </ul>
                        <p>&copy; Kost.id 2015</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        var TEMPLATE_PATH = '{!! url("asset/frontend/views/") !!}';
        var ASSET_PATH = '{!! url("asset/") !!}';
        var API_URL = 'http://echo.web.id/kost/';
    </script>

    {!! HTML::script('asset/plugins/jquery/jquery-1.11.3.min.js'); !!}
    {!! HTML::script('asset/plugins/bootstrap/js/bootstrap.min.js'); !!}
    {!! HTML::script('asset/plugins/bootstrap-daterangepicker/moment.js'); !!}
    {!! HTML::script('asset/plugins/bootstrap-daterangepicker/daterangepicker.js'); !!}
    {!! HTML::script('asset/plugins/wow/wow.min.js'); !!}

    {!! HTML::script('asset/plugins/angular/angular.js'); !!}
    {!! HTML::script('asset/plugins/angular/angular-ui-router.min.js'); !!}
    {!! HTML::script('asset/plugins/angular/angular-cookies.min.js'); !!}
    {!! HTML::script('asset/plugins/angular/angular-daterangepicker.min.js'); !!}
    {!! HTML::script('asset/plugins/oclazyload/ocLazyLoad.min.js'); !!}
    {!! HTML::script('asset/plugins/angular/ui-bootstrap-tpls-0.13.3.min.js'); !!}

    {!! HTML::script('asset/frontend/js/app.js'); !!}
    {!! HTML::script('asset/frontend/js/directive.js'); !!}

    {!! HTML::script('asset/frontend/js/kostid.js'); !!}

</body>
</html>