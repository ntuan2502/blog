<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/homepage/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('public/homepage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/audioplayer.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('public/homepage/css/style.css')}}">

    @yield('header')
</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{asset('public/homepage/img/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="/login">Đăng nhập</a></li>
                                            <li><a href="/register">Đăng ký</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_icon text-right">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('body')

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <div class="subscribe-from">
                                <form action="#">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                            <p class="sub_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Me
                            </h3>
                            <ul>
                                <li><a href="#">conbusi@support.com
                                    </a></li>
                                <li><a href="#">+10 873 672 6782
                                    </a></li>
                                <li><a href="#">600/D, Green road, Kings Garden NewYork-6732</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">tracks</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('public/homepage/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/popper.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/ajax-form.js')}}"></script>
    <script src="{{asset('public/homepage/js/waypoints.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/audioplayer.js')}}"></script>
    <script src="{{asset('public/homepage/js/scrollIt.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/wow.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/nice-select.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/plugins.js')}}"></script>
    <script src="{{asset('public/homepage/js/gijgo.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/slick.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('public/homepage/js/contact.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.form.js')}}"></script>
    <script src="{{asset('public/homepage/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/homepage/js/mail-script.js')}}"></script>

    <script src="{{asset('public/homepage/js/main.js')}}"></script>

    <script>
        $(function() {
            $('audio').audioPlayer({

            });
        });
    </script>

    @yield('footer')
</body>

</html>