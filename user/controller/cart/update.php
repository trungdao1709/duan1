<?php
    session_start();
    if(isset($_POST['updated_quantity'])){
        $new_quantity = $_POST['updated_quantity'];
        $id = $_POST['id_updated'];
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['id'] == $id){
                $_SESSION['cart'][$key]['so_luong'] = $new_quantity;
            }
        }
    }
    var_dump($_SESSION['cart']);

    // header("Location: ../../cart.php");
?>