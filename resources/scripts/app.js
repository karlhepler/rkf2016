/**
 * Initialize the Angular Module
 */
angular.module('rkf2016', [
    'rkf2016.modal',
    'smoothScroll',
    'pageslide-directive',
    'ngAnimate',
    'ngMask'
])

.controller('pageController', [
'$scope', 'biographies',
function pageController($scope, biographies) {

    $scope.biographies = biographies;
    $scope.currentYear = new Date().getFullYear();
    $scope.showMenu = false;

}]);