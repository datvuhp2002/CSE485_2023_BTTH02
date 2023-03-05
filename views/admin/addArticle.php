<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                <form action="" method="post">
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tên bài hát</span>
                        <input type="text" class="form-control" name="txtten_bhat" >
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tiêu đề</span>
                        <input type="text" class="form-control" name="txttieude">
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tóm tắt</span>
                        <input type="text" class="form-control" name="txttomtat" >
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Nội dung</span>
                        <input type="text" class="form-control" name="txtnoidung" >
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Hình ảnh</span>
                        <input type="text" class="form-control" name="txthinhanh" readonly>
                    </div> 
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Thể loại</span>
                        <select name="txtma_tloai" id="category">
                            <?php foreach($categories as $category) { ?>
                                <option value="<?= $category->getMaTloai(); ?>" <?php if ($category->getTenTloai() == $article[0]->getTenTloai()) { echo 'selected'; } ?>>
                                    <?= $category->getMaTloai() . ' - ' . $category->getTenTloai(); ?>
                                </option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3" >
                        <span class="input-group-text" style="min-width: 105px;">Tác giả</span>
                        <select name="txtma_tgia" id="author">
                            <?php foreach($authors as $author) { ?>
                                <option value="<?= $author->getMaTgia(); ?>" <?php if ($author->getMaTgia() == $article[0]->getMaTgia()) { echo 'selected'; } ?>>
                                    <?= $author->getMaTgia() . ' - ' . $author->getTenTgia(); ?>
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
