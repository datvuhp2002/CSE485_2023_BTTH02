<?php
class Article{
    private $maBviet;
    private $tieuDe;
    private $tenBhat;
    private $maTloai;
    private $tomTat;
    private $noiDung;
    private $maTgia;
    private $ngayViet;
    private $hinhAnh;
    public function __construct($maBviet,$tieuDe, $tenBhat,$maTloai,$tomTat,$noiDung,$maTgia,$ngayViet,$hinhAnh){
        $this->maBviet = $maBviet;
        $this->tieuDe = $tieuDe;
        $this->tenBhat = $tenBhat;
        $this->maTloai = $maTloai;
        $this->tomTat = $tomTat;
        $this->noiDung = $noiDung;
        $this->maTgia = $maTgia;
        $this->hinhAnh = $hinhAnh;
        $this->ngayViet = $ngayViet;
    }
    // Setters
    public function setTieuDe($tieuDe) {
        $this->tieuDe = $tieuDe;
    }
    public function setTenBhat($tenBhat) {
        $this->tenBhat = $tenBhat;
    }
    public function setMaTloai($maTloai) {
        $this->maTloai = $maTloai;
    }
    public function setTomTat($tomTat) {
        $this->tomTat = $tomTat;
    }
    public function setNoiDung($noiDung) {
        $this->noiDung = $noiDung;
    }
    public function setMaTgia($maTgia) {
        $this->maTgia = $maTgia;
    }
    public function setHinhAnh($hinhAnh) {
        $this->hinhAnh = $hinhAnh;
    }

    // Getters
    public function getMaBViet() {
        return $this->maBviet;
    }
    public function getTieuDe() {
        return $this->tieuDe;
    }

    public function getTenBhat() {
        return $this->tenBhat;
    }

    public function getMaTloai() {
        return $this->maTloai;
    }

    public function getTomTat() {
        return $this->tomTat;
    }

    public function getNoiDung() {
        return $this->noiDung;
    }

    public function getMaTgia() {
        return $this->maTgia;
    }

    public function getNgayViet() {
        return $this->ngayViet;
    }

    public function getHinhAnh() {
        return $this->hinhAnh;
    }
}
?>