<?php
class BaiHat{
    private $id;
    private $tenBaiHat;
    private $caSi;
    private $idTheLoai;
    public function __construct($id, $tenBaiHat, $caSi, $idTheLoai){
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function gettenBaiHat(){
        return $this->tenBaiHat;
    }
    public function settenBaiHat($tenBaiHat){
        $this->tenBaiHat = $tenBaiHat;
    }

    public function getcaSi(){
        return $this->caSi;
    }
    public function setcaSi($caSi){
        $this->caSi = $caSi;
    }

    public function getidTheLoai(){
        return $this->idTheLoai;
    }
    public function setidTheLoai($idTheLoai){
        $this->idTheLoai = $idTheLoai;
    }
}