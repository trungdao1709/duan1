<?php
if(!empty($_SESSION)){
    $idUser=$_SESSION['user']['id'];
   
} else{
    $idUser=0;
}

    function getOneInfor($id){
        $sql = "SELECT * FROM user WHERE id = '$id'";
        return GetOne($sql);
    }
   
    $currentAcc = getOneInfor($idUser);
?>

