<?php
require_once APP_ROOT.'/app/models/BaiHat.php';
class BaiHatService{
    public function getAllBaiHat(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null){
            $sql = "SELECT * FROM baihat";
            $stmt = $conn->query($sql);

            $events = [];
            while ($row = $stmt->fetch()){
                $baihat = new BaiHat($row['id'], $row['tenBaiHat'], $row['caSi'], $row['idTheLoai']);
                $baihats[] = $baihat;
            }
            return $baihats;
        }
    }
}