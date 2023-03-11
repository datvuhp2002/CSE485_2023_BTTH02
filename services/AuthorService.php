<?php
include("configs/DBConnection.php");
include("models/Author.php");
class CategoryService {
    private $dbConn =new DBConnection();
    private $db=$dbConn->getConnection();
    
    public function __construct1(){}
    
    public function  getAllauthor(){
        $query = "SELECT * FROM `tacgia`";
        $result = $this->db->query($query);
        $authors = [];
        while($row = $result->fetch()){
            $author = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']);
            array_push($authors,$author);
        }
        return $authors;
    }

    public function getAuthorById($id){
        $query = "SELECT * FROM `tacgia` WHERE `ma_tgia`=:id";
        $result = $this->db->prepare($query);
        $result->execute([$id]);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        
        $authors = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']) ;
        return $authors;
    }

    public function createAuthor($ma_tgia,$ten_tgia,$hinh_tgia){
       $query = "INSERT INTO `tacgia`(`ma_tgia`, `ten_tgia`,`hinh_tgia`) VALUES (:ma_tgia,:ten_tgia,:hinh_tgia)";
       $result = $this->db->query($query);
       $result->execute([':ma_tloai'=>$ma_tgia,':ten_tgia'=>$ten_tgia,':hinh_tgia'=>$hinh_tgia]);
       return $result->rowCount();
    }

    public function editAuthor($ma_tgia,$ten_tgia,$hinh_tgia,$id){
       $query = "UPDATE `tacgia` SET `ma_tgia`=:ma_tgia,`ten_tgia`=:ten_tgia,`hinh_tgia`=:hinh_tgia WHERE `ma_tgia`= :id";
       $result = $this->db->prepare($query);
       $result->execute([':ma_tgia'=>$ma_tgia,':ten_tgia'=>$ten_tgia,':hinh_tgia'=>$hinh_tgia,':id'=>$id]);
       return $result->rowCount();
    }

    public function deleteAuthor($id){
       $query = "DELETE FROM `tacgia` WHERE `ma_tgia` = $id ";
       $result = $this->db->prepare($query);
       $result->execute([$id]);
       return $result->rowCount();
    }

}
?>