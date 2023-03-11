<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
    require APP_ROOT . '/configs/functions.php';
    $id = $_GET['id'];
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin users</h3>
                <form  method="post">
            
             
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">id</span>
                        <input type="text" class="form-control" name="txt_id" readonly value= "<?=$id?>"  >
                    </div>


                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Username</span>
                        <input type="text" class="form-control" name="txt_Username"  value = "<?=$users[0]->getUsername()?>"  >
                    </div>
                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Username</span>
                        <input type="text" class="form-control" name="txt_Password"  value = "<?=$users[0]->getPassword()?>"  >
                    </div>

                <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatId"> Role </span>
                    <select name="txt_Role" id="">
                        <option value="admin" <?php if ($users[0]->getRole() == 'admin') { echo 'selected'; } ?>>
                        admin
                        </option>
                        <option value="user" <?php if ($users[0]->getRole() == 'user') { echo 'selected'; } ?>>
                        user
                        </option>
                    </select>
                </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="index.php?controller=admin&action=user" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>