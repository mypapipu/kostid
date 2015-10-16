angular.module('CartController', ['ui.bootstrap'])
.controller('CartController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $location) {

        $scope.checkout = function() {
            $location.path("/checkout");
        };

        $scope.remove = function() {
            $scope.cart = null;
        }

        $scope.cart = {};
        $scope.item = {};
        $scope.session = {};
        $scope.Math = Window.Math;

        var date = new Date();
        var date2 = new Date();

        $http.get('http://echo.web.id/kost/get.php')
            .success(function(data, status, headers, config) {
                $scope.session = data;

                $http.get('http://echo.web.id/kost/api.php?key=product&id=' + $scope.session.product)
                .success(function(response) {
                    $scope.item = response.data[0];
                })
                .error(function() {
                    console.log('Unable to retrieve info from JSON file.');
                 });

                $scope.dateStart = $scope.session.date_start;
                $scope.dateEnd = $scope.session.date_end;

                var date2 = new Date($scope.dateStart);

                $scope.minDateStart = $scope.minDate ? null : new Date();
                $scope.minDateEnd = date2.setDate(date2.getDate() + 1);
                $scope.maxDate = new Date(2020, 5, 22);

                $scope.cart.day = ($scope.dateEnd - $scope.dateStart) / (24*60*60*1000);
                $scope.cart.month = Math.ceil($scope.cart.day/30);

                $scope.openDateStart = function($event) {
                    $scope.statusDateStart.opened = true;
                };

                $scope.openDateEnd = function($event) {
                    $scope.statusDateEnd.opened = true;
                };

                $scope.dateOptions = {
                    formatYear: 'yy',
                    startingDay: 1
                };

                $scope.statusDateStart = {
                    opened: false
                };

                $scope.statusDateEnd = {
                    opened: false
                };
                
                $scope.selectDateStart = function(dateStart) {
                    $scope.dateStart = dateStart;
                    $scope.cart.day = ($scope.dateEnd - $scope.dateStart) / (24*60*60*1000);
                    $scope.cart.month = Math.ceil($scope.cart.day/30);
                    minDateEnd = dateStart + 1;
                }

                $scope.selectDateEnd = function(dateEnd) {
                    $scope.dateEnd = dateEnd;
                    $scope.cart.day = ($scope.dateEnd - $scope.dateStart) / (24*60*60*1000);
                    $scope.cart.month = Math.ceil($scope.cart.day/30);
                }


            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
            });
    }]);