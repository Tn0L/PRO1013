<?php
    ob_start();
    session_start();
    function getadmin($user,$pass){
        $sql="select * from admin where admin=? and adminPass=?";
        $kq=pdo_query_one($sql);
        return;
    }
    if(isset($_POST['login']) && $_POST['login']){
        $user=$_POST['user'];
        $pass=$_POST['pass'];

    }
?>