<?php 
    include "../../model/config.php";
    $name = $_POST["name"];
    $id=$_POST["id"];
    $query = "UPDATE loai_hang SET ten_loai_hang = '$name' where id_loai_hang=$id";
    connect($query);
    header("location:../../loai_hang.php");
?>
