<?php
    require_once 'pdo.php';
    function show_color(){
        $sql = "SELECT * FROM mau";
        $data = pdo_query($sql);
        return $data;
    }
?>