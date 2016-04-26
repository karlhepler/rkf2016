<section id="performers-instructors" class="grid-container">
    <h3>Performers &amp; Instructors</h3>
    <p class="blue align-center">(Click each name for more information)</p>
    <div class="Names">
        <a href="#" ng-repeat="(index, biography) in biographies | filter:{performer:true} track by $index"
            modal biography="biography"
            class="Names__name"
            ng-class="{
                red: index % 4 === 0,
                darkyellow: index % 4 === 1,
                blue: index % 4 === 2,
                orange: index % 4 === 3
            }">@{{ biography.name }}</a>
        <span class="Names__name grey">... and more!</span>
    </div>
</section>
