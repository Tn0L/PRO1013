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
    // color
    function listColor($idColor){
        $sql = 'SELECT * FROM mau WHERE ma_san_pham='.$idColor ;
        $kq1= pdo_query($sql);
        return $kq1;
    }
    function insertColor($colorProduct, $color, $img){
        $sql="INSERT INTO mau (mau, ma_san_pham,hinh) VALUES ('$color','$colorProduct','$img')";
        pdo_execute($sql);
    }
    function deleteColor($idColor){
        $sql = "DELETE FROM mau WHERE id= $idColor";
        pdo_execute($sql);
    }
    function editColor($idColor,$color){
        $sql = "UPDATE mau SET mau='$color'  WHERE id='$idColor'";
        pdo_execute($sql);
    }
    // size
    function listSize($size){
        $sql ='SELECT * FROM kich_thuoc WHERE id_mau='.$size;
        $kq2=pdo_query($sql);
        return $kq2;
    }
    function insertSize($sizeColor,$size,$count){
        $sql="INSERT INTO kich_thuoc (id_mau,size,so_luong) VALUES ('$sizeColor','$size','$count')";
        pdo_execute($sql);
    }
    function deleteSize($idSize){
        $sql = "DELETE FROM kich_thuoc WHERE id_size= $idSize";
        pdo_execute($sql);
    }
    function editSize($idSize,$size,$count){
        $sql = "UPDATE kich_thuoc SET so_luong='$count', size='$size'  WHERE id_size='$idSize'";
        pdo_execute($sql);
    }
?>