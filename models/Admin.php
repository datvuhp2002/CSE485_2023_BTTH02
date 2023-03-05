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
        public function getAllCategories() {
            $stmt = $this->db->query('SELECT * FROM theloai');
            $this->categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
            return $this->categories;
        }
        
        public function setCategories($categories) {
            $this->categories = $categories;
        }
    
        public function getAllAuthors() {
            $stmt = $this->db->query('SELECT * FROM tacgia');
            $this->authors = $stmt->fetchAll(PDO::FETCH_CLASS, 'Author');
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