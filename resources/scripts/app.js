/**
 * Initialize the Angular Module
 */
angular.module('rkf2016', [
    'rkf2016.modal',
    'smoothScroll',
    'pageslide-directive',
    'ngAnimate'
])

.controller('pageController', [
'$scope', 'biographies',
function pageController($scope, biographies) {
    $scope.biographies = biographies;
}]);