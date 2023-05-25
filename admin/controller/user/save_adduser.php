<?php
    include "../../model/config.php";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $role = $_POST["role"];
    $img = $_FILES["img"]["name"];
    $query = "INSERT INTO user (ten,tai_khoan,mat_khau,vai_tro,hinh) values('$name','$email','$pass','$role','$img') ";
    connect($query);
    move_uploaded_file($_FILES["img"]["tmp_name"],"../../assets/img/".$_FILES["img"]["name"]);

    header("location:../../user.php");
