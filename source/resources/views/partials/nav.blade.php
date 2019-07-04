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
    ps-size="@{{ isMobile() ? '80vw' : '50vw' }}">
    <div>
        <nav class="Navigation">
            <a class="Navigation__link" href="#about-festival" ng-click="showMenu = false" scroll-to="about-festival">About the Festival</a>
            <a class="Navigation__link" href="#location-directions" ng-click="showMenu = false" scroll-to="location-directions">Location &amp; Directions</a>
            <a class="Navigation__link" href="#contest-information" ng-click="showMenu = false" scroll-to="contest-information">Contest Information</a>
            <a class="Navigation__link" href="#tickets-admission" ng-click="showMenu = false" scroll-to="tickets-admission">Tickets &amp; Admission</a>
            <a class="Navigation__link" href="#contact-us" ng-click="showMenu = false" scroll-to="contact-us">Contact Us</a>
        </nav>
    </div>
</pageslide>
