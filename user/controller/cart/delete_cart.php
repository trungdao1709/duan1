<?php
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $new_arr  = $_SESSION['cart'];
        foreach($_SESSION['cart'] as $key => $value){
          if($id == $value['id']){
            array_splice($new_arr , $key, $key+1);
            $_SESSION['cart'] = $new_arr;
          }
        }
      header("Location: ../../cart.php");
    }
?>