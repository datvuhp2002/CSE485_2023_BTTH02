<?php
include("configs/DBConnection.php");
include("models/Detail.php");   
class DetailService{
    public function getDetailData() {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
         $detailData = new Detail($conn);
         return $detailData;
    }
}
?>