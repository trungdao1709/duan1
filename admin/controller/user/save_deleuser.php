<?php
    include "../../model/config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM user WHERE id=$id";
    connect($query);
    header("location:../../user.php");
?>  