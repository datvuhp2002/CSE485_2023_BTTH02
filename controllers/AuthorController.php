<?php
include("services/AuthorService.php");
class AuthorController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        echo "Tương tác với Services/Models from Author";
        // Nhiệm vụ 2: Tương tác với View
        echo "Tương tác với View from Author";
    }
    public function add($ma_tgia,$ten_tgia,$hinh_tgia){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $authorService = new AuthorService();
        $authors = $authorService->createAuthor($ma_tgia,$ten_tgia,$hinh_tgia);
        // echo "Tương tác với Services/Models from Author";
        // Nhiệm vụ 2: Tương tác với View
        include("");
    }
    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthors();
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("");
    }
}
?>