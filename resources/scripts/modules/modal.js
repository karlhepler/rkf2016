angular.module('rkf2016.modal', ['pathgather.popeye'])

.directive('modal', 
function modalDirective() {
    return {
        restrict: 'A',
        scope: {
            'tpl': '@'
        },
        controller: ['Popeye', function modalDirectiveController(Popeye) {
            this.openModal = function openModal(templateUrl) {
                this.modal = Popeye.openModal({
                    templateUrl: templateUrl,
                    controller: 'modalController'
                });
            }.bind(this);
        }],
        link: function modalDirectiveLink(scope, elem, attrs, ctrl) {
            /**
             * Open modal on click
             */
            elem.on('click', function(e) {
                e.preventDefault();
                ctrl.openModal(getTemplateUrl());
            });

            /**
             * Get the full-qualified template url
             *
             * @return {mixed}
             */
            function getTemplateUrl() {
                return `/templates/modals/${scope.tpl}.html`;
            }
        }
    };
})

.controller('modalController', ['$scope',
function modalController($scope) {
    console.log('controller');
}]);