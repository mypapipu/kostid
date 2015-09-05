angular.module('DetailController', [])
.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider
            .when("/detail/:id", {
                templateUrl: TEMPLATE_PATH + "/detail.html",
                controller: 'DetailController'
            })
            .otherwise({redirectTo: '/'});

        $locationProvider.html5Mode(true);
    }])
.controller('DetailController',
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

        $http.get('/api/product/' + $routeParams.id)
            .success(function(response) {
                $scope.data = response;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
             });
    }]);