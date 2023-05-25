<?php
include "../../model/config.php";
if(isset($_POST["thanhtoan"])){
    var_dump($_POST);
$name = $_POST["name_user"];
$email = $_POST["email"];
$dia_chi = $_POST["dia_chi"];
$so_dt=$_POST["dien_thoai"];
$image = $_POST["image"];
$productName = $_POST["name"];
$gia = $_POST["gia"];
$so_luong = $_POST["so_luong"];
$tong= $_POST["tong"];
$query = " INSERT into hoa_don(ten_khachhang,tong_tien,dia_chi,email,so_dt) values(
    '$name','$tong','$dia_chi','$email','$so_dt') ";
connect($query);
$query1=" INSERT into cart(khach_hang,ten_hang,hinh_anh,gia,so_luong) values(
    '$name','$productName','$image','$gia','$so_luong') ";
 connect($query1);   
 header("location:../../home.php");
}

?>