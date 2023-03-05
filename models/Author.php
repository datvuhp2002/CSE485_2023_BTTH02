<?php
class Author{
    private $maTgia;
    private $tenTgia;
    private $hinhAnh;
    public function __construct($maTgia,$tenTgia,$hinhAnh){
        $this->maTgia = $maTgia;
        $this->tenTgia = $tenTgia;
        $this->hinhAnh = $hinhAnh;
    }


    // Setters
    public function setTenTgia($tenTgia) {
        $this->tenTgia = $tenTgia;
    }
    public function setHinhAnh($hinhAnh) {
        $this->hinhAnh = $hinhAnh;
    }

    // Getters
    public function getMaTgia() {
        return $this->maTgia;
    }

    public function getTenTgia() {
        return $this->tenTgia;
    }
    public function getHinhAnh() {
        return $this->hinhAnh;
    }
}
?>