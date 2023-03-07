<?php
include("services/AdminService.php");
class AdminController{
    // Hàm xử lý hành động index
    public function index(){
        include("views/admin/index.php");
    }
    public function article(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $articles = $admin->getAllArticles();
        var_dump($articles);
        include("views/admin/article.php");
    }
    public function addArticle(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $categories = $admin->getAllCategories();
        $authors = $admin->getAllAuthors();
        include("views/admin/addArticle.php");
    }
    public function editArticle(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $article = $admin->getArticle($_GET['id']);
        $categories = $admin->getAllCategories();
        $authors = $admin->getAllAuthors();
        include("views/admin/editArticle.php");
    }
    public function deleteArticle(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $admin->deleteArticle($_GET['id']);
        include("views/admin/deleteArticle.php");
    }
}
?>