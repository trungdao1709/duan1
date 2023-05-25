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
                                <span>Contact Us</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
        <!-- top breadcrumb end -->

        <!-- Contact page content -->
        <div class="contact-page-area">

            <!-- contact page map -->
            <div class="contact-page-map">
                <!-- Google Map Start -->
                <div class="container">
                    <div id="map"></div>
                </div>
                <!-- Google Map End -->
            </div>
            <!-- contact page map -->

            <!-- contact form area -->
            <div class="contact-form-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form-inner">
                                <h2>TELL US YOUR PROJECT</h2>
                                <form action="https://htmldemo.net/harosa/harosa-v2/mail.php" method="get">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="First name*" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name*" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Email*" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Subject*" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                aria-invalid="false" placeholder="Message *" required></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit">
                                        <input type="submit" value="Send Email" class="wpcf7-form-control wpcf7-submit button">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-address-area">
                                <h2>CONTACT US</h2>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                                    notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                                <ul>
                                    <li>
                                        <i class="fa fa-fax">&nbsp;</i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                    <li>
                                        <i class="fa fa-phone">&nbsp;</i> Info@roadthemes.com</li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>&nbsp;</i> 0(1234) 567 890</li>
                                </ul>
                                <h3>
                                    <strong>Working hours</strong>
                                </h3>
                                <p>
                                    <strong>Monday – Saturday</strong>: &nbsp;08AM – 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact form area end -->

        </div>
        <!-- Contact page content end -->
        
        <?php
        include 'inc/footer.php'
        ?>