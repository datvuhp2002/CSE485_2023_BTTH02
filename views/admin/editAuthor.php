<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
    require APP_ROOT . '/configs/functions.php';
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giả</h3>
                <form action="index.php?controller=admin&action=editAuthor&id=<?=$_GET['id']?>" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span  style="min-width: 105px;" class="input-group-text" id="lblCatId">Mã tác giả</span>
                        <input  type="text" class="form-control" name="txtma_tgia" readonly value="<?= $_GET['id']?>" >
                    </div>

                    <?php foreach($authors as $author ) {?>  
                    <div class="input-group mt-3 mb-3">
                        <span  style="min-width: 105px;" class="input-group-text" id="lblCatId">Tên tác giả</span>
                        <input  type="text" class="form-control" name="txtten_tgia" value = "<?= $author->getTenTgia() ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span  style="min-width: 105px;" class="input-group-text" id="lblCatId">Hình ảnh</span>
                        <input  type="text" class="form-control" name="txthinh_tgia" value = "<?= $author->getHinhAnh() ?>">
                    </div>
              <?php } ?>

                    <div class="form-group  float-end">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="index.php?controller=admin&action=author" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
