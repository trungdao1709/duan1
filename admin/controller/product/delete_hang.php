<?php
    include "../../model/config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM hang WHERE id=$id";
    connect($query);
    header("location:../../hang.php");
?>  