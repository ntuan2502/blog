<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Viral Story - Viral News Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('public/homepage/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/homepage/style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Breaking News Area -->
                            <div class="top-breaking-news-area">
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                        <li><a href="#">Welcome to Colorlib Family.</a></li>
                                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Social Info Area-->
                            <div class="top-social-info-area">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="viral-news-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="{{asset('public/homepage/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="catagory.html">Top 10</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagory.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Article</a></li>
                                            <li><a href="quize-article.html">Quize Article</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="catagory.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Article</a></li>
                                                    <li><a href="quize-article.html">Quize Article</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">Funny</a></li>
                                    <li><a href="index.html">Videos</a></li>
                                    <li><a href="index.html">Don’t Miss</a></li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Search Button -->
                                <div class="search-btn">
                                    <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Search Form -->
                                <div class="viral-search-form">
                                    <form id="search" action="#" method="get">
                                        <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Video Post Button -->
                                <div class="add-post-button">
                                    <a href="#" class="btn add-post-btn">Add Post</a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slides owl-carousel">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('public/homepage/img/bg-img/1.jpg')}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Man Rescued Injured Bird, And Now He Probably Wishes He Hadn’t</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">2 Days Ago</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('public/homepage/img/bg-img/2.jpg')}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>This 76-year-old Grandmother Lives Alone In Siberia And Skates</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">3 Days Ago</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('public/homepage/img/bg-img/3.jpg')}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Mother Saves Her Daughter During A Talent Show, And Now Everyone Is Crying</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">2 Days Ago</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Welcome Slide Area Start ##### -->
    <div class="welcome-slide-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-slides owl-carousel">

                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="{{asset('public/homepage/img/bg-img/bg1.jpg')}}" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="post-title">10 Tips to travel in style for less</a>
                                            <p>1 day ago</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{asset('public/homepage/img/bg-img/bg2.jpg')}}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="tag tag-2">Celebs</a>
                                                <a href="#" class="post-title">Superstar spoted with new boyfriend</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{asset('public/homepage/img/bg-img/bg3.jpg')}}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                                <a href="#" class="tag tag-3">4 Fun</a>
                                                <a href="#" class="post-title">Festival looks for all the party people</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="{{asset('public/homepage/img/bg-img/bg1.jpg')}}" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="post-title">10 Tips to travel in style for less</a>
                                            <p>1 day ago</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{asset('public/homepage/img/bg-img/bg2.jpg')}}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="tag tag-2">Celebs</a>
                                                <a href="#" class="post-title">Superstar spoted with new boyfriend</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{asset('public/homepage/img/bg-img/bg3.jpg')}}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                                <a href="#" class="tag tag-3">4 Fun</a>
                                                <a href="#" class="post-title">Festival looks for all the party people</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Slide Area End ##### -->

    <!-- ##### Blog Post Area Start ##### -->
    <div class="viral-story-blog-post section-padding-0-50">
        <div class="container">
            <div class="row">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/7.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/8.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory cat-3">4 Fun</a>
                                    <a href="#" class="post-title">
                                        <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/9.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/10.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory cat-3">4 Fun</a>
                                    <a href="#" class="post-title">
                                        <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/11.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory cat-2">Travel</a>
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/12.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory cat-4">featured</a>
                                    <a href="#" class="post-title">
                                        <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/13.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/14.jpg')}}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-catagory cat-3">4 Fun</a>
                                    <a href="#" class="post-title">
                                        <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="viral-news-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                                        <li class="page-item"><a class="page-link" href="#">05</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-70">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Trending Articles Widget -->
                        <div class="treading-articles-widget mb-70">
                            <h4>Trending Articles</h4>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/15.jpg')}}" alt=""></a>
                                    <span class="serial-number">01.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/16.jpg')}}" alt=""></a>
                                    <span class="serial-number">02.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Artist Recreates People’s Childhood Memories With Realistic Dioramas</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/17.jpg')}}" alt=""></a>
                                    <span class="serial-number">03.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Artist Recreates People’s Childhood Memories With Realistic Dioramas</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget mb-70">
                            <a href="#"><img src="{{asset('public/homepage/img/bg-img/add.png')}}" alt=""></a>
                        </div>

                        <!-- Latest Comments -->
                        <div class="latest-comments-widget">
                            <h4>Latest Comments</h4>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="{{asset('public/homepage/img/bg-img/t1.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Jamie Smith</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="{{asset('public/homepage/img/bg-img/t2.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Tania Heffner</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="{{asset('public/homepage/img/bg-img/t3.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Sandy Doe</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Post Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('public/homepage/img/core-img/logo.png')}}" alt=""></a>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <ul>
                                    <li class="active"><a href="#">Top 10</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Funny</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Celebs</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Submit a video</a></li>
                                    <li><a href="#">Don’tMiss</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Latest articles</h4>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/4.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/5.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Sed a elit euismod augue semper congue sit amet ac.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('public/homepage/img/bg-img/6.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="{{asset('public/homepage/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('public/homepage/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/homepage/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('public/homepage/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('public/homepage/js/active.js')}}"></script>
</body>

</html>