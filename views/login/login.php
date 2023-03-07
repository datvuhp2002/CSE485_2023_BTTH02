<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/header.php'?>
<!-- <script>alert("<?=$msg2?>")</script> -->
<head>
    <link rel="stylesheet" href="http://localhost/CSE485_2023_BTTH02/assets/css/style_login.css">
</head>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=login&action=verifyLogin" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="username" name="username" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="password" name="password" required>
                            </div>
                            
                            <div class="form-group" style="margin-top: 40px">
                                <input type="submit" value="Login" class="btn float-end login_btn">
                            </div>
                        </form>
                    </div>
                    <div style="color: black; text-align: center;"><?=$msg?></div>
                    <div class="card-footer" >
                        <div class="d-flex justify-content-center ">
                            Don't have an account ? <a href="index.php?controller=login&action=renderSignup" class="text-warning text-decoration-none"> Sign Up</a>
                        </div>
                    </div>
                </div>

        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>