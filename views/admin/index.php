<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php include APP_ROOT . '/includes/headerAdmin.php'?>
<main class="container mt-5 mb-5">
        <div class="row">
            <?php foreach($data as $value){?>
                <div class="col-sm-3">
                    <div class="card mb-2" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="<?=process_link_admin($value['table_name']) ?>" class="text-decoration-none">
                                    <?= process_data_admin($value['table_name']) ?>
                                </a>
                            </h5>
                            <h5 class="h1 text-center">
                                <?= $value['table_rows']?>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
