<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=admin&action=addUser" class="btn btn-success">Thêm mới</a>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Role</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <?php foreach($users as $user) { ?>
                    <tbody>
                        <tr>
                            <th scope="row"> <?=$user->getId()?> </th>
                            <td><?=$user->getUsername()?></td>
                            <td><?=$user->getRole()?></td>
                            <td>
                                <a href="index.php?controller=admin&action=editUser&id=<?=$user->getId()?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?controller=admin&action=deleteUser&id=<?=$user->getId()?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        
                    </tbody> <?php }?>
                </table> 
            </div>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
