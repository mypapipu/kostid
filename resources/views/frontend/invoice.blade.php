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
    {!! HTML::style('asset/frontend/css/invoice.css') !!}

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link id="ng_load_plugins_before"/>
    <style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }
    
    .table > tbody > tr > .no-line {
        border-top: none;
    }
    
    .table > thead > tr > .no-line {
        border-bottom: none;
    }
    
    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
    </style>
    
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

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                        <strong>Billed To:</strong><br>
                            John Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                        <strong>Shipped To:</strong><br>
                            Jane Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Payment Method:</strong><br>
                            Visa ending **** 4242<br>
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            March 7, 2014<br><br>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Item</strong></td>
                                        <td class="text-center"><strong>Price</strong></td>
                                        <td class="text-center"><strong>Quantity</strong></td>
                                        <td class="text-right"><strong>Totals</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                    <tr>
                                        <td>BS-200</td>
                                        <td class="text-center">$10.99</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$10.99</td>
                                    </tr>
                                    <tr>
                                        <td>BS-400</td>
                                        <td class="text-center">$20.00</td>
                                        <td class="text-center">3</td>
                                        <td class="text-right">$60.00</td>
                                    </tr>
                                    <tr>
                                        <td>BS-1000</td>
                                        <td class="text-center">$600.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$600.00</td>
                                    </tr>
                                    <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                        <td class="thick-line text-right">$670.99</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Shipping</strong></td>
                                        <td class="no-line text-right">$15</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Total</strong></td>
                                        <td class="no-line text-right">$685.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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