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
'$scope', 'biography', '$sce', 'states',
function modalController($scope, biography, $sce, states) {
    $scope.biography = biography;
    $scope.states = states;

    if ( typeof biography.bio === 'string' ) {
        $scope.biography.bio = $sce.trustAsHtml(biography.bio);
    }
}])

.constant('states', [
    {name: 'Alabama'},
    {name: 'Alaska'},
    {name: 'Arizona'},
    {name: 'Arkansas'},
    {name: 'California'},
    {name: 'Colorado'},
    {name: 'Connecticut'},
    {name: 'Delaware'},
    {name: 'Florida'},
    {name: 'Georgia'},
    {name: 'Hawaii'},
    {name: 'Idaho'},
    {name: 'Illinois'},
    {name: 'Indiana'},
    {name: 'Iowa'},
    {name: 'Kansas'},
    {name: 'Kentucky'},
    {name: 'Louisiana'},
    {name: 'Maine'},
    {name: 'Maryland'},
    {name: 'Massachusetts'},
    {name: 'Michigan'},
    {name: 'Minnesota'},
    {name: 'Mississippi'},
    {name: 'Missouri'},
    {name: 'Montana'},
    {name: 'Nebraska'},
    {name: 'Nevada'},
    {name: 'New Hampshire'},
    {name: 'New Jersey'},
    {name: 'New Mexico'},
    {name: 'New York'},
    {name: 'North Carolina'},
    {name: 'North Dakota'},
    {name: 'Ohio'},
    {name: 'Oklahoma'},
    {name: 'Oregon'},
    {name: 'Pennsylvania'},
    {name: 'Rhode Island'},
    {name: 'South Carolina'},
    {name: 'South Dakota'},
    {name: 'Tennessee'},
    {name: 'Texas'},
    {name: 'Utah'},
    {name: 'Vermont'},
    {name: 'Virginia'},
    {name: 'Washington'},
    {name: 'West Virginia'},
    {name: 'Wisconsin'},
    {name: 'Wyoming'}
]);