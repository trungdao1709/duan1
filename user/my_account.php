<?php
include "./inc/header.php";
include "model/config.php";
include "model/account.php";



?>

<div style="width: 55%; margin:auto ;" class='bg-white rounded p-4 shadow-sm m_top content'>
    <div class='d-flex gap-2 mb-4'>
        <img class='avatar-img' src="../admin/assets/img/<?php echo $currentAcc["hinh"] ?>" alt="" style="width: 300px; height: 300px; border-radius: 50%;">
        <div class="name-user">
         
            <p class='fw-bold fs-4 mt-2'></p>
      <img src="./assets/images/logo/logo-whit.webp" alt="">
        </div>
    </div>
    <form action='./controller/save_update_user.php' method='post' enctype='multipart/form-data'>
    <input type="type" hidden id="id">
        <div class='row'>
            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Tên khách hàng</label>
                <input type="text" name='name'  class="form-control" id="exampleInputEmail1" disabled value='<?php echo $currentAcc['ten']?>' >
            </div>
            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name='email'  class="form-control" disabled placeholder="exampleInputEmail1" aria-describedby="emailHelp"  value='<?php echo $currentAcc['tai_khoan']?>' >
            </div>
        </div>
        <div class="row"><div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                <input type="password" name="pass" class="form-control" disabled  value='<?php echo $currentAcc['mat_khau']?>' >
            </div>
            <div class="mb-3 col">
                <!-- <label for="exampleInputEmail1" class="form-label">Avatar</label> -->
                <!-- <input type="file" name='avatar' class="form-control" id="exampleInputEmail1" > -->
            </div>

            
            <!-- <button type="submit" name='btn_submit' class="btn btn-primary">Lưu</button> -->
        </div>
    </form>
    <?php
    include "./inc/footer.php";
    ?>