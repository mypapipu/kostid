angular.module('ConfirmController', ['ui.bootstrap', 'ngCookies'])
.controller('ConfirmController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$cookies', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $cookies, $location) {

        $scope.cart = [];
        $scope.Math = Window.Math;

        var today = new Date('2015', '01', '01');
        var tomorrow = new Date('2015', '12', '31');

        $scope.dateStart = today;
        $scope.dateEnd = tomorrow;

        //date default
        $scope.cart.day = ($scope.dateEnd - $scope.dateStart) / (24*60*60*1000);
        $scope.cart.month = Math.round($scope.cart.day/30);

        $http.get('http://echo.web.id/kost/api.php?key=product&id=1')
            .success(function(response) {
                $scope.item = response.data[0];
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
             });

        $scope.invoice = function() {
            var invoice_id = 1;
            $location.path( "/invoice/" + invoice_id );
        }
    }]);