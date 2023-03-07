<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/header.php'?>
<main class="container mt-5">
                        <div class="row" style="margin-bottom: 40px;">
                            <div class = "col-4">
                                <img src="<?= so . '/assets/images/songs/' . $detail->getHinhAnh().'.jpg' ?>" class="card-img-top">
                            </div>

                            <div class="col-8">
                                <h1 class="card-title mt-2 fw-bold fs-2">
                                <?= $detail->getTenBhat() ?>
                                </h1>
                                <blockquote class="fs-7 opacity-50" style = "user-select: none;"><span class=" Source Title">Ngày viết: </span><?= $detail->getNgayViet() ?></blockquote> 
                                <p><span class=" fw-bold">Bài hát: </span><?= $detail->getTenBhat() ?></p> 
                                <p><span class=" fw-bold">Tóm tắt: </span><?= $detail->getTomTat() ?></p>
                                <p><span class=" fw-bold">Nội dung: </span><?= $detail->getNoiDung() ?></p> 
                                <p class="card-text"><span class=" fw-bold">Mã tác giả: </span><?= $detail->getMaTgia() ?></p>
                            </div>

                        </div>
</main>
<?php include APP_ROOT . '/includes/footer.php'?>
