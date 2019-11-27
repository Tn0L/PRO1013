<?php
    function loadCategories(){
        $sql="select * from loai";
        $kq=pdo_query($sql);
        return $kq;
    }
    function insertCategories($name){
        $sql="INSERT INTO loai (ten_loai) VALUES ('$name')";
        pdo_execute($sql);
    }
    function deleteCategories($id){
        $sql = "DELETE FROM loai WHERE ma_loai= $id";
        pdo_execute($sql);
    }
    function editCategories($name,$id){
        $sql = "UPDATE loai SET ten_loai ='$name' WHERE ma_loai='$id'";
        pdo_execute($sql);
    }
?>