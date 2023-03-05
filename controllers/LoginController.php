<?php
include("services/LoginService.php");
class LoginController{
    
    public function renderLogin(){
        $msg="";
        include("views/login/login.php");
    }

    public function renderSignup(){
        $msg="";
        $msg2="";
        include("views/login/signup.php");
    }

    
    public function verifyLogin(){
        $verifyLogin = new LoginService();
        $verifyLoginRes = $verifyLogin->verifyLogin();
        if($verifyLoginRes === 1){
            include("views/admin/index.php");
        }else if($verifyLoginRes === 0){
            include("views/home/index.php");
        }else{
            $msg="Tai khoan hoac mat khau khong dung";
            include("views/login/login.php");
        }
    }


    public function verifySignup(){
        $verifySignup = new LoginService();
        $verifySignupRes = $verifySignup->verifySignup();  
        if($verifySignupRes === 0){
            $msg='Mật khẩu nhập lại không chính xác';
            include("views/login/signup.php");
        }else if($verifySignupRes === 1){
            $msg="Tài khoản đã tồn tại";
            include("views/login/signup.php");
        }else{
            include("views/login/login.php");
            $msg2="Đăng kí thành công";
        }


    }
}
?>