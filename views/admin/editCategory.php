<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));

?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
                <form action="index.php?controller=admin&action=editCategory&id=<?=$_GET['id']?>" method="post">
            
             
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                        <input type="text" class="form-control" name="txt_ma_tloai" readonly value="<?= $_GET['id']?>"  >
                    </div>

                  <?php foreach($categories as $category ) {?>  
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Tên thể loại</span>
                        <input type="text" class="form-control" name="txt_ten_tloai" value = "<?= $category->getName() ?>">
                    </div>
              <?php } ?>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="index.php?controller=admin&action=category" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
