<?php
    require_once 'pdo.php';

    function show_sanpham(){
        $sql ='select * from san_pham';
        $kq = pdo_query($sql); //truy vấn
        return $kq; //trả dữ liệu
    }
?>