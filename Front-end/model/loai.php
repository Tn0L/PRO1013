<?php
    require_once 'pdo.php';
    function show_danhmuc(){
        $sql = "SELECT * FROM loai ORDER BY ma_loai desc";
        $data = pdo_query($sql);
        return $data;
    }
    function show_color(){
        $sql = "SELECT * FROM mau";
        $data = pdo_query($sql);
        return $data;
    }

?>