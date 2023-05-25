<?php
include "../../model/config.php";

$Name = $_POST["name"];
$id_sp = $_POST["id_sp"];
$date=$_POST["date"];
$cmt = $_POST["comment"];
$query = " INSERT into comment(cmtdesc,ngay_nhap,name_user,id_sp) values('$cmt','$date','$Name','$id_sp') ";
connect($query);
header("location:../../shop_detail.php?id=$id_sp");

?>
