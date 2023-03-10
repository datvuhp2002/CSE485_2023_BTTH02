<?php
include("services/ArticleService.php");
class ArticleController{
    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $articelService = new ArticleService();
        $articles = $articelService->getAllArticles();
        include("views/article/list_article.php");
    }
}
?>