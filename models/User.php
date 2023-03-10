<?php 
    class User {
        private $id;
        private $username;
        private $password;
        private $role;
        private $ngaytao;

        public function __construct($id, $username, $password, $role,$ngaytao){
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->ngaytao = $ngaytao;
        }

        public function getId(){
            return $this->id;
        }
        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getRole(){
            return $this->role;
        }

        public function getNgaytao(){
            return $this->ngaytao;
        }

        public function setId($id){
            $this->$id = $id;
        }

        
        public function setUsername($username){
            $this->$username = $username;
        }

        
        public function setPassword($password){
            $this->$password = $password;
        }

        
        public function setRole($role){
            $this->$role = $role;
        }

        
        public function setNgaytao($ngaytao){
            $this->$ngaytao = $ngaytao;
        }

    }
?>