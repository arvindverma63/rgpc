<!DOCTYPE html>
<html lang="zxx" class="no-js">

@include('components.head')

<body>
    @include('components.header')


    @include('components.slider')



    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Important Notice</h1>
                        <p>Explore our programs for a successful career in pharmacy.</p>
                    </div>
                </div>
            </div>
            <style>
                .responsive-img {
                    max-width: 100%;
                    height: auto;
                    display: block;
                    margin: 0 auto;
                }
            </style>

            <img src="{{ asset('banner.jpg') }}" class="responsive-img" alt="Responsive banner">

             <img src="{{ asset('banner2.jpg') }}" class="responsive-img" alt="Responsive banner">

        </div>
    </section>
    <!-- End popular-course Area -->

    <!-- Start search-course Area -->
    <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left">
                    <h1 class="text-white">
                        Admission Open 2025-2026
                    </h1>
                    <p>
                        Enroll now for B. Pharma and D. Pharma with special discounts and scholarships.
                    </p>
                    <div class="row details-content">
                        <div class="col single-detials">
                            <span class="lnr lnr-graduation-hat"></span>
                            <a href="#">
                                <h4>Expert Instructors</h4>
                            </a>
                            <p>
                                Learn from highly qualified faculty.
                            </p>
                        </div>
                        <div class="col single-detials">
                            <span class="lnr lnr-license"></span>
                            <a href="#">
                                <h4>Certification</h4>
                            </a>
                            <p>
                                Recognized degrees from AKTU and PCI.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 search-course-right section-gap">
                    <form class="form-wrap" action="#">
                        <h4 class="text-white pb-20 text-center mb-30">Apply Now</h4>
                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                        <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                        <div class="form-select" id="service-select">
                            <select>
                                <option datd-display="">Choose Course</option>
                                <option value="1">B. Pharma</option>
                                <option value="2">D. Pharma</option>
                            </select>
                        </div>
                        <button class="primary-btn text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End search-course Area -->

    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Upcoming Events of our Institute</h1>
                        <p>Stay updated with our latest events and activities.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-upcoming-event-carusel">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>15th April, 2025</p>
                            <a href="#">
                                <h4>Annual Pharmacy Seminar</h4>
                            </a>
                            <p>
                                A seminar focusing on the latest trends in pharmaceutical sciences.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>20th April, 2025</p>
                            <a href="#">
                                <h4>National Pharmacy Week</h4>
                            </a>
                            <p>
                                Celebrating the contributions of pharmacists to healthcare.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th April, 2025</p>
                            <a href="#">
                                <h4>Industrial Tour</h4>
                            </a>
                            <p>
                                An educational tour to pharmaceutical industries.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>30th April, 2025</p>
                            <a href="#">
                                <h4>Sports Meet</h4>
                            </a>
                            <p>
                                Annual sports event for students and faculty.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>5th May, 2025</p>
                            <a href="#">
                                <h4>Tree Plantation Drive</h4>
                            </a>
                            <p>
                                An initiative for environmental sustainability.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>10th May, 2025</p>
                            <a href="#">
                                <h4>Swachh Bharat Abhiyan</h4>
                            </a>
                            <p>
                                A cleanliness drive to promote a healthier campus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event Area -->

    <!-- Start review Area -->
    <section class="review-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 1</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Great learning environment with excellent faculty support.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 2</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Well-equipped labs and good scholarship opportunities.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 3</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Excellent campus facilities and supportive staff.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 4</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Great experience with practical training sessions.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 5</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Highly recommend for pharmacy education.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 6</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Amazing support for career development programs.
                        </p>
                    </div>
                    <div class="single-review item">
                        <img src="img/r1.png" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 7</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Excellent facilities and learning opportunities.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Student 8</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Great campus environment and resources.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->

    <!-- Start cta-one Area -->
    <section class="cta-one-area relative section-gap">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row justify-content-center">
                <div class="wrap">
                    <h1 class="text-white">Become a Faculty Member</h1>
                    <p>
                        Join our team to contribute to quality pharmaceutical education.
                    </p>
                    <a class="primary-btn wh" href="#">Apply for the post</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End cta-one Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest Updates from our Institute</h1>
                        <p>Stay informed with our latest news and announcements.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <p class="meta">15 April, 2025 | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>Admission Open 2025-2026</h5>
                    </a>
                    <p>
                        Details about the admission process for the upcoming academic year.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <p class="meta">15 April, 2025 | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>New Lab Facilities</h5>
                    </a>
                    <p>
                        Introduction of advanced laboratory equipment for students.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <p class="meta">15 April, 2025 | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>Scholarship Opportunities</h5>
                    </a>
                    <p>
                        Information on available scholarships for students.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b4.jpg" alt="">
                    </div>
                    <p class="meta">15 April, 2025 | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>Campus Development</h5>
                    </a>
                    <p>
                        Updates on the ongoing campus improvement projects.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Know More About us?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="/about.php">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End cta-two Area -->
    @include('components.footer')
</body>

</html>
