<?php
include("services/DetailService.php");
class DetailController{
    public function index(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $detailService = new DetailService();
        $detail = $detailService->getDetailData();
        $detail = $detail->getDetail($id);
        include("views/detail/index.php");
    }

}
?>