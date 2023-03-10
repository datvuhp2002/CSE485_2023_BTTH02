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
        if(isset($_POST['txttieude']) && isset($_POST['txtten_bhat']) && isset($_POST['txttomtat']) && isset($_POST['txtnoidung']) && isset($_POST['txthinhanh']) && isset($_POST['txtma_tloai']) && isset($_POST['txtma_tgia'])){
            $admin->addArticle($_POST['txtten_bhat'], $_POST['txttieude'], $_POST['txttomtat'], $_POST['txtnoidung'] , $_POST['txthinhanh'],$_POST['txtma_tloai'], $_POST['txtma_tgia']);
            header("Location:?controller=admin&action=article");
        }
        include("views/admin/addArticle.php");
    }
    public function editArticle(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $article = $admin->getArticle($_GET['id']);
        $categorySelected = $admin->getCategoryByArticleId($_GET['id']);
        $authorSelected = $admin->getAuthorByArticleId($_GET['id']);
        $categories = $admin->getAllCategories();
        $authors = $admin->getAllAuthors();
        if(isset($_POST['txttieude']) && isset($_POST['txtten_bhat']) && isset($_POST['txttomtat']) && isset($_POST['txtnoidung']) && isset($_POST['txthinhanh']) && isset($_POST['txtma_tloai']) && isset($_POST['txtma_tgia'])){
            $admin->editArtilce($_POST['txtma_bviet'], $_POST['txtten_bhat'], $_POST['txttieude'], $_POST['txttomtat'], $_POST['txtnoidung'] , $_POST['txthinhanh'],$_POST['txtma_tloai'], $_POST['txtma_tgia']);
            header("Location:?controller=admin&action=article");
        }
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
        
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        if(isset($_POST['txt_ten_tloai'])){
            $categories = $admin->createCategory($_POST['txt_ten_tloai']);
            if($categories){
                header("Location:?controller=admin&action=category"); 
                exit();
            }else {
                echo "<script>alert('thêm danh mục không thành công.');</script>";
            }
        }
        include("views/admin/addCategory.php");
        
    }
    public function editCategory(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $categories = $admin->getCategoryById($_GET['id']);
        if(isset($_POST['txt_ten_tloai'])){
            $admin->editCategory($_POST['txt_ten_tloai'],$_GET['id']);
        }
        include("views/admin/editCategory.php");
    }
    public function deleteCategory(){
        $adminService = new AdminService();
        $admin = $adminService->getAdminData();
        $deletedRows = $admin->deleteCategory($_GET['id']);
        if ($deletedRows > 0) {
            header("Location:?controller=admin&action=category"); 
            exit(); // Ngăn chặn các lệnh tiếp theo được thực thi
        } else {
            echo "<script>alert('Xóa danh mục không thành công.');</script>";
        }
        include("views/admin/deleteCategory.php");
   }
   //Author
   public function author(){
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    $authors = $admin->getAllAuthors();
    include("views/admin/author.php");
}
public function addAuthor(){
    include("views/admin/addAuthor.php");
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    if(isset($_POST['txtten_tgia']) && isset($_POST['txthinh_tgia'])){
        $admin->createAuthor($_POST['txtten_tgia'],$_POST['txthinh_tgia']);
    }
}
public function editAuthor(){
    
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    $authors = $admin->getAuthorById($_GET['id']);
    if(isset($_POST['txtten_tgia'])){
        $admin->editAuthor($_POST['txtten_tgia'],$_POST['hinh_tgia'],$_GET['id']);
    }
    include("views/admin/editAuthor.php");
}
public function deleteAuthor(){
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    $deletedRows = $admin->deleteAuthor($_GET['id']);
    if ($deletedRows > 0) {
        header("Location:?controller=admin&action=author"); 
        exit(); // Ngăn chặn các lệnh tiếp theo được thực thi
    } else {
        echo "<script>alert('Xóa danh mục không thành công.');</script>";
    }
    include("views/admin/deleteAuthor.php");
}

//user
public function user(){
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    $users = $admin->getAllUser();
    include("views/admin/user.php");
}
public function addUser(){
    
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    if(isset($_POST['txt_Username'])&&isset($_POST['txt_Password'])&&isset($_POST['txt_Role'])){
        $users = $admin->createUser($_POST['txt_Username'],$_POST['txt_Password'],$_POST['txt_Role']);
        if($users>0){
            header("Location:?controller=admin&action=user"); 
            exit();
        }else {
            echo "<script>alert('thêm user không thành công.');</script>";
        }
    }
    include("views/admin/addUser.php");
    
}
public function editUser(){
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    $users = $admin->getUserbyId($_GET['id']);
    if( isset($_POST['txt_Username'])&&isset($_POST['txt_Password'])&&isset($_POST['txt_Role']) )
    {
        $admin->editUser($_POST['txt_Username'],$_POST['txt_Password'],$_POST['txt_Role'],$_GET['id']);
    }
    include("views/admin/editUser.php");
}
public function deleteUser(){
    $adminService = new AdminService();
    $admin = $adminService->getAdminData();
    $deletedRows = $admin->deleteUser($_GET['id']);
    if ($deletedRows > 0) {
        header("Location:?controller=admin&action=user"); 
        exit(); // Ngăn chặn các lệnh tiếp theo được thực thi
    } else {
        echo "<script>alert('Xóa danh mục không thành công.');</script>";
    }
    include("views/admin/deleteCategory.php");
}

}
?>