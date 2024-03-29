<?php
include 'controller/C_login.php';
include 'inc/header.php';

?>

<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Sign in</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->
<!-- login page content -->
<div class="login-page-area">
    <div class="container">
        <div class="login-area">
            <!-- New Customer Start -->
            <div class="row">
                <div class="col-md-6">
                    <div class="well mb-sm-30">
                        <div class="new-customer">
                            <h3 class="custom-title">new customer</h3>
                            <p class="mtb-10"><strong>Register</strong></p>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                            <a class="customer-btn" href="register.php">continue</a>
                        </div>
                    </div>
                </div>
                <!-- New Customer End -->
                <!-- Returning Customer Start -->
                <div class="col-md-6">
                    <div class="well">
                        <div class="return-customer">
                            <h3 class="mb-10 custom-title">returnng customer</h3>
                            <p class="mb-10"><strong>I am a returning customer</strong></p>
                            <form action="login.php" method="post">
                                <?php echo $err != "" ?  "
                                        <div class='alert alert-danger' role='alert'>
                                            Lỗi: $err
                                        </div>
                                    "
                                    :

                                    ''
                                ?>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="pass" placeholder="Password" id="input-password" class="form-control">
                                </div>
                                <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                                <input type="submit" value="Login" class="return-customer-btn" name="btn_login">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Returning Customer End -->
            </div>
        </div>
    </div>
</div>
<?php
include 'inc/footer.php';
?>