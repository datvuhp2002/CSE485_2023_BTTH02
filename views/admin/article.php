<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=article&action=add" class="btn btn-success">Thêm mới</a>
                <table class="table" >
                    <thead>
                        <tr>
                            <th class = "text-nowrap" scope="col">#</th>
                            <th class = "text-nowrap" scope="col">Tiêu đề</th>
                            <th class = "text-nowrap" scope="col">Tên bài hát</th>
                            <th class = "text-nowrap" scope="col">Mã thể loại</th>
                            <th class = "text-nowrap" scope="col">Tóm tắt</th>
                            <th class = "text-nowrap" scope="col">Nội dung</th>
                            <th class = "text-nowrap" scope="col">Mã tác giả</th>
                            <th class = "text-nowrap" scope="col">Ngày viết</th>
                            <th class = "text-nowrap" scope="col">Hình ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articles as $article) {?>

                            <tr >
                                <th name = "id" scope="row"><?= $article->getMaBViet()?></th>
                                <td ><?= $article->getTieuDe()?></td>
                                <td ><?= $article->getTenBHat() ?></td>
                                <td class="text-center" ><?= $article->getMaTloai()?></td>
                                <td ><?= $article->getTomTat()?></td>
                                <td ><?= $article->getNoiDung()?></td>
                                <td class="text-center" ><?= $article->getMaTgia()?></td>
                                <td ><?= $article->getNgayViet()?></td>
                                <td style="white-space: wrap"><?= $article->getHinhAnh()?></td>
                                <td >
                                    <a href=<?=so."/index.php?controller=admin&action=edit&id=".$article->getMaBViet()?>><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td >
                                    <a href = <?=so."/index.php?controller=admin&action=delete&id=".$article->getMaBViet()?>><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
