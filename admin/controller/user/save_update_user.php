<?php 
    include "../../model/config.php";

    $name= $_POST["name"];
    $email= $_POST["email"];
    // $pass= $_POST["pass"];
    $role = $_POST["role"];
    $img = $_FILES["img"]["name"];


    $id= $_POST["id"];
    if($img != ""){
        $sql = "UPDATE user SET ten = '$name', hinh = '$img',tai_khoan = '$email', vai_tro ='$role' WHERE id ='$id'";

    }else{
        $sql = "UPDATE user SET ten = '$name',tai_khoan = '$email', vai_tro ='$role' WHERE id ='$id'";

    }
    
    connect($sql);
    move_uploaded_file($_FILES["img"]["tmp_name"],"../../assets/img/".$_FILES["img"]["name"]);

    header("location:../../user.php");
?>