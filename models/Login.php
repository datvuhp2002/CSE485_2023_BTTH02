<?php
class Login {
    private $UserName;
    private $Password;
    private $Role;

    public function __construct($UserName, $Password, $Role) {
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->Role = $Role;
    }
''
    public function SetUserName($UserName) {
        $this->UserName = $UserName;
    }

    public function SetPassword($Password) {
        $this->Password = $Password;
    }

    public function SetRole($Role) {
        $this->Role = $Role;
    }

    public function getUserName() {
        return $this->UserName;
    }


    public function getPassword() {
        return $this->Password;
    }

    public function getRole() {
        return $this->Role;
    }

      


    

    // các phương thức getter và setter
}

?>