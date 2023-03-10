 <?php
 class Category{
     private  $ma_tloai;
     private $ten_tloai;
 
     public function __construct($ma_tloai,$ten_tloai){
         $this->ma_tloai = $ma_tloai;
         $this->ten_tloai = $ten_tloai;
     }
     public function setId($ma_tloai){ //set ma_tloai
         $this->ma_tloai=$ma_tloai;
    }
    public function setName($ten_tloai){//set ten_tloai
         $this->ten_tloai=$ten_tloai;
    }

     public function getId(){ //get ma_tloai
         return $this->ma_tloai;
     }
 
     public function getName(){//get ten_tloai
         return $this->ten_tloai;
     }
 
 }
?>