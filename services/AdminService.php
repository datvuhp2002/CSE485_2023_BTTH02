<?php
include("configs/DBConnection.php");
include("models/Admin.php");
class AdminService{
    public function getAdminData(){
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();
        // administrator
        $adminData = new Admin($conn);
        return $adminData;
    }
}
?>