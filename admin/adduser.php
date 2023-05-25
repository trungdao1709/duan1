<?php
include "layout/header.php";
include "model/config.php";
?>
<?php
function addNewUser($name, $img, $role, $email, $pass)
{
    $sql = "INSERT INTO user(ten, mat_khau, tai_khoan, hinh, vai_tro)
     VALUES('$name', '$pass', '$email','$img','$role')";
    getAll($sql);
}
function checkEmailUser($email)
{
    $sql = "SELECT * FROM user WHERE tai_khoan = '$email'";
    return getOne($sql);
}
$err = '';
if (isset($_POST["btn_submit"])) {

    $name = $_POST["name"];
    $img = $_FILES["img"]["name"];

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $check = checkEmailUser($email);
    if (!$name || !$img || !$pass || !$email) {
        $err = 'Vui lòng nhập đầy đủ !!';
    } else if (is_array($check)) {
        $err = 'Tài khoản đã tồn tại';
    } else {
        $err = '';
        $role = $_POST['role'];
        $target_dir = "./assets/img/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

        addNewUser($name, $img, $role, $email, $pass);


        $yourURL = "http://localhost/tesst/view/admin/user.php";
        echo ("<script>location.href='$yourURL'</script>");
    }
} ?>
</div>
</div>
<!-- <img src="./assets/img/avatar-150.png" alt=""> -->

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Thêm người dùng</h2>
    </div>
    <div class="main-content container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">Default
                    </div>
                    <div class='bg-white rounded p-3 shadow-sm'>
                        <?php
                        echo $err != "" ?  "
                         <div class='alert alert-danger' role='alert'>
                             Lỗi: $err
                         </div>  
                             "
                            :

                            ''
                        ?>
                        <!-- ./controller/user/save_adduser.php -->
                        <form action='adduser.php' method='post' enctype='multipart/form-data'>
                            <div class='row'>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Tên khách hàng</label>
                                    <input type="text" name='name' class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" required name="email" class="form-control">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                                    <input type="text" name="pass" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Avatar</label>
                                    <input type="file" name='img' class="form-control" id="exampleInputEmail1">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Vai trò</label>
                                <select class="form-select" name='role' aria-label="Default select example">
                                    <?php foreach ($role as $value) : ?>
                                        <option value="<?php echo $value ?>"><?php echo $value ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <button type="submit" name='btn_submit' class="btn btn-primary">Lưu</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>



    </div>

</div>

</html>