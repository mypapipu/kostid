angular.module('DetailController', ['ui.bootstrap'])
.controller('DetailController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $location) {

        $scope.cart = {};
        $scope.item = {};
        $scope.Math = Window.Math;

        var date = new Date();

        $scope.dateStart = date.setDate(date.getDate() + 0);
        $scope.dateEnd = date.setDate(date.getDate() + 1);
        
        $scope.minDateStart = $scope.minDate ? null : new Date();
        $scope.minDateEnd = date.setDate(date.getDate() + 1);
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
            $scope.onProcess = true;

            var dataObj = {
                product: $stateParams.id,
                price: ($scope.cart.day * $scope.item.price),
                date_start: $scope.dateStart,
                date_end: $scope.dateEnd,
                };

            $http({
                method: 'POST',
                url: 'http://echo.web.id/kost/post.php',
                data: dataObj,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data, status, headers, config) {
                $location.path("/cart");
                // alert( " message: " + JSON.stringify({data: data}));
            }).error(function(data, status, headers, config) {
                $scope.onProcess = false;
                $scope.bookProcess = "Error";
                // alert( "failure message: " + JSON.stringify({data: data}));
            }); 
        }
    }]);