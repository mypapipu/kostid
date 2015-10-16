angular.module('ConfirmController', [])
.controller('ConfirmController',
    ['$scope', '$rootScope', '$http', '$state', '$stateParams', '$location', 
    function($scope, $rootScope, $http, $state, $stateParams, $location) {
        $scope.confirmProcess = function ()
        {
            alert("Data diproses");
        }
    }]);