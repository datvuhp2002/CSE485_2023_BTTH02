<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_category.php" class="btn btn-success">Thêm mới</a>
                
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
                            <th scope="row"> <?=html_escape($category->getma_tloai())?> </th>
                            <td><?=html_escape($category['ten_tloai'])?></td>
                            <td>
                                <a href="edit_category.php?id=<?=$category['ma_tloai']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="process_delete_category.php?id=<?=$category['ma_tloai']?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        
                    </tbody> <?php }?>
                </table> 
            </div>
        </div>
    </main>


