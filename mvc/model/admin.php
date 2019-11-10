<?php
    function getadmin($user,$pass){
        $sql= "select * from user when where admin=? and adminPass=? ";
        $kq=pdo_query_one($sql);
        return $kq;
    }
?>