angular.module('CartController', [])
.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider
            .when("/cart", {
                templateUrl: TEMPLATE_PATH + "/cart/cart.html",
                controller: 'CartController'
            })
            .when("/cart/payment", {
                templateUrl: TEMPLATE_PATH + "/cart/payment.html",
                controller: 'PaymentController'
            })
            .when("/cart/confirm", {
                templateUrl: TEMPLATE_PATH + "/cart/confirm.html",
                controller: 'ConfirmController'
            })
            .otherwise({redirectTo: '/'});

        $locationProvider.html5Mode(true);
    }])
.controller('CartController',
    ['$scope', '$rootScope', '$http', '$timeout', '$route', '$location', 
    function($scope, $rootScope, $http, $timeout, $route, $location) {
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

        $http.get('/api/transaction/1')
            .success(function(response) {
                $scope.data = response;

                $http.get('/api/product/' + $scope.data.product_id)
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
    }]);