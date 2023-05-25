<?php
// session_start();
include './model/config.php';
include './model/register.php';

$err = '';
if (isset($_POST["btn_register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $check = checkEmail($email);
    $comfirmPass = $_POST["comfirmPass"];
    if ($email == '' || $pass == '' || $name == '' || $comfirmPass == '') {
        $err = 'Vui lòng không bỏ trống';
    } else if (is_array($check)) {
        $err = 'Tài khoản đã tồn tại';
    } else if ($comfirmPass != $pass) {
        $err = 'Mật khẩu không trùng khớp';
    } else {
        createAccount($email, $name, $pass);
        // header('Location: login.php');
        $yourURL="http://localhost/tesst/view/user/login.php";
            echo ("<script>location.href='$yourURL'</script>");



    }
}

