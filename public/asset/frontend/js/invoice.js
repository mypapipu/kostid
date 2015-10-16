var kostidApp = angular.module('kostidApp', [
    'ui.router',
    'ui.bootstrap',
    'oc.lazyLoad'
], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

kostidApp.config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
    $ocLazyLoadProvider.config({
        // global configs go here
    });
}]);

kostidApp.factory('settings', ['$rootScope', function($rootScope) {
    // supported languages
    var settings = {
        layout: {
            pageAutoScrollOnLoad: 1000 // auto scroll to top on page load
        }
    };

    $rootScope.settings = settings;

    return settings;
}]);

/* Disable hash on URL*/
kostidApp.config(["$locationProvider", function($locationProvider) {
    $locationProvider.html5Mode(true);
}]);

kostidApp.run(['$rootScope', 'settings', '$state', '$stateParams', 
    function($rootScope, settings, $state, $stateParams) {
        $rootScope.$state = $state;
    }
]);

kostidApp.controller('InvoiceController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $location) {

        $scope.session = {};
        $scope.item = {};

        $http.get('http://echo.web.id/kost/checkout.php')
            .success(function(data, status, headers, config) {
                $scope.session = data;


                $http.get('http://echo.web.id/kost/api.php?key=product&id=' + $scope.session.product)
                .success(function(response) {
                    $scope.item = response.data[0];
                })
                .error(function() {
                    console.log('Unable to retrieve info from JSON file.');
                });

            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
            });
    }]);