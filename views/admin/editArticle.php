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
                <form method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã bài viết</span>
                        <input type="text" class="form-control" name="txtma_bviet" readonly value='<?= $article[0]->getMaBviet()?>' >
                    </div>
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tên bài hát</span>
                        <input type="text" class="form-control" name="txtten_bhat"value='<?= $article[0]->getTenBHat()?>' required >
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tiêu đề</span>
                        <input type="text" class="form-control" name="txttieude"value='<?= $article[0]->getTieuDe() ?>' required>
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tóm tắt</span>
                        <input type="text" class="form-control" name="txttomtat"value='<?= $article[0]->getTomTat()?>' >
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Nội dung</span>
                        <input type="text" class="form-control" name="txtnoidung"value='<?= $article[0]->getNoiDung()?>' >
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Ngày viết</span>
                        <input type="text" class="form-control" value='<?= $article[0]->getNgayViet()?>' readonly>
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Hình ảnh</span>
                        <input type="text" class="form-control" name="txthinhanh"value='<?= $article[0]->getHinhAnh()?>' readonly>
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Thể loại</span>
                        <select name="txtma_tloai" id="category">
                            <?php foreach($categories as $category) { ?>
                                <option value="<?= $category->getId(); ?>" <?php if ($category->getId() == $categorySelected->getId()) { echo 'selected'; } ?>>
                                    <?= $category->getId() . ' - ' . $category->getName(); ?>
                                </option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tác giả</span>
                        <select name="txtma_tgia" id="author">
                            <?php foreach($authors as $author) { ?>
                                <option value="<?= $author->getId(); ?>" <?php if ($author->getId() == $authorSelected->getId()) { echo 'selected'; } ?>>
                                    <?= $author->getId() . ' - ' . $author->getTenTgia(); ?>
                                </option>
                            <?php }?>   
                        </select>
                    </div>
                    <div class="form-group  float-end">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href=<?= so . "?controller=admin&action=article"?> class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
