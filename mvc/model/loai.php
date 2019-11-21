<?php
    require_once 'pdo.php';
    
    function show_loai(){
        $sql = 'select * from loai';
        $data = pdo_query($sql);
        return $data;
    }
?>