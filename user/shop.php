<?php
include 'inc/header.php';
include "model/config.php";
function getCategory()
{
    $sql = 'SELECT * FROM loai_hang';
    return getAll($sql);
}
function findCategory($id)
{
    $sql = "SELECT * FROM hang WHERE id_loai_hang  ='$id'";
    return getAll($sql);
}
$allCate = getCategory();
    
    $query = "select * from hang";
    $hang = getAll($query);

if (isset($_POST['filter_btn'])) {
    $filter = $_POST['filter'];
    if ($filter == 'all') {
        $querySearch = "select * from hang where ten_hang like '%$search%'";
        $hang = getAll($querySearch);
    } else {
        $hang = findCategory($filter);
    }
}
function hanghoa_top5()
{
    $sql = "SELECT * FROM `hang` WHERE 1 order by `id` desc limit 5";
    return getAll($sql);
}
$dstop3 = hanghoa_top5();

?>

<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container" style="justify-content:  space-between; display: flex;">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li><a href="#"><span>Trang chủ </span></a></li>
                    <li><a href="#"><span>Cửa hàng</span></a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- Shop page wraper -->
<div class="shop-page-wraper">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 shop-content">
                <div class="product-toolbar">
                    <div class="topbar-title">
                        <h1>
                            Nghệ thuật & Thủ công</h1>
                    </div>
                    <div class="product-toolbar-inner">
                        <div class="product-view-mode">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-bs-toggle="tab" href="#grid"><i class="ion-grid"></i></a></li>
                                <li><a data-bs-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                            </ul>
                        </div>
                        <div class="woocommerce-ordering">
                            <form method="post" class="woocommerce-ordering hidden-xs d-flex ">
                                <div class="orderby-wrapper">
                                    <label>Phân loại :</label>
                                    <select class="nice-select-menu orderby" name='filter' type='submit'>
                                        <option dara-display="Select" value='all'>Tất cả</option>
                                        <?php foreach ($allCate as $value) : ?>
                                            <option value="<?php echo $value['id_loai_hang'] ?>"><?php echo $value['ten_loai_hang'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <button name='filter_btn' class='bg-white d-flex align-items-center'><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="shop-page-product-area tab-content">
                        <div id="grid" class="tab-pane fade show active">
                            <div class="row">
                                <!-- single product -->

                                <?php foreach ($hang as $value) : ?>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="product-miniature js-product-miniature">
                                            <form action="../user/controller/cart/add_cart.php" method="POST">
                                                <div class="img_block">
                                                    <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                    <input type="hidden" name="image" value="<?php echo $value["hinh_anh"] ?>">
                                                    <input type="hidden" name="name" value="<?php echo $value["ten_hang"] ?>">
                                                    <input type="hidden" name="gia" value="<?php echo $value["gia"] ?>">
                                                    <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/<?php echo $value['hinh_anh'] ?>" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                            </form>
                                        </div>
                                    </div>

                                <?php endforeach ?>
                                <!-- single product end -->
                            </div>
                        </div>
                        <div id="list" class="tab-pane fade">
                            <div class="row">
                                <?php foreach ($hang as  $value) : ?>
                                    <form action="../user/controller/cart/add_cart.php" method="POST">
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                    <input type="hidden" name="image" value="<?php echo $value["hinh_anh"] ?>">
                                                    <input type="hidden" name="name" value="<?php echo $value["ten_hang"] ?>">
                                                    <input type="hidden" name="gia" value="<?php echo $value["gia"] ?>">
                                                    <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/<?php echo $value['hinh_anh'] ?>" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h1><a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="product_name" title="Hummingbird printed t-shirt"><?php echo $value["ten_hang"] ?></a></h1>
                                                    <div class="product-desc">
                                                        <p><span><?php echo $value["mo_ta"] ?></span></p>
                                                    </div>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price price-sale"><?php echo $value["gia"] ?></span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="woocommerce-pagination">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="page-numbers" href="#">4</a></li>
                        <li><a class="next page-numbers" href="#">→</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 sidebar-shop">
                <div class="sidebar-product-categori">
                    <div class="shop-categori-title">
                        <h3>
                            Nghệ thuật & Thủ công</h3>
                    </div>
                    <div class="product-filter mb-30">
                    </div>

                    <div class="advertising">
                        <a href="shop.html"><img src="assets/images/banner/advertising.webp" alt="harosa images"></a>
                    </div>
                    <div class="shop-categori-page categori-mini-product-area">
                        <div class="pos-featured-products  product_block_container">
                            <div class="pos_title">
                                <h2>New products</h2>
                            </div>
                        </div>
                        <div class=" pos_content row">
                            <div class="feature-item owl-carousel">
                                <div class="item-product">
                                    <!-- mini product -->
                                    <?php foreach ($dstop3 as $value) : ?>
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                                    <img src="assets/images/product/<?php echo $value["hinh_anh"] ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="#">
                                                        Góc đồ họa</a>
                                                </div>
                                                <h1><a href="shop_detail.php?id=<?php echo $value["id"] ?>"><?php echo $value["mo_ta"] ?></a></h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="price ">$<?php echo $value["gia"] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    <!-- mini product end -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop page wraper end -->




<?php
include 'inc/footer.php'
?>