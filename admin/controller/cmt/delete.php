<?php
    include "../../model/config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM comment WHERE id=$id";
    connect($query);
    header("location:../../cmt.php");
?>  