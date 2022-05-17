<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdwagSolutions | Team</title>
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
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">Meet talent &amp; experience</h1>
                    <p>Grow your business online by awesomely designed mobile apps that fits all types.</p>
                </div>
                <div class="banner-thumbnail thumbnail-2" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="{{asset('public/assets/media/banner/banner-thumb-2.png')}}" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{asset('public/assets/media/others/bubble-9.png')}}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{asset('public/assets/media/others/bubble-21.png')}}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{asset('public/assets/media/others/line-4.png')}}" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       Experts  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding expert-counterup-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Experts in field</span>
                            <h2>What makes us special?</h2>
                            <p class="mb--50">In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                            <a href="contact.html" class="axil-btn btn-large btn-fill-primary">Careers</a>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="row" id="no-equal-gallery">
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                                <div class="counterup-progress counterup-style-2 active">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-10.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-7.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">15</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Years of operation</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 mt--90 mt_md--0 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-11.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-8.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">360</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Projects deliverd</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-12.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-9.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">600</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Specialist</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/apple-black.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/apple.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">64</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Years of operation</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=           Team  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark pb--70 pb_lg--20 pb_md--0">
            <div class="container">
                <div class="section-heading heading-light">
                    <span class="subtitle">Our valus</span>
                    <h2 class="title mb--50">Meet The Team</h2>
                    <p>Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid active">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="{{asset('public/assets/media/team/team-1.png')}}" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Savannah Nguyen</a></h4>
                                <span class="designation">Communications</span>
                                <span class="designation">Strategist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-2.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Jerome Bell</a></h4>
                                <span class="designation">Lead Research</span>
                                <span class="designation">Producer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-3.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Darlene Robertson</a></h4>
                                <span class="designation">Implementation</span>
                                <span class="designation">Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-4.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Marvin McKinney</a></h4>
                                <span class="designation">Forward Interactions</span>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-5.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Ralph Edwards</a></h4>
                                <span class="designation">Communications</span>
                                <span class="designation">Strategist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-6.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Kathryn Murphy</a></h4>
                                <span class="designation">Lead Research</span>
                                <span class="designation">Producer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-7.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Jane Cooper</a></h4>
                                <span class="designation">Implementation</span>
                                <span class="designation">Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-8.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Cody Fisher</a></h4>
                                <span class="designation">Forward Interactions</span>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="{{asset('public/assets/media/others/circle-1.png')}}" alt="Circle"></li>
                <li class="shape shape-2"><img src="{{asset('public/assets/media/others/line-3.png')}}" alt="Circle"></li>
                <li class="shape shape-3"><img src="{{asset('public/assets/media/others/bubble-5.png')}}" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=          About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding-equal">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">Experts in field</span>
                    <h2 class="title">Design startup <br> movement</h2>
                </div>
                <div class="about-expert">
                    <div class="thumbnail">
                        <img src="assets/media/about/about-1.png" alt="Thumbnail">
                        <div class="popup-video">
                            <a href="../../../watch.html?v=1iIZeIy7TqM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <ul class="frame-shape">
                        <li class="shape shape-1"><img src="assets/media/about/frame-1.png" alt="Frame"></li>
                        <li class="shape shape-2"><img src="assets/media/about/frame-2.png" alt="Frame"></li>
                    </ul>
                </div>
            </div>
            <ul class="shape-group-16 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
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
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/counterup.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/tilt.js"></script>
    <script src="assets/js/vendor/green-audio-player.min.js"></script>
    <script src="assets/js/vendor/jquery.nav.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>
