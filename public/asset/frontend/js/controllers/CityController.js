angular.module('CityController', [])
.controller('CityController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $location) {

        $http.get('http://echo.web.id/kost/api.php?key=city&id=1')
            .success(function(response) {
                $scope.city = response.data;
                $rootScope.$state.current.data.pageTitle = $scope.city;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
             });

        $http.get('http://echo.web.id/kost/api.php?key=area')
            .success(function(response) {
                $scope.area = response.data;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
             });

        $http.get('http://echo.web.id/kost/api.php?key=product')
            .success(function(response) {
                $scope.room = response.data;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
            });

    }]);