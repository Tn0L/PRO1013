<?php
    function loadProduct(){
        $sql="select * from san_pham";
        $kq=pdo_query($sql);
        return $kq;
    }
    function insertProduct($nameProduct,$categoryProduct,$priceProduct,$describeProduct){
        $sql="INSERT INTO san_pham (ten_san_pham,loai_san_pham,gia,mo_ta) VALUES ('$nameProduct','$categoryProduct','$priceProduct','$describeProduct')";
        pdo_execute($sql);
    }
    function deleteProduct($idProduct){
        $sql = "DELETE FROM san_pham WHERE ma_san_pham= $idProduct";
        pdo_execute($sql);
    }
    function editProduct($idProduct,$nameProduct,$categoryProduct,$priceProduct,$describeProduct){
        $sql = "UPDATE san_pham SET (ten_san_pham,loai_san_pham,gia,mo_ta) VALUES ('$nameProduct','$categoryProduct','$priceProduct','$describeProduct') WHERE ma_san_pham='$idProduct'";
        pdo_execute($sql);
    }
    function listColor($test){
        $sql = 'SELECT * FROM mau WHERE ma_san_pham='.$test ;
        $kq1= pdo_query($sql);
        return $kq1;
    }
    function listSize($size){
        $sql2 =" select * from kich_thuoc where ma_mau=?";
        $kq2=pdo_query($sql2,$size);
        return $kq2;
    }
?>