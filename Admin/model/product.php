<?php
    function loadProduct(){
        $sql="SELECT * from loai l INNER JOIN san_pham sp ON l.ma_loai=sp.loai_san_pham";
        $kq=pdo_query($sql);
        return $kq;
    }
    function loadCategories(){
        $sql="select * from loai";
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
        $sql = "UPDATE san_pham SET ten_san_pham='$nameProduct', loai_san_pham='$categoryProduct', gia='$priceProduct', mo_ta='$describeProduct'  WHERE ma_san_pham='$idProduct'";
        pdo_execute($sql);
    }
    function listColor($test){
        $sql = 'SELECT * FROM mau WHERE ma_san_pham='.$test ;
        $kq1= pdo_query($sql);
        return $kq1;
    }
    function insertColor($nameProduct,$categoryProduct,$priceProduct,$describeProduct){
        $sql="INSERT INTO san_pham (ten_san_pham,loai_san_pham,gia,mo_ta) VALUES ('$nameProduct','$categoryProduct','$priceProduct','$describeProduct')";
        pdo_execute($sql);
    }
    function deleteColor($idProduct){
        $sql = "DELETE FROM san_pham WHERE ma_san_pham= $idProduct";
        pdo_execute($sql);
    }
    function editColor($idProduct,$nameProduct,$categoryProduct,$priceProduct,$describeProduct){
        $sql = "UPDATE san_pham SET ten_san_pham='$nameProduct', loai_san_pham='$categoryProduct', gia='$priceProduct', mo_ta='$describeProduct'  WHERE ma_san_pham='$idProduct'";
        pdo_execute($sql);
    }
    function listSize($size){
        $sql ='SELECT * FROM kich_thuoc WHERE id_mau='.$size;
        $kq2=pdo_query($sql);
        return $kq2;
    }
    function insertSize($nameProduct,$categoryProduct,$priceProduct,$describeProduct){
        $sql="INSERT INTO san_pham (ten_san_pham,loai_san_pham,gia,mo_ta) VALUES ('$nameProduct','$categoryProduct','$priceProduct','$describeProduct')";
        pdo_execute($sql);
    }
    function deleteSize($idProduct){
        $sql = "DELETE FROM san_pham WHERE ma_san_pham= $idProduct";
        pdo_execute($sql);
    }
    function editSize($idProduct,$nameProduct,$categoryProduct,$priceProduct,$describeProduct){
        $sql = "UPDATE san_pham SET ten_san_pham='$nameProduct', loai_san_pham='$categoryProduct', gia='$priceProduct', mo_ta='$describeProduct'  WHERE ma_san_pham='$idProduct'";
        pdo_execute($sql);
    }
?>