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
'$scope', 'biographies', '$window',
function pageController($scope, biographies, $window) {

    $scope.biographies = biographies;
    $scope.currentYear = new Date().getFullYear();
    $scope.showMenu = false;
    $scope.isMobile = function isMobile() {
        return $window.innerWidth <= 425;
    };

}]);