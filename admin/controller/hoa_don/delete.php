<?php
    include "../../model/config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM hoa_don WHERE id=$id";
    connect($query);
    header("location:../../hoa_don.php");
?>  