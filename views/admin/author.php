<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=admin&action=addAuthor" class="btn btn-success">Thêm mới</a>
                <table class="table" >
                    <thead>
                        <tr>
                            <th class = "text-nowrap" scope="col">#</th>
                            <th class = "text-nowrap" scope="col">Tên tác giả</th>
                            <th class = "text-nowrap" scope="col">Hình ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($authors as $author) {?>
                            <tr >
                                <th scope="row"><?= $author->getId()?></th>
                                <td ><?= $author->getTenTgia()?></td>
                                <td style="white-space: wrap"><?= $author->getHinhAnh()?></td>
                                <td >
                                    <a href="index.php?controller=admin&action=editAuthor&id=<?=$author->getId()?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td >
                                    <a href="index.php?controller=admin&action=deleteAuthor&id=<?=$author->getId()?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
