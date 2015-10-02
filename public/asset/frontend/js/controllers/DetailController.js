angular.module('DetailController', ['ui.bootstrap', 'ngCookies'])
.controller('DetailController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$cookies', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $cookies, $location) {

        $scope.cart = [];
        $scope.Math = Window.Math;

        var today = new Date();
        var tomorrow = new Date();
        var tomorrow = tomorrow.setDate(today.getDate() + 1);

        $scope.dateStart = today;
        $scope.dateEnd = tomorrow;
        $scope.minDateStart = $scope.minDate ? null : new Date();
        $scope.minDateEnd = tomorrow;
        $scope.maxDate = new Date(2020, 5, 22);

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

        //date default
        $scope.cart.day = ($scope.dateEnd - $scope.dateStart) / (24*60*60*1000);
        $scope.cart.month = Math.ceil($scope.cart.day/30);

        //date on change
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

        $http.get('http://echo.web.id/kost/api.php?key=product&id=' + $stateParams.id)
            .success(function(response) {
                $scope.item = response.data[0];
                $rootScope.$state.current.data.pageTitle = $scope.item.name;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
             });

        $scope.bookProcess = 'Book';
        $scope.book = function() {
            
            $scope.bookProcess = 'Process';

            $cookies.put('cart_date_start', $scope.dateStart);
            $cookies.put('cart_date_end', $scope.dateEnd);
            $cookies.put('cart_date_product', $scope.item.id);

            $location.path( "/cart" );
        }
    }]);