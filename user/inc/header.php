<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/harosa/harosa-v2/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 14:22:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harosa || Home 6</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css-plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/css-plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/css-plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/css-plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/css-plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/css-plugins/nivo-slider.css">
    <link rel="stylesheet" href="assets/css/css-plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/css-plugins/slick.css">
    <link rel="stylesheet" href="assets/css/css-plugins/slick-theme.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/colors.css">

</head>
<style>
    .cmt {
        width: 1000px;
        margin-left: 273px;
    }
    .btn_submit {
        background-color: white;
        border: 1px solid #A89842;
        border-radius: 10px;
        padding: 15px 30px;
        color: #A89842;
        font-size: 16px;

    }

    .btn_submit:hover {
        background-color: #A89842;
        border: 1px solid #A89842;
        border-radius: 10px;
        padding: 15px 30px;
        background-color: #A89842;
        color: #fff;
        font-size: 16px;

    }
</style>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="wrapper home-one home-six">

        <!-- HEADER AREA START -->
        <header class="header-area">

            <!-- Header top area start -->
            <div class="header-top-area d-none d-lg-block">
                <div class="container">
                    <div class="header-top-wrapper">
                        <div class="top-bar-left">
                            <div class="contact-link">
                                <div class="info_box phone">
                                    Call us : <span>0906104769</span>
                                </div>
                                <div class="info_box email">
                                    email : <a href="mailto:demo@example.com">nhom9ne@gmail.com</a>
                                </div>
                            </div>
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
                        <div class="topbar-nav">
                            <!-- my account -->

                            <div class="dropdown menu-my-account-container">
                                <button data-bs-toggle="dropdown">
                                    <i class="first-icon fa fa-user-circle"></i> Tài khoản của tôi <i class="ion-ios-arrow-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <li><a href="../user/my_account.php">Tài khoản của tôi</a></li>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <li><a href="../user/checkout.php">Thủ tục thanh toán
                                            </a></li>
                                    <?php } ?>
                                    <?php if (!isset($_SESSION['user'])) { ?>
                                        <li><a href="login.php">Đăng nhập</a></li>
                                    <?php } ?>

                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <li><a href="../user/controller/C_logout.php">Đăng xuất</a></li>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['user'])) {
                                        if ($_SESSION['user']['vai_tro'] == "admin") {
                                    ?>
                                            <li><a class="dropdown-item" href="../admin/admin.php">
                                                    Admin
                                                </a></li>
                                    <?php }
                                    } ?>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top bar area end -->

            <!-- Header bottom area start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="header-bottom-wrapper">

                        <div class="header-logo">
                            <a href="home.php"><img src="assets/images/logo/logo.webp" alt="harosa"></a>
                        </div>

                        <!-- main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class="current"><a href="home.php">Trang chủ <i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li><a href="shop.php">Cửa hàng</a></li>
                                    <li><a href="blog.php">Tin tức</a></li>
                                    <li><a href="about-us.php">Về chúng tôi</a></li>
                                    <li><a href="contact-us.php">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header-bottom-action">

                            <!-- Search -->
                            <div class="dropdown">
                                <button class="search-icon" data-bs-toggle="dropdown">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search_top dropdown-menu">
                                    <form method="get" action="#">
                                        <input class="text_input" name="s" value="" placeholder="Search" type="text">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="dropdown">
                                <a href="../../view/user/cart.php">

                                    <i class="fa fa-shopping-basket"></i>
                                    <a href="../../view/user/cart.php"><span class="item_txt"> Giỏ hàng</span> </a>

                                </a>
                            </div>

                            <div class="header-action-toggle d-lg-none">
                                <button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Header bottom area end -->

        </header>
        <!-- HRADER AREA END -->