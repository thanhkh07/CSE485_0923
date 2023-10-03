<?php
require_once APP_ROOT.'/app/models/TheLoai.php';
class TheLoaiService{
    public function getAllTheLoai(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null){
            $sql = "SELECT * FROM theloai";
            $stmt = $conn->query($sql);

            $events = [];
            while ($row = $stmt->fetch()){
                $theloai = new TheLoai($row['id'], $row['tenTheLoai'],);
                $theloais[] = $theloai;
            }
            return $theloais;
        }
    }
}