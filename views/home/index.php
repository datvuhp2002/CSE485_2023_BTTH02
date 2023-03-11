<?php
    declare(strict_types=1);                                 // Use strict types
    include_once(realpath(dirname(__FILE__) . '/../../bootstrap.php'));
?>
<?php
    if(!isset($_SESSION['username'])){
        include  APP_ROOT . '\includes\header.php';
    }else{
        include  APP_ROOT . '\includes\headerIsLogin.php';
    }
?>
    <main>
        <?php include  APP_ROOT . '\includes\slideShow.php'?>
        <?php include  APP_ROOT . '\views\article\list_article.php'?>
    </main>
<?php include APP_ROOT . '/includes/footer.php'?>
