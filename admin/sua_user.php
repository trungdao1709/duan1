<?php
include "layout/header.php";
include "model/config.php";

$id= $_GET["id"];
$query = " SELECT * from user where id = $id";
$user = getOne($query);

?>
</div>
</div>

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

                        <form action='./controller/user/save_update_user.php' method='post' enctype='multipart/form-data'>
                          
                            <div class='row'>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Tên khách hàng</label>
                                    <input type="text" name='name' class="form-control" value='<?php echo $user["ten"] ?>' id="exampleInputEmail1">
                                    <input type="text" name='id' hidden value="<?php echo $user['id'] ?>">
                                </div>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value='<?php echo $user["tai_khoan"] ?>'value="ddddddd">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                                    <input type="text" name="pass" class="form-control" value='<?php echo $user["mat_khau"] ?>'>
                                </div>
                                <div class="mb-3 col">
                                    <label for="exampleInputEmail1" class="form-label">Avatar</label>
                <input type="file" name='img' class="form-control" id="exampleInputEmail1">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Vai trò</label>
                                <select class="form-select" name='role' aria-label="Default select example">
                                    <option hidden><?php echo $user["vai_tro"] ?></option>
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

    </body>

    </html>