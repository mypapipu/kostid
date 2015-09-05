angular.module('HomeController', [
    'CityController',
    'DetailController',
    'CartController',
])
.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider
            .when("/", {
                templateUrl: TEMPLATE_PATH + "/home.html",
                controller: 'HomeController'
            });

        $locationProvider.html5Mode(true);
    }])
.controller('HomeController',
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

        $http.get('/api/product')
            .success(function(response) {
                $scope.favorite = response;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
            });
    }]);