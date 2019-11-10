<?php
    ob_start();
    session_start();
    include "../model/pdo.php";
    function getadmin($user,$pass){
        $sql="select * from admin where admin=? and adminPass=?";
        $kq=pdo_query_one($sql);
    }
    if(isset($_POST['login']) && $_POST['login']){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $kq=getuser($user,$pass);
        $count=count($kq);
        if($count>0){
            $_SESSION['idadmin']=$kq['id'];
            $_SESSION['nameadmin']=$kq['admin'];
            header('Location: index.php');
        }
    }
?>