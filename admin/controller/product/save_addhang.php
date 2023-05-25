
<?php
include "../../model/config.php";

$productName = $_POST["name"];
$gia = $_POST["price"];
$so_luong = $_POST["so_luong"];
$ngay_nhap=$_POST["ngay_nhap"];
$productDesc = $_POST["mo_ta"];
$productImage = $_FILES["image"]["name"];
$id_loai_hang = $_POST["id_loai_hang"];
echo $id_loai_hang;
$query = " INSERT into hang(ten_hang, hinh_anh,gia,ngay_nhap,so_luong,mo_ta,id_loai_hang) values(
    '$productName','$productImage','$gia','$ngay_nhap','$so_luong','$productDesc','$id_loai_hang') ";
connect($query);
move_uploaded_file($_FILES["image"]["tmp_name"], "../../asset/images/product" . $_FILES["imgage"]["name"]);
header("location:../../hang.php");
?>