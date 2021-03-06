@extends('layout')


@section('content')
	
	<div ng-app="cityApp" ng-controller="cityController">

        <input type="hidden" name="city" value="{{ $city}}" />
        <input type="hidden" name="page" value="{{ $page }}" />
        <input type="hidden" name="offset" value="{{ $offset }}" />

		<div id="wall_1" class="image" data-stellar-background-ratio="0.4">
            <div class="txtprlx concon">
                <div class="txtprllx">
                    <h1>{{$city}}</h1>
                    <h4>consectetur adipiscing elit. Quisque condimentum dui velit, ut congue ipsum sodales fringilla. Nulla ultrices ligula et odio vestibulum facilisis.</h4>
                </div>
            </div>
        </div>
        <div class="row gray">
            <div class="concon">
                <p><a href="{{url()}}">Home</a> &gt; {{$city}}</p>
            </div>
        </div>
        <div class="concon margintop">
            <div class="col-md-3 margintop">
                <button class="btn btn-danger btn-lg animated fadeIn btn-width-max">View On Map</button>
                <form role="form">
                    <div class="bbb margintop">Price</div>
                    <div class="checkbox"><label><input type="checkbox" value="" checked>From $10 to $50</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">From $50 to $80</label></div>
                    <div class="checkbox borderbottom"><label><input type="checkbox" value="">From $80 to $100</label></div>
                </form>
                <!--
                <form role="form">
                    <div class="bbb margintop">Star Rating</div>
                    <div class="checkbox"><label><input type="checkbox" value="" checked><fieldset class="bintang"><span class="starImg star-50"></span></fieldset></label></div>
                    <div class="checkbox"><label><input type="checkbox" value=""><fieldset class="bintang"><span class="starImg star-40"></span></fieldset></label></div>
                    <div class="checkbox"><label><input type="checkbox" value=""><fieldset class="bintang"><span class="starImg star-30"></span></fieldset></label></div>
                    <div class="checkbox"><label><input type="checkbox" value=""><fieldset class="bintang"><span class="starImg star-20"></span></fieldset></label></div>
                    <div class="checkbox borderbottom"><label><input type="checkbox" value=""><fieldset class="bintang"><span class="starImg star-10"></span></fieldset></label></div>
                </form>
                <form role="form">
                    <div class="bbb margintop">Review Score</div>
                    <div class="checkbox"><label><input type="checkbox" value="" checked>Super</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Very Good</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Good</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Pleasant</label></div>
                    <div class="checkbox borderbottom"><label><input type="checkbox" value="">No Rating</label></div>
                </form>
                -->
                <form role="form">
                    <div class="bbb margintop">Facility</div>
                    <div class="checkbox"><label><input type="checkbox" value="" checked>Pet Allowed</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Wifi</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Good</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Pleasant</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Good</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="">Pleasant</label></div>
                    <div class="checkbox borderbottom"><label><input type="checkbox" value="">No Rating</label></div>
                </form>
                <form role="form" class="borderbottom">
                    <div class="bbb margintop">District</div>
                    <div class="checkbox" ng-repeat="item in city | limitTo:6:0">
                        <label><input type="checkbox" value="[[item.id]]">[[item.name]]</label>
                    </div>
                </form>
            </div>
            <div class="col-md-9 margintop">
                <div class="main">
                    <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                        <div class="cbp-vm-options">
                            <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
                            <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
                        </div>
                        <div>
                            <ul>
                                <li ng-repeat="item in list | limitTo:12:0">
                                    <figure class="cbp-vm-image">
                                        <a href="{{ url('detail/[[item.image[0].product_id]]') }}">
                                            <img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0">
                                        </a>
                                    </figure>
                                    <section class="cbp-desc">
                                        <h3 class="cbp-vm-title">[[item.name]]</h3>
                                        <div class="cbp-vm-price">[[item.price]]</div>
                                        <div class="cbp-vm-details">[[item.description]]</div>
                                        <a class="cbp-vm-icon cbp-vm-add" href="{{ url('detail/[[item.image[0].product_id]]') }}">Add to cart</a>
                                    </section>
                                    <div style="clear:both;"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 center margintop">
                    <button class="marginbottom margintop pagination">Prev</button>
                    <button class="marginbottom margintop pagination">1</button>
                    <button class="marginbottom margintop pagination">2</button>
                    <button class="marginbottom margintop pagination">3</button>
                    <button class="marginbottom margintop pagination">4</button>
                    <button class="marginbottom margintop pagination">5</button>
                    <button class="marginbottom margintop pagination">Next</button>
                </div>
            </div>

            

            <div style="clear: both;"></div>
        </div>

    </div>

	<script>
		var cityApp = angular.module('cityApp', [], function($interpolateProvider) {
	        $interpolateProvider.startSymbol('[[');
	        $interpolateProvider.endSymbol(']]');
	    });
		cityApp.controller('cityController', function($scope, $http) {
		    $http.get(" {{ url('api/product') }}")
		    .success(function(response) {
		    	$scope.list = response;
		    })
		    .error(function() {
	            console.log('Unable to retrieve list from JSON file.');
	        });

		    $http.get(" {{ url('api/city') }}")
		    .success(function(response) {
		    	$scope.city = response;
		    })
		    .error(function() {
	            console.log('Unable to retrieve city from JSON file.');
	        });
		});
	</script>

@stop

@section('custom_js')
	<script src="{{ asset('/js/classie.js') }}"></script>
	<script src="{{ asset('/js/cbpViewModeSwitch.js') }}"></script>
@stop

@section('custom_css')
	<link href="{{ asset('/css/default.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/component.css') }}" rel="stylesheet" type="text/css" />
@stop
