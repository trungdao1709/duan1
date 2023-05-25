<?php
    include "../../model/config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name_cate = $_POST["name"];
        $err="";
        if ($name_cate == '') {
            $err = 'Vui lòng không bỏ trống';
            header("location:../../add_cate.php");
        } 
        else {
            $err = "";
            $query = "insert into loai_hang(ten_loai_hang) values('$name_cate ') ";
            connect($query);
            header("location:../../loai_hang.php");
        }
    }
?>  