var app1 = angular.module('app1', []);
app1.controller('formController',['$scope', function($scope){

  // validate email and mobile mumber
 $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;
 $scope.numberFormat = /^[0-9]{10,10}$/;
}]);
