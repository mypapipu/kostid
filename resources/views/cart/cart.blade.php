@extends('layout')

@section('custom_css')
    <link href="{{url('/css/cart.css')}}" rel="stylesheet" />
    <link href="{{url('/css/jquery.switch.css')}}" rel="stylesheet" />
    <link href="{{url('/css/icon_set_1.css')}}" rel="stylesheet" />
    <link href="{{url('/css/icon_set_2.css')}}" rel="stylesheet" />
    <link href="{{url('/css/fontello.css')}}" rel="stylesheet" />
    <link href="{{url('/js/angular-datepicker/build/themes/default.css')}}" rel="stylesheet" />
    <link href="{{url('/js/angular-datepicker/build/themes/default.date.css')}}" rel="stylesheet" />
@stop

@section('custom_js')
    <script type="text/javascript" src="{{url('/js/angular-datepicker/build/angular-datepicker.js')}}"></script>
@stop

@section('content')

<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1>Place your order</h1>
        <div class="bs-wizard">
            
            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">Cart</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="{{url('cart')}}" class="bs-wizard-dot"></a>
            </div>
                               
            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Payment</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="{{url('payment')}}" class="bs-wizard-dot"></a>
            </div>
            
            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Finish!</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="{{url('confirmation')}}" class="bs-wizard-dot"></a>
            </div>  
                   
        </div>
    </div>
</section>

<div id="position">
    <div class="container">
        <ul>
            <li><a href="{{url()}}">Home</a></li>
            <li>Cart</li>
        </ul>
    </div>
</div>

<form method="post">
    <input type="hidden" name="product_id" ng-model="product_id" value="[[product.id]]" />
    <div class="container margin_60" ng-app="cartApp" ng-controller="cartController">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped cart-list add_bottom_30">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="thumb_cart">
                                    <img src="[[product.image[0].image_url]]" alt="[[product.name]]" >
                                </div>
                                <span class="item_cart">[[product.name]]</span>
                            </td>
                            <td>
                                <input type="date" pick-a-date="date" pick-a-date-options="dateOptions" ng-model="date_start" min="{{date('Y-m-d')}}" /> [[date_start]]
                                <input type="date" pick-a-date="date" pick-a-date-options="dateOptions" ng-model="date_end" min="[[date_start]]" />
                            </td>
                            <td>
                                <strong>[[product.price]]</strong>
                            </td>
                            <td class="options">
                                <a href="#"><i class="icon-trash"></i></a>
                                <a href="#"><i class="icon-ccw-2"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-striped options_cart">
                    <thead>
                        <tr>
                            <th colspan="3">Add options / Services</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:10%">
                                <i class="icon_set_1_icon-16"></i>
                            </td>
                            <td style="width:60%">
                                Barang Elektronik <strong>+Rp. 0</strong>
                            </td>
                            <td style="width:35%">
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_1" id="option_1" checked="" value="">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td style="width:10%">
                                <i class="icon_set_1_icon-16"></i>
                            </td>
                            <td style="width:60%">
                                Hewan Peliharaan <strong>+Rp. 0</strong>
                            </td>
                            <td style="width:35%">
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_1" id="option_1" checked="" value="">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td style="width:10%">
                                <i class="icon_set_1_icon-16"></i>
                            </td>
                            <td style="width:60%">
                                Laundry <strong>+Rp. 0</strong>
                            </td>
                            <td style="width:35%">
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_1" id="option_1" checked="" value="">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td style="width:10%">
                                <i class="icon_set_1_icon-16"></i>
                            </td>
                            <td style="width:60%">
                                Kebersihan <strong>+Rp. 0</strong>
                            </td>
                            <td style="width:35%">
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_1" id="option_1" checked="" value="">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table> 
            </div>
            
            <aside class="col-md-4">
                <div class="box_style_1">
                    <h3 class="inner">- Summary -</h3>
                    <table class="table table_summary">
                    <tbody>
                    <tr>
                        <td>
                            Adults
                        </td>
                        <td class="text-right">
                            2
                        </td>
                    </tr>
                    <tr class="total">
                        <td>
                            Total cost
                        </td>
                        <td class="text-right">
                            Rp. 
                        </td>
                    </tr>
                    </tbody>
                    </table>
                    <button type="button" class="btn_full" ng-click="payment()">Check out</button>
                </div>

                <div class="box_style_4">
                    <i class="icon_set_1_icon-89"></i>
                    <h4>Ada <span>Pertanyaan?</span></h4>
                    <a href="tel://0341" class="phone">+0341</a>
                    <small>Senin-Sabtu 09.00 - 17.00</small>
                </div>

            </aside>

        </div><!--End row -->
    </div>
</form>

<script>
    var cartApp = angular.module('cartApp', ['angular-datepicker'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });
    cartApp.controller('cartController', function($scope, $http) {

        $scope.date_start = new Date();

        $scope.dateOptions = {
            format: 'yyyy-mm-dd',
            selectYears: true,
            selectMonths: true,
            onClose: function(e) {
                // do something when the picker closes   
            }
        }

        $scope.payment = function($event) {
            
        }

        $http.get(" {{ url('api/transaction/'. $ID) }}")
            .success(function(response) {
                $scope.data = response;

                $http.get(" {{ url('api/product/') }}/" + $scope.data.product_id)
                    .success(function(response) {
                        $scope.product = response;
                    })
                    .error(function() {
                        console.log('Unable to retrieve info from JSON file.');
                    });
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
            });
        });
</script>

@stop