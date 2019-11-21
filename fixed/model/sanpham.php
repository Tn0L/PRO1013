<?php
    require_once 'pdo.php';
    function show_sanpham(){
        $sql = "SELECT * FROM san_pham";
        $data = pdo_query($sql);
        return $data;
    }
    function chitiet($masp){
        $sql = 'SELECT * FROM san_pham WHERE ma_san_pham='.$masp;
        $data = pdo_query_one($sql);
        return $data;
    }
?>