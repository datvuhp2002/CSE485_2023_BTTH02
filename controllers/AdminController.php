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

    //Category
    public function category(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $categories = $admin->getAllCategories();
        include("views/admin/category.php");
    }
    public function addCategory(){
        include("views/admin/addCategory.php");
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        if(isset($_POST['txt_ten_tloai'])){
            $categories = $admin->createCategory($_POST['txt_ten_tloai']);
        }
    }
    public function editCategory(){
        
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $categories = $admin->getCategoryById($_GET['id']);
        if(isset($_POST['txt_ten_tloai'])){
            $edit=$admin->editCategory($_POST['txt_ten_tloai'],$_GET['id']);
        }
        include("views/admin/editCategory.php");
    }
    public function deleteCategory(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $deletedRows = $admin->deleteCategory($_GET['id']);
        if ($deletedRows > 0) {
            header("Location: danh-sach-danh-muc.php"); // Chuyển hướng đến trang danh sách danh mục
            exit(); // Ngăn chặn các lệnh tiếp theo được thực thi
        } else {
            echo "<script>alert('Xóa danh mục không thành công.');</script>";
        }
        include("views/admin/deleteCategory.php");
   }
    
}
?>