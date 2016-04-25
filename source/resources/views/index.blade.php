<!doctype html>
<html class="no-js" lang="en" ng-app="rkf2016" ng-strict-di>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Robin Kessinger Festival &amp; Workshops</title>
    <meta name="description" content="Home of the west virginia state flatpick guitar contest &amp; part of heritage farm museum and village's \"way back\" music weekend.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-Frame-Options" content="deny">
    <meta property="og:url" content="http://www.robinkessingerfestival.org" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Robin Kessinger Festival & Workshops" />
    <meta property="og:description" content="Home of the west virginia state flatpick guitar contest & part of heritage farm museum and village's \"way back\" music weekend." />
    <meta property="og:image" content="http://www.robinkessingerfestival.org/images/fb.png" />
    <link rel="stylesheet" href="/app.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body ng-controller="pageController">
    <!--[if lte IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="content">
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
            ps-size="50vw">
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

        <header class="Header">
            <div class="Header__title grid-container">
                <h1><span class="Header__kessinger blue">Robin Kessinger</span></h1>
                <h2 class="Header__subtitle yellow">
                    June 3-4
                    <img class="Header__logo" src="/images/logo.png" alt="Robin Kessinger Festival &amp; Workshops">
                    2016
                </h2>
                <h1 class="grid-row orange">Festival &amp; Workshops</h1>
            </div>
            <div class="Header__tagline">
                <strong>Home of the West Virginia State Flatpick Guitar Contest</strong><br>
                <small>&amp; part of <a href="http://heritagefarmmuseum.com" target="_blank">Heritage Farm Museum and Village's</a> "Way Back" Music Weekend</small>
                <br><br>
                <button scroll-to="tickets-admission">Tickets &amp; Admission</button>
            </div>

        </header>

        <hr>

        <main>
            <section id="about-festival" class="grid-container">
                <h3>About the festival</h3>
                <h4 class="blue">Our mission is to celebrate the traditions of passing on musical heritage in the mountain state.</h4>
                <br>
                <p>The Robin Kessinger Festival is pleased to announce the 2016 festival, to be held in conjunction with the Heritage Farm Museum and Village's "Way Back Weekend" on June 3 &amp; 4.  In addition to Friday and Saturday concerts, the WV State Flatpick Guitar Contest on Saturday, and traditional music workshops Saturday morning, the Heritage Farm venue offers a peek back in time for the whole family. Interact with life as it was in Appalachia from thee 1800’s through the early 1900’s in award winning exhibits that include over 20 buildings, as well as enjoy the music – which will be scattered through the farm as well. And don’t forget to visit the Mountain Men’s camp to see how our first settlers lived.</p>
                <p>We promote and encourage people to support West Virginia’s musical heritage as well as expose them to a variety of musical styles. Our hope is that everyone who attends our festival will go home with fond memories of the celebration of music, the beauty of our state, and the good times with old and new friends.</p>
            </section>
            <hr>
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
            <hr>
            <section id="location-directions" class="grid-container">
                <h3>Location &amp; Directions</h3>
                <h4><a class="orange" href="http://heritagefarmmuseum.com" target="_blank">Heritage Farm Museum &amp; Village</a></h4>
                <p class="align-center blue"><strong>3300 Harvey Rd, Huntington, WV 25704</strong></p>
                <p class="align-center"><a href="http://heritagefarmmuseum.com" target="_blank">Heritage Farms</a> has set aside the New Barn and retreat Center for patrons of our festival.</p>
                <p class="align-center"><strong>Contact Heritage Farms for reservations 304-522-1244</strong></p>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.814163979372!2d-82.46941108463635!3d38.376420279654255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8845e22ef865d447%3A0x689d353752128932!2sHeritage+Farm+Museum+%26+Village!5e0!3m2!1sen!2sus!4v1461532013296" width="100%" height="300" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
                <br><br>
            </section>
            <hr>
            <section id="schedule-workshops" class="grid-container">
                <h3>Schedule &amp; Workshops</h3>
                <ul class="Schedule">
                    <li class="Schedule__item">
                        <div class="Schedule__date-container">
                            <div class="Schedule__date">
                                <div class="Schedule__day Schedule--fri">Fri</div>
                                <div class="Schedule__month">Jun</div>
                                <div class="Schedule__num">03</div>
                            </div>
                        </div>
                        <div class="Schedule__events">
                            <div class="Schedule__event">
                                <div class="Schedule__time">4:00 pm</div>
                                <p class="Schedule__description">
                                    Gates Open
                                </p>
                            </div>
                            <div class="Schedule__event">
                                <div class="Schedule__time">6:30 pm</div>
                                <p class="Schedule__description">
                                    Evening concerts with
                                    <a href="#" modal biography="(biographies|filter:{name:'Robin Kessinger'})[0]">Robin Kessinger</a>,
                                    <a href="#" modal biography="(biographies|filter:{name:'Robert Shafer'})[0]">Robert Shafer</a>,
                                    <a href="#" modal biography="(biographies|filter:{name:'Dan Kessinger'})[0]">Dan Kessinger</a>,
                                    and <a href="#" modal biography="(biographies|filter:{name:'Roger Rabalais'})[0]">Rober Rabalais</a>.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="Schedule__item">
                        <div class="Schedule__date-container">
                            <div class="Schedule__date">
                                <div class="Schedule__day">Sat</div>
                                <div class="Schedule__month">Jun</div>
                                <div class="Schedule__num">03</div>
                            </div>
                        </div>
                        <div class="Schedule__events">
                            <div class="Schedule__event">
                                <div class="Schedule__time">10:00 am - 12:00 pm</div>
                                <p class="Schedule__description">
                                    <h4 class="align-left">Workshops</h4>
                                    <br>
                                    <p><a href="#" modal biography="(biographies|filter:{name:'Dan Kessinger'})[0]">Dan Kessinger</a> - <strong>FIDDLE</strong></p>
                                    <p><a href="#" modal biography="(biographies|filter:{name:'Jodi & Tim Harbin'})[0]">Jodi Harbin</a> - <strong>MANDOLIN</strong></p>
                                    <p><a href="#" modal biography="(biographies|filter:{name:'Jodi & Tim Harbin'})[0]">Tim Harbin</a> - <strong>GUITAR</strong></p>
                                    <p><a href="#" modal biography="(biographies|filter:{name:'Karl Hepler'})[0]">Karl Hepler</a> - <strong>Flatpick, Celtic Rhythm</strong></p>
                                    <p><a href="#" modal biography="(biographies|filter:{name:'Jesse Smith'})[0]">Jesse Smith</a> - <strong>Interaction of fingerpicking guitar with bluegrass guitar</strong></p>
                                </p>
                            </div>
                            <div class="Schedule__event">
                                <div class="Schedule__time">10:00 am - 12:30 pm</div>
                                <p class="Schedule__description">
                                    Late contest registration
                                </p>
                            </div>
                            <div class="Schedule__event">
                                <div class="Schedule__time">1:00 pm</div>
                                <p class="Schedule__description">
                                    <strong>WV State Flatpick Guitar Contest</strong>
                                    <br><br>
                                    Open Mic from end of contest to presentation of awards
                                </p>
                            </div>
                            <div class="Schedule__event">
                                <div class="Schedule__time">4:00 pm</div>
                                <p class="Schedule__description">
                                    Evening concerts with
                                    <a href="#" modal biography="(biographies|filter:{name:'Wayne Henderson'})[0]">Wayne Henderson</a>,
                                    <a href="#" modal biography="(biographies|filter:{name:'Jodi & Tim Harbin'})[0]">Jodi &amp; Tim Harbin</a>,
                                    <a href="#" modal biography="(biographies|filter:{name:'Karl Hepler'})[0]">Karl Hepler</a>,
                                    <a href="#" modal biography="(biographies|filter:{name:'Allen Shadd'})[0]">Allen Shadd</a>,
                                    <a href="#" modal biography="(biographies|filter:{name:'Dan Kessinger'})[0]">Dan Kessinger</a>,
                                    and special guests.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <hr>
            <section id="contest-information" class="grid-container">
                <h3>Contest Information</h3>
                <div class="grid-row">
                    <div class="grid-half">
                        <h4 class="blue">Prizes</h4>
                        <br>
                        <p class="align-center">The contest winner will receive paid entry to the national flatpick contest at the <a href="https://wvfest.com" target="_blank">Walnut Valley Festival</a>, Winfield, KS – Sept. 14 – 18, 2016</p>
                        <ul class="Prizes">
                            <li class="Prizes__prize"><span class="Prizes__place">1st Place</span> <a class="Prizes__link" href="https://www.facebook.com/Craig-Southern-Guitars-162117127210699" target="_blank">Craig Southern</a> custom-made dreadnaught.</li>
                            <li class="Prizes__prize"><span class="Prizes__place">2nd Place</span> Blueridge dreadnaught guitar (Rosewood) from <a class="Prizes__link" href="http://www.fretnfiddle.com" target="_blank">Fret 'n Fiddle</a></li>
                            <li class="Prizes__prize"><span class="Prizes__place">3rd Place</span> Sigma OM (Rosewood) with K&amp;K pickup</li>
                        </ul>
                    </div>
                    <div class="grid-half align-center">
                        <h4 class="red">How to Enter</h4>
                        <br>
                        <p><span class="smaller">Entry fee is $10 paid at the time of registration via mail.</span></p>
                        <p><a modal tpl="rules" href="#">Click here</a> to read the official rules.</p>
                        <button modal tpl="register">Register Now</button>
                    </div>
                </div>
                <div class="HallOfFame">
                    <h4 class="HallOfFame__title">Past Winners</h4>
                    <ul class="HallOfFame__winners">
                        <li class="HallOfFame__winner blue"><span class="HallOfFame__year">2014</span> Allen Shadd</li>
                        <li class="HallOfFame__winner darkyellow"><span class="HallOfFame__year">2013</span> Matt Lindsey</li>
                        <li class="HallOfFame__winner orange"><span class="HallOfFame__year">2012</span> Ben Cockman</li>
                        <li class="HallOfFame__winner red"><span class="HallOfFame__year">2011</span> Adam Hager</li>
                    </ul>
                </div>
            </section>
            <hr>
            <section id="tickets-admission" class="grid-container">
                <h3>Tickets &amp; Admission</h3>
                <h4 class="blue">$15 or $25 Weekend</h4>
                <br><br>
                <p class="align-center red uppercase"><strong>12 &amp; under FREE/accompanied by an adult</strong></p>
                <p class="align-center red uppercase"><strong>No refunds</strong></p>
                <p class="align-center red uppercase"><strong>No Alcohol</strong></p>
                <p class="align-center red uppercase"><strong>Limited Concessions</strong></p>
            </section>
            <hr>
            <section id="contact-us" class="grid-container">
                <h3>Contact Us</h3>
                <h4>Kayce Gentry <a href="tel:3049271415">(304) 927-1415</a></h4>
                <br>
                <h4>June Kessinger <a href="tel:3045935650">(304) 593-5650</a></h4>
                <br>
            </section>
        </main>

        <hr>

        <footer class="Footer">
            <p class="align-center grey Footer__copyright">COPYRIGHT &copy; @{{ currentYear }} ROBIN KESSINGER FESTIVAL &amp; WORKSHOPS</p>
        </footer>
    </div>

    <script src="/app.js"></script>
</body>

</html>
