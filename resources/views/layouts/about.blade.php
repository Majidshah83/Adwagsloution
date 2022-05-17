<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdwagSolutions | About Us</title>
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
                    <h1 class="title h2">One of the fastest growing agency</h1>
                    <p>We design and develop web and mobile applications for our clients worldwide.</p>
                </div>
                <div class="banner-thumbnail thumbnail-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img src="{{asset('public/assets/media/banner/banner-thumb-3.png')}}" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{asset('public/assets/media/others/bubble-9.png')}}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{asset('public/assets/media/others/bubble-22.png')}}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{asset('public/assets/media/others/line-4.png')}}" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="{{asset('public/assets/media/others/case-study-4.png')}}" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Who we are</span>
                                <h2 class="title">Building software for world changers</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count">10</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Years on the market</span>
                                </div>
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count">1500</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Projects delivered so far</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=      About  Quality Area Start    =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
            <div class="container">
                <div class="section-heading heading-light-left mb--100">
                    <span class="subtitle">Our Valus</span>
                    <h2 class="title">Why should you work with us?</h2>
                    <p class="opacity-50">Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-quality active">
                            <h3 class="sl-number">1</h3>
                            <h5 class="title">Exceed clients’ and colleagues’ expectations</h5>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum
                                eros. Curabitur tortor ipsum, imperdiet eget odio
                                ac, faucibus ultricies nisl. Maecenas
                                scelerisque dignissim elit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">2</h3>
                            <h5 class="title">Take ownership and question the status quo in a constructive manner</h5>
                            <p>Nulla facilisi. Vestibulum vel urna eget magna condimentum faucibus. Sed arcu mi, semper sed suscipit vel, rhoncus vel justo.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">3</h3>
                            <h5 class="title">Be brave, curious and experiment – learn from all successes and failures</h5>
                            <p>Quisque aliquet quis est in faucibus. Aenean eget lorem ac risus placerat convallis eget a eros. Suspendisse dignissim ultrices tellus, id placerat mauris lacinia a.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">4</h3>
                            <h5 class="title">Act in a way that makes all of us proud</h5>
                            <p>Proin dignissim facilisis tortor a mattis. Morbi non maximus nunc, ut mattis tellus. In hac habitasse platea dictumst. Mauris viverra enim tellus, vel ultrices dolor aliquam non.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">5</h3>
                            <h5 class="title">Build an inclusive, transparent and socially responsible culture</h5>
                            <p>Maecenas eros sapien, egestas at elit nec, eleifend sagittis orci.</p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="assets/media/others/circle-1.png" alt="Circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-3.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-5.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=       About Team  Area Start      =-->
        <!--=====================================-->
        <section class="section-padding-equal">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                        <div class="about-team">
                            <div class="thumbnail">
                                <img src="assets/media/about/about-2.png" alt="thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                        <div class="about-team">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Our Team</span>
                                <h2>Alone we can do so little; together we can do so much.</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero.</p>
                                <a href="team.html" class="axil-btn btn-large btn-fill-primary">Our Team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light pb--70">
            <div class="container">
                <div class="section-heading mb--90">
                    <span class="subtitle">Process</span>
                    <h2 class="title">Our logo design process</h2>
                    <p>Our comprehensive logo design strategy ensures a perfectly crafted logo for your business.</p>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-1.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step One</span>
                        <h3 class="title">Discover</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-2.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Two</span>
                        <h3 class="title">Prototype</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-3.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Three</span>
                        <h3 class="title">Test</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-4.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step four</span>
                        <h3 class="title">Build</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
            </div>
            <ul class="shape-group-17 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-24.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-23.png" alt="Bubble"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-4"><img src="assets/media/others/line-5.png" alt="Line"></li>
                <li class="shape shape-5"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-6"><img src="assets/media/others/line-5.png" alt="Line"></li>
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
