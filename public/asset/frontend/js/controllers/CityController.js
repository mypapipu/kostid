angular.module('CityController', [])
.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider
            .when("/malang", {
                templateUrl: TEMPLATE_PATH + "/city.html",
                controller: 'CityController'
            })
            .when("/malang/page/:page", {
                templateUrl: TEMPLATE_PATH + "/city.html",
                controller: 'CityController'
            })
            .when("/malang/:district", {
                templateUrl: TEMPLATE_PATH + "/city.html",
                controller: 'CityController'
            })
            .when("/malang/:district/page/:page", {
                templateUrl: TEMPLATE_PATH + "/city.html",
                controller: 'CityController'
            })
            .otherwise({redirectTo: '/'});

        $locationProvider.html5Mode(true);
    }])
.controller('CityController',
    ['$scope', '$rootScope', '$http', '$timeout', '$route', '$routeParams', '$location', 
    function($scope, $rootScope, $http, $timeout, $route, $routeParams, $location) {
        var history = [];

        $rootScope.$on('$routeChangeSuccess', function() {
            history.push($location.$$path + '?' + $.param(getAllUrlParameter()));
        });

        $rootScope.back = function() {
            $rootScope.redirect($rootScope.prevUrl());
        }

        $rootScope.prevUrl = function() {
            return history.length > 1 ? history.splice(-2)[0] : "/";
        }

        $http.get('/api/product')
            .success(function(response) {
                $scope.list = response;
            })
            .error(function() {
                console.log('Unable to retrieve list from JSON file.');
            });

        $http.get('/api/city')
            .success(function(response) {
                $scope.city = response;
            })
            .error(function() {
                console.log('Unable to retrieve city from JSON file.');
            });
    }]);