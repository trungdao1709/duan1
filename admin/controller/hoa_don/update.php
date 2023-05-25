<?php
    include "../../model/config.php";
    $trang_thai = $_POST["trang_thai"];
    $id=$_POST["id"];
    $query = "UPDATE hoa_don SET trang_thai = '$trang_thai' where id=$id";
    connect($query);
    header("location:../../hoa_don.php");
?>  