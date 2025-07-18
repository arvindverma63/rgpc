<style>
    .active-link{
        padding: 2px;
        background-color: #fc9928;
    }
</style>
<header id="header" id="home" style="background-color: rgba(0, 0, 0, 0.308); color: black;">
    <div class="header-top" style="background-color: #fc9928">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+8171135163"><span class="lnr lnr-phone-handset"></span> <span class="text">+8171135163</span></a>
                    <a href="mailto:gicpharmacy24@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">gicpharmacy24@gmail.com</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" style="background-color: rgba(255, 255, 255, 0.082);">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ route('index') }}"><img src="{{ asset('img/logo1.png') }}" height="70px" alt="Gurudev Innovative College of Pharmacy" title="Gurudev Innovative College of Pharmacy" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="{{ request()->routeIs('index') ? 'active-link' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                    <li class="menu-has-children"><a href="{{ route('about') }}">About Us</a>
                        <ul class="dropdown" style="right: auto; color: black;">
                            <li><a href="{{ route('about') }}">About Institute</a></li>
                            <li><a href="{{ route('about-management') }}">Management</a></li>
                            <li><a href="{{ route('about-director-message') }}">Director Message</a></li>
                            <li><a href="{{ route('about-vision-mission') }}">Vision & Mission</a></li>
                            <li><a href="#">Photo Gallery</a></li>
                            <li><a href="#">Approvals Details<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="dropdown" style="display: none;">
                                    <li><a href="#">All Approval Letters</a></li>
                                    <li><a href="#">SIF 2019-20, 2020-21 & 2021-22</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-has-children"><a href="{{ route('admission-procedure') }}">Admissions</a>
                        <ul class="dropdown" style="right: auto;">
                            <li><a href="{{ route('admission-procedure') }}">Admission Procedure</a></li>
                            <li><a href="{{ route('registration-form') }}">Registration Form</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="{{ route('course-bpharma') }}">Courses</a>
                        <ul class="dropdown" style="right: auto;">
                            <li><a href="{{ route('course-dpharma') }}">D.Pharma (3447)</a></li>
                            <li><a href="{{ route('course-bpharma') }}">B.Pharma </a></li>
                            <li><a href="{{ route('fee-structure') }}">Fee Structure</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->routeIs('fee-structure') ? 'active-link' : '' }}"><a href="{{ route('fee-structure') }}">Fee Structure</a></li>
                    <li class="menu-has-children"><a href="{{ route('facility-computer-lab') }}">Facilities</a>
                        <ul class="dropdown" style="right: auto;">
                            <li><a href="{{ route('facility-wifi-campus') }}">Wi-Fi Campus</a></li>
                            <li><a href="{{ route('facility-library') }}">Library</a></li>
                            <li><a href="{{ route('facility-computer-lab') }}">Computer Lab</a></li>
                            <li><a href="{{ route('museum') }}">Museum</a></li>
                            <li><a href="{{ route('seminar-hall') }}">Seminar Hall</a></li>
                            <li><a href="{{ route('medical-garden') }}">Medicinal Garden</a></li>
                            <li><a href="{{ route('first-aid-treatment') }}">First Aid Treatment</a></li>
                            <li><a href="{{ route('sports-field') }}">Sports Field</a></li>
                            <li><a href="{{ route('canteen') }}">Canteen</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="#">Students Data</a>
                        <ul class="dropdown" style="right: 0px;">
                            <li><a href="{{ route('dpharma-1st-year') }}">D.Pharma 1st Year Session 2019-20 & 2020-21</a></li>
                            <li><a href="{{ route('bpharma-1st-year') }}">B.Pharma 1st Year Session 2019-20 & 2020-21</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->routeIs('contact-us') ? 'active-link' : '' }}"><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li class="scrollable-fix"></li>
                    <li class="scrollable-fix"></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
