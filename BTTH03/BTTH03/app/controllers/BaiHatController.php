<?php
require_once APP_ROOT.'/app/services/BaiHatService.php';
class BaiHatController{
    public function index(){

        $BaiHatService = new BaiHatService();
        $baihats = $BaiHatService->getAllBaiHat();

        include APP_ROOT.'/app/views/home/index.php';
    }
}