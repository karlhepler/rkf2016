angular.module('rkf2016.modal', ['pathgather.popeye'])

.directive('modal', 
function modalDirective() {
    return {
        restrict: 'A',
        scope: {
            'tpl': '@?',
            'biography': '=?'
        },
        controller: ['Popeye', function modalDirectiveController(Popeye) {
            this.openModal = function openModal(templateUrl, biography) {
                this.modal = Popeye.openModal({
                    templateUrl: templateUrl,
                    controller: 'modalController',
                    resolve: {
                        biography: function() {
                            return biography || {};
                        }
                    }
                });
            }.bind(this);
        }],
        link: function modalDirectiveLink(scope, elem, attrs, ctrl) {
            /**
             * Open modal on click
             */
            elem.on('click', function(e) {
                e.preventDefault();
                ctrl.openModal(getTemplateUrl(), scope.biography);
            });

            /**
             * Get the full-qualified template url
             *
             * @return {mixed}
             */
            function getTemplateUrl() {
                return scope.biography ? '/templates/modals/biography.html' : `/templates/modals/${scope.tpl}.html`;
            }
        }
    };
})

.controller('modalController', [
'$scope', 'biography', '$sce',
function modalController($scope, biography, $sce) {
    $scope.biography = biography;

    if ( typeof biography.bio === 'string' ) {
        $scope.biography.bio = $sce.trustAsHtml(biography.bio);
    }
}]);