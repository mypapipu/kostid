angular.module('HomeController', [])
.controller('HomeController',
    ['$scope', '$rootScope', '$http', 
    function($scope, $rootScope, $http) {

        $http.get('http://echo.web.id/kost/api.php?key=product')
            .success(function(response) {
                $scope.favorite = response.data;
                $scope.favorite_total = response.data.length;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
            });
    }]);