angular.module('InvoiceController', [])
.controller('InvoiceController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $location) {

        $scope.session = {};
        $scope.item = {};

        alert("her");

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