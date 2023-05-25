<?php
include 'inc/header.php';
include './model/config.php';
$query = "select * from hang";
$hang = getAll($query);
?>

<!-- offcanvas END -->
<!-- Slider area -->
<div class="slider-area home-three">
    <!-- slider start -->
    <div class="slider-inner">
        <div id="mainSlider" class="nivoSlider nevo-slider">
            <img src="assets/images/slider/4.webp" alt="main slider" title="#htmlcaption1" />
            <img src="assets/images/slider/3.webp" alt="main slider" title="#htmlcaption2" />
        </div>
        <div id="htmlcaption1" class="nivo-html-caption slider-caption">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slider-content slider-content-1 slider-animated-1 pull-left">
                    <p class="hp1">Làm sạch lỗ chân lông</p>
                    <h1 class="hone">giảm giá tới 20%</h1>
                    <h2 class="htwo">Gel làm sạch</h2>
                    <div class="button-1 hover-btn-2">
                        <a href="shop.php">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption slider-caption">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slider-content slider-content-2 slider-animated-2 pull-left">
                    <p class="hp1">Làm dịu da bị kích ứng</p>
                    <h1 class="hone">giảm giá tới 20%</h1>
                    <h2 class="htwo">Tinh dầu lanbio</h2>
                    <div class="button-1 hover-btn-2">
                        <a href="#">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end -->
</div>
<!-- Slider area end -->
<!-- product tabs container slider -->
<div class="product-tabs-container-slider product_block_container">
    <div class="container">

        <ul class="nav tabs_slider">
            <li class="active"><a href="#newarrival" data-toggle="tab">Hàng mới về</a></li>
            <li><a href="#bestseller" data-toggle="tab">Hàng bán chạy</a></li>
            <li><a href="#featuredproducts" data-toggle="tab">Sản phẩm nổi bật</a></li>
        </ul>
        <div class="tab-content pos_content">
            <div class="tab-pane fade show active" id="newarrival">
                <div class="productTabContent0 owl-carousel">
                    <!-- single product -->
                    <?php foreach ($hang as $value) : ?>
                        <form action="./controller/cart/add_cart.php" method="POST">
                            <div class="item-product">
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                        <input type="hidden" name="image" value="<?php echo $value["hinh_anh"] ?>">
                                        <input type="hidden" name="name" value="<?php echo $value["ten_hang"] ?>">
                                        <input type="hidden" name="gia" value="<?php echo $value["gia"] ?>">
                                        <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                            <img src="assets/images/product/<?php echo $value["hinh_anh"] ?>" alt="harosa product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_desc">

                                        <h1> <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="product_name" title="Hummingbird printed t-shirt"><?php echo $value["ten_hang"] ?></a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price price-sale">$<?php echo $value["gia"] ?></span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart">
                                                <button class=" btn_submit" type='submit' name="addcart">Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endforeach ?>
                    <!-- single product end -->
                </div>
            </div>
        </div>
        <!-- cms aboutus -->
        <div class="cms_aboutus">
            <img src="assets/images/bg/1_3.webp" alt="" class="img-responsive">
            <div class="cms-info">
                <div class="container">
                    <div class="cms-desc">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="info-content">
                                    <h4>
                                        Về chúng tôi</h4>
                                    <h2>Chào mừng <span>Harosa</span> Store.</h2>
                                    <p>Đó là sự nghiệp của một người chơi trong henndrerit. Tiền sảnh trước mặt anh ta đầu tiên ở cổ họng của bệnh viện để đặt tang lễ và giường siêu cấp Praesent volutpat với tư cách là người chơi trong hendrerit. lối vào trước anh ta, đầu tiên trong cổ họng</p>
                                    <a href="#">Đọc thêm</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/images/service/2_3.webp" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cms aboutus end -->
        <!-- pos special products  -->
        <div class="home-two home-three">
            <div class="pos-special-products">
                <div class="container">
                    <div class="special-products">
                        <div class="pos_title">
                            <h2>Daily Deals</h2>
                        </div>
                        <div class="special-item1 pos_content owl-carousel">
                            <!-- special item -->
                            <?php foreach ($hang as $value) : ?>
                                <form action="./controller/cart/add_cart.php" method="POST">
                                    <div class="product-miniature js-product-miniature">
                                        <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                        <input type="hidden" name="image" value="<?php echo $value["hinh_anh"] ?>">
                                        <input type="hidden" name="name" value="<?php echo $value["ten_hang"] ?>">
                                        <input type="hidden" name="gia" value="<?php echo $value["gia"] ?>">
                                        <div class="img_block">
                                            <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/<?php echo $value["hinh_anh"] ?>" alt="harosa product">
                                            </a>
                                            <ul class="product-flag">
                                                <li class="new"><span>New</span></li>
                                            </ul>
                                            <div class="quick-view">
                                                <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-price-and-shipping_top">
                                                <span class="discount-percentage discount-product">-8%</span>
                                            </div>

                                        </div>
                                        <div class="product_desc">
                                            <h1><a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="product_name" title="Hummingbird printed t-shirt"><?php echo $value["ten_hang"] ?></a></h1>

                                            <div class="product-desc">
                                                <p><span><?php echo $value["mo_ta"] ?> </span></p>
                                            </div>
                                            <div class="product-price-and-shipping">

                                                <span class="price price-sale">$<?php echo $value["gia"] ?></span>
                                            </div>
                                            <div class="cart">
                                                <div class="product-add-to-cart">
                                                    <button class=" btn_submit" type='submit' name="addcart">Thêm vào giỏ hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="countdown">
                                            <div class="time_count_down">
                                                <div data-countdown="<?php echo $value["ngay_nhap"] ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- special item end -->
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pos special products end -->
        <!-- cms info  -->
        <div class="cms_info">
            <img src="assets/images/bg/1_2.webp" alt="" class="img-responsive">
            <div class="cms_container">
                <div class="container">
                    <div class="info_content">
                        <p class="txt1">Một cái gì đó thần bí, một cái gì đó kỳ diệu ...</p>
                        <h2>Spa tự nhiên</h2>
                        <p class="phone">(+08) 123 456 7890</p>
                        <p class="txt2">Đó là sự nghiệp của một người chơi trong henndrerit. Tiền đình trước tiên trong cổ họng bệnh viện thương tiếc đặt giường cuối giường</p>
                        <a href="#">
                            Bộ sưu tập của Shop trong năm mới</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- cms info end -->
        <!-- home banner -->
        <div class="home-banner">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="banner-box m-0">
                            <a href="shop.html"><img src="assets/images/banner/1_1.webp" alt="harosa"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-box m-0">
                            <a href="shop.html"><img src="assets/images/banner/2_1.webp" alt="harosa"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home banner end -->

        <?php
        include 'inc/footer.php'
        ?>