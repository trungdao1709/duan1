<?php
    // session_start();
    // session_destroy();
    include "inc/header.php";   
    // var_dump($_SESSION['cart']);
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $tong=0;
        foreach($cart as $value => $items){
         $tt=$items['gia'] * $items['so_luong'];
         $tong+=$tt;
        }
        // print_r($cart) ;
        // var_dump($_SESSION['cart']);
        if(isset($_POST['updated_quantity'])){
            $new_quantity = $_POST['updated_quantity'];
            $id = $_POST['id_updated'];
            foreach($_SESSION['cart'] as $key => $value) {
                if($value['id'] == $id){
                    $_SESSION['cart'][$key]['so_luong'] = $new_quantity;
                }
            }
        }
    }
    else {
        $cart=[];
        $tong=0;
        echo 'chuwa co gio hang';
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
                            <span>Home </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Cart</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- cart page content -->
<div class="cart-page-area">
    <div class="container">
        <!-- Form Start -->
        <!-- Table Content Start -->
        <div class="table-content table-responsive mb-50">
            <table>
                <thead>
                    <tr>
                        <th class="product-thumbnail">Image</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Total</th>
                        <th class="product-remove">Remove </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cart as $value => $items) :?>
                    <tr>
                        <td class="product-thumbnail">
                            <a href="#"><img src="assets/images/product/<?= $items['image']?>" alt="cart-image"></a>
                        </td>
                        <td class="product-name"><a href="#"><?= $items['name']?></a></td>
                        <td class="product-price"><span class="amount"><?= $items['gia']?></span></td>
                        <td class="product-quantity"> 
                            <form action="" onsubmit='return false' class ='form_number'>
                                <input type="number" class='quantity' value="<?= $items['so_luong']?>">
                                <input type="text" hidden class='id_update' value='<?= $items['id']?>'>
                            </form>
                        </td>
                        <td class="product-subtotal total"><?= $items['gia'] * $items['so_luong'] ?> $</td>
                        <td class="product-remove">
                            <a onclick="return confirm('Bạn có chắc muốn xóa ??')" href="controller/cart/delete_cart.php?id=<?= $items['id']?>">
                                Xoa
                            </a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
        <!-- Table Content Start -->
        <div class="row">
            <!-- Cart Button Start -->
            <div class="col-md-8 col-sm-7">
                <div class="buttons-cart">
                <!-- <input type="submit" value="Update Cart"> -->
                    <a href="shop.php">Continue Shopping</a>
                </div>
            </div>
            <!-- Cart Button Start -->
            <!-- Cart Totals Start -->
            <div class="col-md-4 col-sm-5">
                <div class="cart_totals">
                    <h2>Cart Totals</h2>
                    <br>
                    <table>
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="total_all">$<?php echo $tong?></span></td>
                            </tr>
                            <tr class="order-total">
                                <th class='acf'>Total</th>
                                <td>
                                    <strong><span class="total_all">$<?php echo $tong?></span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout">
                        <a href="checkout.php">Thanh toán</a>
                    </div>
                </div>
            </div>
            <!-- Cart Totals End -->
        </div>
        <!-- Row End -->
    <!-- Form End -->
    </div>
</div>
<!-- cart page content end -->
<?php
include 'inc/footer.php';
?>

<script>
    const link = location.href;
    let quantitys = document.querySelectorAll(".quantity");
    let id = document.querySelectorAll('.id_update');
    let total  = document.querySelectorAll('.total')
    let total_all = document.querySelectorAll('.total_all');
    let amount = document.querySelectorAll('.amount')
    quantitys.forEach((quantity,index)=>{
        quantity.onchange = (e)=>{
            $.ajax({
                type: "POST",
                url: link,
                data:{
                    id_updated : id[index].value,
                    updated_quantity : quantity.value,
                },
                success : function(res){
                    console.log('Successfully updated quantity');
                    let tong = amount[index].innerText * quantity.value;
                    total[index].innerHTML = tong + '$';
                    Array.from(total_all).forEach(function(element){
                        // let all_total = Array.from(total).reduce((all, currentValue) => all.innerHTML)
                        let a = Array.from(total).map((ele) => Number(ele.innerText.slice(0,-1)))
                        let all_total = a.reduce((all, currentValue) => all + currentValue)
                        element.innerHTML = all_total + '$'
                    })
                },
                error: function (e) {
                    console.log(e.message);
                }
            })
        }
    })
    
</script>