<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
    require APP_ROOT . '/configs/functions.php';
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
                <form action="process_edit_article.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã bài viết</span>
                        <input type="text" class="form-control" name="txtma_bviet" readonly value='<?= $_GET['id']?>' >
                    </div>
                    <?php foreach($article as $key => $value) { ?>
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" style="min-width: 105px;"><?= process_data_article($key)?></span>
                            <input type="text" class="form-control" name="txt<?=$key?>" value='<?= html_escape($value)?>' <?= $key == 'ngayviet' ? 'readonly' : ''?>>
                        </div> 
                    <?php }?>
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Thể loại</span>
                        <select name="txtma_tloai" id="category">
                            <?php foreach($categories as $category) { ?>
                                <option value="<?= $category['ma_tloai']; ?>" <?php if ($category['ten_tloai'] == $categoriesChosen['ten_tloai']) { echo 'selected'; } ?>>
                                    <?= $category['ma_tloai'] . ' - ' . $category['ten_tloai']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tác giả</span>
                        <select name="txtma_tgia" id="author">
                            <?php foreach($authors as $author) { ?>
                                <option value="<?= $author['ma_tgia']; ?>" <?php if ($author['ten_tgia'] == $authorsChosen['ten_tgia']) { echo 'selected'; } ?>>
                                    <?= $author['ma_tgia'] . ' - ' . $author['ten_tgia']; ?>
                                </option>
                            <?php }?>   
                        </select>
                    </div>
                    <div class="form-group  float-end">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
