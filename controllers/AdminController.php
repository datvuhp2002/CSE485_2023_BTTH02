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
        include("views/admin/article.php");
    }
    public function add(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        include("views/admin/addArticle.php");

    }
    public function edit(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $article = $admin->getArticle($_GET['id']);
        $categories = $admin->getAllCategories();
        $authors = $admin->getAllAuthors();
        include("views/admin/editArticle.php");
    }
    public function delete(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $article = $admin->getArticle($_GET['id']);
        include("views/admin/deleteArticle.php");
    }
}
?>