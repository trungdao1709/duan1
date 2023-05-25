<?php
include "./inc/header.php";
include "model/config.php";
include "model/account.php";
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $tong = 0;
    foreach ($cart as $value => $items) {
        $tt = $items['gia'] * $items['so_luong'];
        $tong += $tt;
    }
} else {
    echo 'chuwa co gio hang';
}
$err = "";
if (isset($_POST["thanhtoan"])) {
    $err = "";
    $name = $_POST["name_user"];
    $email = $_POST["email"];
    $dia_chi = $_POST["dia_chi"];
    $so_dt = $_POST["dien_thoai"];
    $image = $_POST["image"];
    $productName = $_POST["name"];
    $gia = $_POST["gia"];
    $so_luong = $_POST["so_luong"];
    $tong = $_POST["tong"];
    if ($dia_chi == '' || $so_dt == '') {
        $err = 'Vui lòng không bỏ trống';
    } else {
        $err = "";
        $query = " INSERT into hoa_don(ten_khachhang,tong_tien,dia_chi,email,so_dt) values(
        '$name','$tong','$dia_chi','$email','$so_dt') ";
        connect($query);
        $query1 = " INSERT into cart(khach_hang,ten_hang,hinh_anh,gia,so_luong) values(
        '$name','$productName','$image','$gia','$so_luong') ";
        connect($query1);
        $yourURL = "http://localhost/tesst/view/user/home.php";
        echo ("<script>location.href='$yourURL'</script>");
    }
}
?>
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
                            <span>Checkout</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- checkout page content -->
<div class="checkout-page-area">

    <!-- coupon area -->
    <div class="coupon-area">
        <div class="container">
            <div class="coupon-accordion">
                <!-- ACCORDION START -->
                <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                <div id="checkout-login" class="coupon-content">
                    <div class="coupon-info">
                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                        <form action="#">
                            <p class="form-row-first">
                                <label>Username or email <span class="required">*</span></label>
                                <input type="text">
                            </p>
                            <p class="form-row-last">
                                <label>Password <span class="required">*</span></label>
                                <input type="text">
                            </p>
                            <p class="form-row">
                                <input type="submit" value="Login">
                                <label>
                                    <input type="checkbox">
                                    Remember me
                                </label>
                            </p>
                            <p class="lost-password">
                                <a href="#">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- ACCORDION END -->
                <!-- ACCORDION START -->
                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                <div id="checkout_coupon" class="coupon-checkout-content">
                    <div class="coupon-info">
                        <form action="#">
                            <p class="checkout-coupon">
                                <input type="text" class="code" placeholder="Coupon code">
                                <input type="submit" value="Apply Coupon">
                            </p>
                        </form>
                    </div>
                </div>
                <!-- ACCORDION END -->
            </div>
        </div>
    </div>
    <!-- coupon area end -->

    <!-- checkout area -->
    <div class="checkout-area">
        <div class="container">
            <form action="../user/checkout.php" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <?php echo $err != "" ?  "
                                        <div class='alert alert-danger' role='alert'>
                                            Lỗi: $err
                                        </div>
                                    "
                                :

                                ''
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select mb-30">
                                        <div class="checkout-form-list mb-30">
                                            <label>Tên</label>
                                            <input type="text" name="name_user" placeholder="Name" value='<?php echo $currentAcc['ten'] ?>'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ<span class="required">*</span></label>
                                        <input type="text" name="dia_chi" placeholder="Street address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Email<span class="required">*</span></label>
                                        <input type="email" name="email" placeholder="Email" value='<?php echo $currentAcc['tai_khoan'] ?>'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="dien_thoai" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc mb-30">
                                        <a href="register.php"><label>Create an account?</label></a>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                        <p class="mb-10">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input type="password" placeholder="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart as $value) :  ?>
                                            <input type="hidden" name="image" value="<?php echo $value["image"] ?>">
                                            <input type="hidden" name="name" value="<?php echo $value["name"] ?>">
                                            <input type="hidden" name="gia" value="<?php echo $value["gia"] ?>">
                                            <input type="hidden" name="so_luong" value="<?php echo $value["so_luong"] ?>">
                                            <tr class="cart_item">
                                                <td class="product-name"><?php echo $value["name"] ?>
                                                    <strong class="product-quantity"> ×<?php echo $value["so_luong"] ?> </strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$<?php echo $tt ?></span>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tổng phụ giỏ hàng</th>
                                            <td><span class="amount">$0</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng tiền</th>
                                            <td><strong><span class="amount">$<?php echo $tong ?></span></strong>
                                                <input type="hidden" name="tong" value="<?php echo $tong ?>">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="order-button-payment">
                                    <input type="submit" name="thanhtoan" value="Thanh toán">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
<!-- checkout area end -->

</div>
<?php
include 'inc/footer.php';
?>