<?php
    require_once 'pdo.php';
    function show_sanpham(){
        $sql = "SELECT * FROM san_pham";
        $data = pdo_query($sql);
        return $data;
    }
    function show_sanpham_home(){
        $sql = "SELECT * FROM san_pham LIMIT 12";
        $data = pdo_query($sql);
        return $data;
    }
    function show_sanpham_moi_nhat(){
        $sql = "SELECT * FROM san_pham ORDER BY ma_san_pham DESC LIMIT 8";
        $data = pdo_query($sql);
        return $data;
    }
    function chitiet($masp){
        $sql = 'SELECT * FROM san_pham WHERE ma_san_pham='.$masp;
        $data = pdo_query_one($sql);
        return $data;
    }
    function show_theoloai($loai){
        $sql = 'SELECT * FROM san_pham WHERE loai_san_pham='.$loai;
        $data = pdo_query($sql);
        return $data;
    }
?>