<?php
    include 'Article.php';

    class Detail{
    private $data;
    private $db;
    public function __construct(PDO $db) {
        $this->db = $db;
    }
    public function getDetail($id){
        $stmt = $this->db->query('SELECT * FROM baiviet where ma_bviet = ' . $id);
        while($row = $stmt->fetch()){
            $this->data = new Article($row['ma_bviet'],$row['tieude'], $row['ten_bhat'], $row['ma_tloai'], $row['tomtat'], $row['noidung'], $row['ma_tgia'], $row['ngayviet'], $row['hinhanh']);
        }
        return $this->data;
    }
    }
?>