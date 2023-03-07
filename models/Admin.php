<?php 
    include 'Article.php';
    include 'Category.php';
    include 'Author.php';

    class Admin {
        private $articles = [];
        private $categories = [];
        private $authors = [];
        private $users = [];
        private $db;
        public function __construct(PDO $db) {
            $this->db = $db;
        }
        public function getAllArticles() {
            $stmt = $this->db->query('SELECT * FROM baiviet');
            while($row = $stmt->fetch()){
                $article = new Article($row['ma_bviet'],$row['tieude'], $row['ten_bhat'], $row['ma_tloai'], $row['tomtat'], $row['noidung'], $row['ma_tgia'], $row['ngayviet'], $row['hinhanh']);
                array_push($this->articles,$article);
            }
            return $this->articles;
        }
        public function getArticle($id){
            $stmt = $this->db->query('SELECT * FROM baiviet where ma_bviet = ' . $id);
            while($row = $stmt->fetch()){
                $article = new Article($row['ma_bviet'],$row['tieude'], $row['ten_bhat'], $row['ma_tloai'], $row['tomtat'], $row['noidung'], $row['ma_tgia'], $row['ngayviet'], $row['hinhanh']);
                array_push($this->articles,$article);
            }
            return $this->articles;
        }
        public function setArticles($articles) {
            $this->articles = $articles;
        }   
        public function updateArticle($id) {
            $stmt = $this->db->query('SELECT * FROM baiviet where ma_bviet = ' . $id);
        }
        public function deleteArticle($id) {
            $stmt = $this->db->query('DELETE FROM baiviet WHERE ma_bviet =' . $id);
            $stmt->execute();
        }

        //==========================CATEGORY=====================================
        public function getAllCategories() {
            $stmt = $this->db->query('SELECT * FROM theloai');
            while($row = $stmt->fetch()){
                $category = new Category($row['ma_tloai'],$row['ten_tloai']);
                array_push($this->categories,$category);
            }
            return $this->categories;
        }
        public function getCategoryById($id){
            $query = "SELECT * FROM `theloai` WHERE `ma_tloai`=:id ";
            $result = $this->db->prepare($query);
            $result->execute([':id'=>$id]);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $categories=[];
            $category = new Category($row['ma_tloai'],$row['ten_tloai']) ;
            array_push($categories,$category);
            return $categories;
        }
        public function deleteCategory($id){
            $query = "DELETE FROM `theloai` WHERE `ma_tloai` = :id  ";
            $result = $this->db->prepare($query);
            $result->execute([':id'=>$id]);
            return $result->rowCount();
         }
         public function createCategory($ten_tloai){
            $query = "INSERT INTO `theloai`( `ten_tloai`) VALUES (:ten_tloai)";
            $result = $this->db->prepare($query);
            $result->execute([':ten_tloai'=>$ten_tloai]);
            return $result->rowCount();
            
         }
         public function editCategory($ten_tloai,$id){
            $query = "UPDATE `theloai` SET `ten_tloai`=:ten_tloai WHERE `ma_tloai`= :id";
            $result = $this->db->prepare($query);
            $result->execute([':ten_tloai'=>$ten_tloai,':id'=>$id]);
            return $result->rowCount();
         }
        public function setCategories($categories) {
            $this->categories = $categories;
        }
        //=============================================================================================


        public function getAllAuthors() {
            $stmt = $this->db->query('SELECT * FROM tacgia');
            while($row = $stmt->fetch()){
                $author = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']);
                array_push($this->authors,$author);
            }
            return $this->authors;
        }
        public function getAuthorById($id){
            $query = "SELECT * FROM `tacgia` WHERE `ma_tgia`=:id ";
            $result = $this->db->prepare($query);
            $result->execute([':id'=>$id]);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $authors=[];
            $author = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']) ;
            array_push($authors,$author);
            return $authors;
        }
        public function deleteAuthor($id){
            $query = "DELETE FROM `tacgia` WHERE `ma_tgia` = :id  ";
            $result = $this->db->prepare($query);
            $result->execute([':id'=>$id]);
            return $result->rowCount();
         }
         public function createAuthor($ten_tgia,$hinh_tgia){
            $query = "INSERT INTO `tacgia`( `ten_tgia`,`hinh_tgia`) VALUES (:ten_tgia, :hinh_tgia)";
            $result = $this->db->prepare($query);
            $result->execute([':ten_tgia'=>$ten_tgia,':hinh_tgia'=>$hinh_tgia]);
            return $result->rowCount();
            
         }
         public function editAuthor($ten_tgia,$hinh_tgia,$id){
            $query = "UPDATE tacgia SET ten_tgia = :ten_tgia, hinh_tgia = :hinh_tgia WHERE ma_tgia = :id";
            $result = $this->db->prepare($query);
            $result->execute([':ten_tgia'=>$ten_tgia,':hinh_tgia'=>$hinh_tgia,':id'=>$id]);
            return $result->rowCount();
         }
        public function setAuthors($authors) {
            $this->authors = $authors;
        }
    }
?>