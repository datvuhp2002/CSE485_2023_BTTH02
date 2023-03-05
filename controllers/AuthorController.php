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
    public function add(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        // echo "Tương tác với Services/Models from Author";
        // Nhiệm vụ 2: Tương tác với View
        include("views/author/add_author.php");
    }
    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $articelService = new ArticleService();
        $articles = $articelService->getAllArticles();
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("views/article/list_article.php");
    }
}
?>