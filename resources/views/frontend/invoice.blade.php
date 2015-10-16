<!DOCTYPE html>
<html lang="en" data-ng-app="kostidApp">
<head>
    <base href="/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Invoice | Kostid.dev</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('asset/frontend/img/favicon.ico') }}" type="image/x-icon">
    
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    {!! HTML::style('asset/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('asset/frontend/css/style.css') !!}
    {!! HTML::style('asset/frontend/css/invoice.css') !!}

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-controller="InvoiceController">
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
                    <h2>Invoice</h2><h3 class="pull-right">Order #[[session.invoice]]</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                        <strong>Pembayaran ke:</strong><br>
                            John Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Tanggal Pemesanan:</strong><br>
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
                        <h3 class="panel-title"><strong>Detail Pemesanan</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table confirm">
                                <tbody>
                                    <tr>
                                        <td><strong>Nama</strong></td>
                                        <td>[[item.name]]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Alamat</strong></td>
                                        <td>[[item.address]]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mulai</strong></td>
                                        <td>[[session.date_start | date:"dd-MMM-yyyy"]]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Hingga</strong></td>
                                        <td>[[session.date_end | date:"dd-MMM-yyyy"]]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Harga</strong></td>
                                        <td><strong>Rp [[session.price]]</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


    {!! HTML::script('asset/frontend/js/invoice.js'); !!}
    {!! HTML::script('asset/frontend/js/directive.js'); !!}
    {!! HTML::script('asset/frontend/js/kostid.js'); !!}

</body>
</html>