<?php
include("configs/DBConnection.php");
include("models/Article.php");
class CategoryService {
     private $db =new DBConnection();
     
     public function __construct1(){ }
     public function __construct2($db){
         $this->db =$db;
     }
     

     public function  getAllcategory(){
         $query = "SELECT * FROM `theloai`";
         $result = $this->db->query($query);
         $categories = [];
         while($row = $result->fetch(PDO::FETCH_ASSOC)){
             $category = new Category($row['ma_tloai'],$row['ten_tloai']);
             $categories[] = $category;
         }
     }
 
     public function getCategoryById($id){
         $query = "SELECT * FROM `theloai` WHERE `ma_tloai`=:id";
         $result = $this->db->prepare($query);
         $result->execute([$id]);
         $row = $result->fetch(PDO::FETCH_ASSOC);
         
         $categories = new Category($row['ma_tloai'],$row['ten_tloai']) ;
 
     }

     public function createCategory($ma_tloai,$ten_tloai){
        $query = "INSERT INTO `theloai`(`ma_tloai`, `ten_tloai`) VALUES (:ma_tloai,:ten_tloai)";
        $result = $this->db->query($query);
        $result->execute([':ma_tloai'=>$ma_tloai,':ten_tloai'=>$ten_tloai]);
        return $result->rowCount();
     }

     public function editCategory($ma_tloai,$ten_tloai,$id){
        $query = "UPDATE `theloai` SET `ma_tloai`=:ma_tloai,`ten_tloai`=:ten_tloai WHERE `ma_tloai`= :id";
        $result = $this->db->prepare($query);
        $result->execute([':ma_tloai'=>$ma_tloai,':ten_tloai'=>$ten_tloai,':id'=>$id]);
        return $result->rowCount();
     }

     public function deleteCategory($id){
        $query = "DELETE FROM `theloai` WHERE `ma_tloai` = $id ";
        $result = $this->db->prepare($query);
        $result->execute([$id]);
        return $result->rowCount();
     }

 }