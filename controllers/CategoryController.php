<?php
include("../services/CategoryService.php");
class ArticleController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        echo "Tương tác với View from Article";
    }
    public function add($ma_tloai,$ten_tloai){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $categoryService = new CategoryService();
        $categories = $categoryService->createCategory($ma_tloai,$ten_tloai);
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("");
    }
    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $categoryService = new CategoryService();
        $categories[] = $categoryService->getAllcategory();
        // echo "Tương tác với Services/Models from category";
        // Nhiệm vụ 2: Tương tác với View
        include("views/admin/category.php");
    }
}
?>