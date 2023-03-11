<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>

<main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới User</h3>
                <form method="post">

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Username</span>
                        <input type="text" class="form-control" name="txt_Username"required >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Password</span>
                        <input type="text" class="form-control" name="txt_Password"required >
                    </div>

                    <div class="input-group mt-3 mb-3">
                         <span class="input-group-text" id="lblCatId"> Role </span>
                        <select name="txt_Role" id="category">
                            <option value="admin">admin</option>
                            <option value="user" >user </option>
                        </select>
                    </div>
  
                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="index.php?controller=admin&action=user" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main> 