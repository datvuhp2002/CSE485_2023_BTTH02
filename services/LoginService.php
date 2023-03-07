<?php
include("configs/DBConnection.php");
include("models/Login.php");
class LoginService{
    public function verifyLogin() {
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();
        // B2. Truy vấn
        $UserName = $_POST['username'];
        $Password = $_POST['password'];
        $sql = "SELECT * FROM users Where UserName = '$UserName' AND Password = '$Password'";
        $stmt = $conn->query($sql);
 
        if ($stmt->rowCount()) {
            session_start();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['username'] = $UserName;
            $row['Role'] != 'admin' ? $res=0 :$res=1;
            return $res;
        }else{
        return false;
        }
    }

    public function verifySignup() {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        // $UserName = $_POST['username'];
        // $Password = $_POST['password'];
        $UserName = $_POST['signup_username'];
        $Password = $_POST['signup_password'];
        $re_password = $_POST['re_password'];
        function check_username($conn, $UserName){
            $sql1 = "SELECT * FROM users WHERE UserName = '$UserName'";
            $stmt = $conn->query($sql1);
            if($stmt->rowCount()>0){
                return true;
            } else{
                return false;
            }
    
        }
    
        if(isset($_POST['signup_username']) && isset($_POST['signup_password']) && isset($_POST['re_password'])){

    
    
            if($Password != $re_password){
                // header( "refresh:1;url=signup.php" );
                // echo 'Mật khẩu nhập lại không chính xác';
                $res = 0;
            } else if (check_username($conn, $UserName)){
                // header( "refresh:1;url=signup.php" );
                // echo "Tài khoản đã tồn tại";
                $res = 1;
            } else{
                $sql = "INSERT INTO users (UserName, Password, Role) VALUES ('$UserName','$Password','user')";
                $result = $conn->query($sql);
                // if($result){
                //     echo "Đăng kí thành công";
                //     header( "refresh:1;url=login.php" );
                // }
                // else{
                //     echo "Đăng kí thất bại";
                // }
                $res = true;
            }
        }

        return $res;
    }
}
?>