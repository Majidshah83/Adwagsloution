<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdwagSolutions | Blog</title>
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
                        <li class="active">Blog</li>
                    </ul>
                    <h1 class="title h2">Blog</h1>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100"><img src="assets/media/others/bubble-9.png" alt="Bubble"></li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200"><img src="assets/media/others/bubble-10.png" alt="Bubble"></li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><img src="assets/media/others/line-4.png" alt="Line"></li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->
        <section class="section-padding-equal">
            <div class="container">
                <div class="row row-40">
                    <div class="col-lg-8">
                        <div class="blog-grid">
                            <h3 class="title"><a href="single-blog.html">How to Increase Your ROI Through scientific SEM?</a></h3>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/media/blog/author-1.png" alt="Blog Author">
                                </div>
                                <div class="info">
                                    <h6 class="author-name">Theresa Underwood</h6>
                                    <ul class="blog-meta list-unstyled">
                                        <li>Sep 10, 2021</li>
                                        <li>9 min to read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="assets/media/blog/blog-3.png" alt="Blog"></a>
                            </div>
                            <p>Want to know the one thing that every successful digital marketer does first to ensure they get the biggest return on their marketing budget? It’s simple: goal-setting. This is an absolutely essential practice for any digital marketer who knows how to execute their campaigns</p>
                            <a href="single-blog.html" class="axil-btn btn-borderd btn-large">Read More</a>
                        </div>
                        <div class="blog-grid blog-without-thumb">
                            <h3 class="title"><a href="single-blog.html">Twice Profit Than Before You Ever Got</a></h3>
                            <div class="author">
                                <div class="info">
                                    <h6 class="author-name">Theresa Underwood</h6>
                                    <ul class="blog-meta list-unstyled">
                                        <li>Sep 9, 2021</li>
                                        <li>15 min to read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid">
                            <h3 class="title"><a href="single-blog.html">Cloud Hosting Growing Faster Ever</a></h3>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/media/blog/author-2.png" alt="Blog Author">
                                </div>
                                <div class="info">
                                    <h6 class="author-name">Theresa Underwood</h6>
                                    <ul class="blog-meta list-unstyled">
                                        <li>Sep 7, 2021</li>
                                        <li>5 min to read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="assets/media/blog/blog-4.png" alt="Blog"></a>
                            </div>
                            <p>Want to know the one thing that every successful digital marketer does first to ensure they get the biggest return on their marketing budget? It’s simple: goal-setting. This is an absolutely essential practice for any digital marketer who knows how to execute their campaigns...</p>
                            <a href="single-blog.html" class="axil-btn btn-borderd btn-large">Read More</a>
                        </div>
                        <div class="blog-grid blog-without-thumb">
                            <blockquote>
                                <h5 class="title"><a href="single-blog-quote.html">“ The goal of a designer is to listen, observe, understand, sympathize, empathize, synthesize, and glean insights that enable him or her to make the invisible visible ”</a></h5>
                            </blockquote>
                            <div class="author">
                                <div class="info">
                                    <h6 class="author-name">Theresa Underwood</h6>
                                    <ul class="blog-meta list-unstyled">
                                        <li>Sep 12, 2021</li>
                                        <li>10 min to read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid blog-thumb-slide">
                            <h3 class="title"><a href="single-blog-gallery.html">eCommerce Marketing Statistics You Should Know in 2021.</a></h3>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/media/blog/author-2.png" alt="Blog Author">
                                </div>
                                <div class="info">
                                    <h6 class="author-name">Theresa Underwood</h6>
                                    <ul class="blog-meta list-unstyled">
                                        <li>Sep 15, 2021</li>
                                        <li>8 min to read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <div class="slick-slider slick-arrow-nav slick-dot-nav" data-slick='{"infinite": true, "autoplay": true, "arrows": true, "dots": true, "slidesToShow": 1}'>
                                    <div class="slick-slide">
                                        <a href="single-blog.html"><img src="assets/media/blog/blog-3.png" alt="Blog"></a>
                                    </div>
                                    <div class="slick-slide">
                                        <a href="single-blog.html"><img src="assets/media/blog/blog-4.png" alt="Blog"></a>
                                    </div>
                                </div>
                            </div>
                            <p>Above all, think of life as a prototype. We can conduct experiments, make discoveries, and change our perspectives. We can look for opportunities to turn processes into projects that have tangible outcomes. We can learn how to take joy in the things we create whether they take the form of a fleeting experience or an heirloom that will last for generations.</p>
                            <a href="single-blog-gallery.html" class="axil-btn btn-borderd btn-large">Read More</a>
                        </div>
                        <div class="blog-grid mb-0">
                            <h3 class="title"><a href="single-blog-video.html">Follow your own design process, whatever gets you to the outcome.</a></h3>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/media/blog/author-2.png" alt="Blog Author">
                                </div>
                                <div class="info">
                                    <h6 class="author-name">Theresa Underwood</h6>
                                    <ul class="blog-meta list-unstyled">
                                        <li>Sep 10, 2021</li>
                                        <li>9 min to read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="single-blog-video.html"><img src="assets/media/blog/blog-4.png" alt="Blog"></a>
                                <div class="popup-video">
                                    <a href="../../../watch.html?v=1iIZeIy7TqM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <p>Above all, think of life as a prototype. We can conduct experiments, make discoveries, and change our perspectives. We can look for opportunities to turn processes into projects that have tangible outcomes. We can learn how to take joy in the things we create whether they take the form of a fleeting experience or an heirloom that will last for generations.</p>
                            <a href="single-blog-video.html" class="axil-btn btn-borderd btn-large">Read More</a>
                        </div>
                        <div class="pagination">
                            <ul>
                                <li><a class="prev page-numbers" href="#"><i class="fal fa-arrow-left"></i></a></li>
                                <li><a href="#" class="page-numbers current">1</a></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="page-numbers" href="#">5</a></li>
                                <li><a class="next page-numbers" href="#"><i class="fal fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="axil-sidebar">
                            <div class="widget widget-search">
                                <h4 class="widget-title">Search</h4>
                                <form action="#" class="blog-search">
                                    <input type="text" placeholder="Search…">
                                    <button class="search-button"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="category-list list-unstyled">
                                    <li><a href="blog-category.html">Agency news</a></li>
                                    <li><a href="blog-category.html">Digital Marketing</a></li>
                                    <li><a href="blog-category.html">Information technology</a></li>
                                    <li><a href="blog-category.html">New ideas</a></li>
                                    <li><a href="blog-category.html">Uncategorized</a></li>
                                    <li><a href="blog-category.html">Marketing &amp; branding</a></li>
                                </ul>
                            </div>
                            <div class="widget widge-social-share">
                                <div class="blog-share">
                                    <h5 class="title">Follow:</h5>
                                    <ul class="social-list list-unstyled">
                                        <li><a href="../../../index.htm"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="../../../index-1.htm"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="../../../index-4.htm"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="../../../index-3.htm"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="../../../index-4.htm"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="../../../index-8.htm"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget widget-recent-post">
                                <h4 class="widget-title">Recent post</h4>
                                <div class="post-list-wrap">
                                    <div class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="assets/media/blog/blog-5.png" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="single-blog.html">Take ownership and question the status quo in.</a></h6>
                                            <ul class="blog-meta list-unstyled">
                                                <li>Sep 10, 2021</li>
                                                <li>9 min to read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="assets/media/blog/blog-6.png" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="single-blog.html">Take ownership and question the status quo in.</a></h6>
                                            <ul class="blog-meta list-unstyled">
                                                <li>Sep 15, 2021</li>
                                                <li>15 min to read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="assets/media/blog/blog-7.png" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="single-blog.html">Take ownership and question the status quo in.</a></h6>
                                            <ul class="blog-meta list-unstyled">
                                                <li>Sep 5, 2021</li>
                                                <li>8 min to read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-banner-ad">
                                <a href="#">
                                    <img src="assets/media/banner/widget-banner.png" alt="banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
