<?php
    function show_lien_he(){
        $sql="select * from lien_he";
        $kq=pdo_query($sql);
        return $kq;
    }
    function insertContact($ten,$email,$sdt,$noidung){
        $sql="INSERT INTO lien_he (ten,email,sdt,noi_dung) VALUES ('$ten','$email','$sdt','$noidung')";
        pdo_execute($sql);
    }
?>