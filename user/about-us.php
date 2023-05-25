<?php
include 'inc/header.php'
?>

<!-- offcanvas Start -->          
<div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Offcanvas</h5>
                <button class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                
                <div class="contact-link">
                    <div class="info_box phone">
                        Call us : <span>(012) 800 456 789</span>
                    </div>
                    <div class="info_box email">
                        email :  <a href="mailto:demo@example.com">demo@example.com</a>
                    </div>
                </div>

                <div class="offcanvas-accordion accordion" id="accordionExample">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"><i class="first-icon fa fa-user-circle"></i> My Account</button>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li><a href="login.html">My Account</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="register.html">Sign in</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">$ USD</button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#">€ EUR</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"><img src="assets/images/icons/en.webp" alt="language-selector">English</button>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li>
                                    <a href="#">
                                        <img src="assets/images/icons/en.webp" alt="French">
                                        <span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/icons/fr.webp" alt="French">
                                        <span>French</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <nav class="canvas-menu">
                    <ul>
                        <li class="current"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Shop 1</a></li>
                                <li><a href="index-2.html">Home Shop 2</a></li>
                                <li><a href="index-3.html">Home Shop 3</a></li>
                                <li><a href="index-4.html">Home Shop 4</a></li>
                                <li><a href="index-5.html">Home Shop 5</a></li>
                                <li><a href="index-6.html">Home Shop 6</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                        <li><a href="#">Features </a>
                            <ul class="mega-sub-menu">
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="faq.html">Frequently Questins</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                        <li><a href="blog.html">Sidebar right</a></li>
                                        <li><a href="single-blog.html">Image Format</a></li>
                                        <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                        <li><a href="single-blog-audio.html">Audio Format</a></li>
                                        <li><a href="single-blog-video.html">Video Format</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-list.html">Shop List View</a></li>
                                        <li><a href="shop-right.html">Shop Right</a></li>
                                        <li><a href="single-product.html">Shop Single</a></li>
                                        <li><a href="cart.html">Shoping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="social_follow">
                    <ul>
                        <li class="facebook"><a href="#"></a></li>
                        <li class="twitter"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="instagram"><a href="#"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- offcanvas END -->

        <!-- top breadcrumb -->
        <div class="top_breadcrumb">                 
            <div class="breadcrumb_container ">
                <div class="container">
                    <nav data-depth="3" class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span>About Us</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
        <!-- top breadcrumb end -->

        <!-- About page area -->
        <div class="about-page-area">

            <div class="about__us_page_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner_h2__left_image">
                                <img alt="" src="assets/images/banner/about-us-img1.webp">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner_h2_Right_text">
                                <div class="wpb_wrapper">
                                    <h3>WE CREATE <br> HTML TEMPLATES.</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                    facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore
                                    te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                    placerat facer possim assum. Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem.</p>
                                    <p class="text-center">
                                        <a href="#"> view work </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="funfact-area bg--white" id="funfact-area">
                <div class="funfacts">
                    <div class="container">
                        <div class="row g-0">

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="assets/images/icon-img/about-us-icon1.webp" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">2169</span>
                                        </h1>
                                        <h5>HAPPY CUSTOMERS</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="assets/images/icon-img/about-us-icon2.webp" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">369</span>
                                        </h1>
                                            <h5>AWARDS WINNED</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="assets/images/icon-img/about-us-icon3.webp" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">689</span>
                                        </h1>
                                        <h5>HOURS WORKED</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="assets/images/icon-img/about-us-icon4.webp" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">2169</span>
                                        </h1>
                                        <h5>COMPLETE PROJECTS</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="abou_skrill__area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="skrill_here">
                                <h3>WE HAVE SKILLS TO SHOW</h3>
                                <div class="ht-single-about">
                                    <div class="skill-bar">
                                        <div class="skill-bar-item">
                                            <span>WEB DESIGN</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width80" data-progress="80%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-bar-item">
                                            <span>PHP &amp; JAVASCRIPT</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width90" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-bar-item">
                                            <span>HTML5 &amp; CSS3</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width70" data-progress="70%"  data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-bar-item">
                                            <span>wordpress</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width95" data-progress="95%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">95%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner_h2__left_image lft_to_right">
                                <img alt="" src="assets/images/banner/about-us-img2.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <?php
        include 'inc/footer.php'
        ?>