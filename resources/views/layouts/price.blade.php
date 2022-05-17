<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdwagSolutions | Pricing Table</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/font-awesome.')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor/green-audio-player.min.css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/assets/css/app.css')}}">



</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
       @include('layouts.header')
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Pricing</li>
                    </ul>
                    <h1 class="title h2">Pricing</h1>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="assets/media/others/bubble-9.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="assets/media/others/bubble-11.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=        Pricing Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">Pricing Plan</span>
                    <h2 class="title">Find the Right Plan.</h2>
                    <p>Flexible pricing options for freelancers <br> and design teams.</p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link active" id="yearly-plan-btn" type="button">Billed yearly</button>
                        </li>
                        <li class="nav-item billed-check-box">
                            <input type="checkbox" id="pricing-checkbox">
                            <label for="pricing-checkbox"></label>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="monthly-plan-btn" type="button">
                                Billed monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active pricing-borderd">
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pricing-header">
                                <h3 class="title">Professional</h3>
                                <span class="subtitle">A beautiful, simple website</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$119.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$19.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">Small Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$219.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$29.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>50 Pages Responsive Website</li>
                                    <li>Unlimited PPC Campaigns</li>
                                    <li>Unlimited SEO Keywords</li>
                                    <li>Unlimited Facebook Camplaigns</li>
                                    <li>Unlimited Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">Large Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$559.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$59.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-2"><img src="assets/media/others/bubble-4.png" alt="shape"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=           Faq Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-equal bg-color-light faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Pricing Plan</span>
                            <h3 class="title">Frequently asked questions</h3>
                            <p>Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            Nunc rhoncus magna ut venenatis feugiat.
                                        </button>
                                    </h6>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                            Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                            Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                            Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-7.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-4.png" alt="line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img src="assets/media/others/pc.png" alt="Computer">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img src="assets/media/others/comment.png" alt="Comments">
                            </li>
                            <li class="shape shape-2" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <img src="assets/media/others/keyboard.png" alt="Comments">
                            </li>
                            <li class="shape shape-3" data-sal="slide-right" data-sal-duration="800" data-sal-delay="300">
                                <img src="assets/media/others/mouse.png" alt="Comments">
                            </li>
                            <li class="shape shape-4" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img src="assets/media/others/bell-icon.png" alt="Comments">
                            </li>
                            <li class="shape shape-5" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="200">
                                <img src="assets/media/others/chat-bot.png" alt="Comments">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="assets/media/others/bubble-12.png" alt="Comments"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-13.png" alt="Comments"></li>
                <li class="shape shape-4"><img src="assets/media/others/bubble-14.png" alt="Comments"></li>
                <li class="shape shape-5"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-6"><img src="assets/media/others/bubble-15.png" alt="Comments"></li>
                <li class="shape shape-7"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        @include('layouts.footer')

        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="../../../index.htm"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="../../../index-1.htm"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="../../../index-7.htm"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="../../../index-3.htm"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('public/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/counterup.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/sal.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/jquery.style.switcher.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/tilt.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/green-audio-player.min.js')}}"></script>
    <script src="{{asset('public/assets/js/vendor/jquery.nav.js')}}"></script>

    <!-- Site Scripts -->
    <script src="{{asset('public/assets/js/app.js')}}"></script>
</body>

</html>
