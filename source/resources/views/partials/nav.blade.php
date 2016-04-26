<button class="Hamburger Hamburger--htx"
    ng-class="{'is-active': showMenu}"
    ng-click="showMenu = !showMenu">
    <span>toggle menu</span>
</button>
<pageslide
    ps-open="showMenu"
    ps-side="left"
    ps-body-class="true"
    ps-speed="0.3"
    ps-push="true"
    ps-auto-close="true"
    ps-size="@{{ isMobile() ? '80vw' : '50vw' }}">
    <div>
        <nav class="Navigation">
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="about-festival">About the Festival</a>
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="performers-instructors">Performers &amp; Instructors</a>
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="location-directions">Location &amp; Directions</a>
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="schedule-workshops">Schedule &amp; Workshops</a>
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="contest-information">Contest Information</a>
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="tickets-admission">Tickets &amp; Admission</a>
            <a class="Navigation__link" href="#" ng-click="showMenu = false" scroll-to="contact-us">Contact Us</a>
        </nav>
    </div>
</pageslide>
