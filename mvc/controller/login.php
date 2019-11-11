<?php
    include "../model/pdo.php";
    function getadmin($user,$pass){
        $sql="select * from admin where admin=? and adminPass=?";
        $kq=pdo_query_one($sql,$user,$pass);
        return $kq;
    }
    if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $kt=getadmin($user,$pass);
        $kiemtra=count($kt);
        if($kiemtra>0){
            $_SESSION['idadmin']=$kt['idAdmin'];
            $_SESSION['nameadmin']=$kt['admin'];
            $_SESSION['imgadmin']=$kt['adminAvatar'];
            header('Location: index.php');
        }
    }
?>