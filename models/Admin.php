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
        public function getAllCategories() {
            $stmt = $this->db->query('SELECT * FROM theloai');
            while($row = $stmt->fetch()){
                $category = new Category($row['ma_tloai'],$row['ten_tloai']);
                array_push($this->categories,$category);
            }
            return $this->categories;
        }
        
        public function setCategories($categories) {
            $this->categories = $categories;
        }
    
        public function getAllAuthors() {
            $stmt = $this->db->query('SELECT * FROM tacgia');
            while($row = $stmt->fetch()){
                $author = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']);
                array_push($this->authors,$author);
            }
            return $this->authors;
        }
        public function setAuthors($authors) {
            $this->authors = $authors;
        }
        public function getAllUsers() {
            $stmt = $this->db->query('SELECT * FROM users');
            $this->users = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
            return $this->users;
        }
        public function setUsers($users) {
            $this->users = $users;
        }
    }
?>