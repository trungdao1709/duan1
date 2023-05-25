<?php
    include "../../model/config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM loai_hang WHERE id_loai_hang=$id";
    connect($query);
    header("location:../../loai_hang.php");
?>  