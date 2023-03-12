<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=admin&action=addCategory" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <?php foreach($categories as $category) { ?>
                    <tbody>
                        <tr>
                            <th scope="row"> <?=$category->getId()?> </th>
                            <td><?=$category->getName()?></td>
                            <td>
                                <a href="index.php?controller=admin&action=editCategory&id=<?=$category->getId()?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?controller=admin&action=deleteCategory&id=<?=$category->getId()?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>             
                    </tbody> 
                    <?php }  ?>
                </table> 
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
