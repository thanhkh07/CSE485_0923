<?php
require_once APP_ROOT.'/app/services/TheLoaiService.php';
class TheLoaiController{
    public function index(){

        $TheLoaiService = new TheLoaiService();
        $theloais = $TheLoaiService->getAllTheLoai();

        include APP_ROOT.'/app/views/home/index.php';
    }
}