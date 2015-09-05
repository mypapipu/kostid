@extends('layout')

@section('slider')
	@include('slider')
@stop

@section('content')
	
	<div ng-app="homeApp" ng-controller="homeController">

		<!--stock 1: kost favorit-->
		<div class="row margintop">
			<h1 class="center col-xs-12">Kost <span class="pink">Favorit</span></h1>
			<p class="center col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet.</p>
		</div>

		<div class="row margintop">
			<div class="grid">
				<figure class="effect-chico bbb" ng-repeat="item in favorite | limitTo:3:0">
					<a href="{{ url('detail/[[item.image[0].product_id]]') }} ">
						<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" />
						<h3>[[item.name]]</h3>
					</a>
				</figure>
			</div>
		</div>

		<div class="row margintop">
			<div class="grid">
				<figure class="effect-chico bbb" ng-repeat="item in favorite | limitTo:3:3">
					<a href="{{ url('detail/[[item.image[0].product_id]]') }} ">
						<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" />
						<h3>[[item.name]]</h3>
					</a>
				</figure>
			</div>
		</div>

		<div class="row margintop">
			<div class="grid">
				<figure class="effect-chico bbb" ng-repeat="item in favorite | limitTo:3:6">
					<a href="{{ url('detail/[[item.image[0].product_id]]') }} ">
						<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" />
						<h3>[[item.name]]</h3>
					</a>
				</figure>
			</div>
		</div>

		<div class="row margintop">
			<div class="col-md-5 col-xs-4"></div>
			<a href="{{ url('/kost/favorite/') }}" class="btn btn-primary col-md-2 center bbb">Lihat Semua</a>
			<div class="col-md-5 col-xs-4"></div>
		</div>

		<div class="borderbottom"></div>

		<!--stock 2: kost terbaru-->
		<div class="row margintop">
			<h1 class="center">Kost <span class="pink">Terbaru</span></h1>
			<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet.</p>
		</div>

		<div class="row">
			<div class="grid">
				<figure class="effect-chico bbb" ng-repeat="item in favorite | limitTo:3:0">
					<a href="[[x.url]]">
						<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" />
						<h3>[[item.name]]</h3>
					</a>
				</figure>
			</div>
		</div>

		<div class="row margintop">
			<div class="grid">
				<figure class="effect-chico bbb" ng-repeat="item in favorite | limitTo:3:3">
					<a href="{{ url('detail/[[item.image[0].product_id]]') }}">
						<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" />
						<h3>[[item.name]]</h3>
					</a>
				</figure>
			</div>
		</div>

		<div class="row margintop">
			<div class="grid">
				<figure class="effect-chico bbb" ng-repeat="item in favorite | limitTo:3:6">
					<a href="{{ url('detail/[[item.image[0].product_id]]') }}">
						<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" />
						<h3>[[item.name]]</h3>
					</a>
				</figure>
			</div>
		</div>

		<div class="row margintop">
			<div class="col-md-5 col-xs-4"></div>
			<a href="{{ url('/kost/') }}" class="btn btn-primary col-md-2 center bbb">Lihat Semua</a>
			<div class="col-md-5 col-xs-4"></div>
		</div>

		<!-- -->
		<div class="row margintop marginbottom">
            <h1 class="center">Penawaran <span class="pink">Menarik</span> Hari Ini!</h1>
            <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet.</p>
        </div>

        <div class="concon">
            <div class="center col-md-4 marginbottom" ng-repeat="item in favorite | limitTo:3:0">
                <a href="{{ url('detail/[[item.image[0].product_id]]') }}">
                	<img src="[[item.image[0].image_url]]" alt="[[item.name]]" border="0" style="max-width: 264px;" />
                </a>
                <p>[[item.description]]</p>
                <a href="{{ url('detail/[[item.image[0].product_id]]') }}" class="btn btn-danger animated zoomIn">Read More</a>
            </div>

	        <div class="row marginbottom">
	            <div class="col-md-8 center">
	            	<a href="{{ url('detail/[[favorite[0].image[0].product_id]]') }}">
	            		<img src="[[favorite[0].image[0].image_url]]" alt="[[favorite[0].name]]" border="0">
	            	</a>
	            </div>
	            <div class="col-md-4">
	                <h3>[[favorite[0].name]]</h3>
	                <p>[[favorite[0].description]]</p>
	                <ul>
	                    <li ng-repeat="facility in favorite[0].product_facility">[[facility.key]]</li>
	                </ul>
	                <a href="{{ url('detail/[[favorite[0].image[0].product_id]]') }}" class="btn btn-primary animated zoomIn">Read More</a>
	            </div>
	        </div>
        </div>

	</div>

	<script>
		var homeApp = angular.module('homeApp', ['ngRoute'], function($interpolateProvider) {
	        $interpolateProvider.startSymbol('[[');
	        $interpolateProvider.endSymbol(']]');
	    });
		homeApp.controller('homeController', function($scope, $http, $route, $routeParam, $location) {
		    $http.get(" {{ url('api/product') }}")
		    .success(function(response) {
		    	$scope.favorite = response;
		    })
		    .error(function() {
	            console.log('Unable to retrieve info from JSON file.');
	        });
		});
	</script>

@stop