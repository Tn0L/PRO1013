<?php
    require_once 'pdo.php';
    function show_sanpham($id_loai=0,$kyw="",$page){
        $sql= "SELECT * FROM san_pham WHERE 1";
        global $soluong;
        $page=$page-1;
        if ($page==0){
            $fr=0;
            $to=$soluong;
        }else{
            $fr=$page*$soluong;
            $to=$soluong;
        }
        if($id_loai>0){
            $sql.=" AND loai_san_pham=" .$id_loai; 
        }
        if($kyw!=""){
            $sql.=" AND ten_san_pham like '%".$kyw."%'";
        }
        $sql.=" ORDER BY ma_san_pham desc";
        $sql.=" LIMIT ".$fr.",".$to;
        $data= pdo_query($sql);
        return $data;
    }
    function tongsp($id_loai=0){
        $sql= "SELECT * FROM san_pham WHERE 1";
        if($id_loai>0){
            $sql.=" AND loai_san_pham=" .$id_loai;
        }
        $data= pdo_query($sql);
        return $data;
    }
    function phantrang($id_loai,$page,$tongsp){
        global $soluong;
        $sotrang=ceil($tongsp/$soluong);
        $phantrang="";
        for ($i=0; $i < $sotrang; $i++) {
            if ($page==($i+1)){
                $class='class="active"';
            }
            else{
                $class='';
            } 
            $link="index.php?act=category&id_loai=".$id_loai."&page=".($i+1);
            $phantrang.= '<li '.$class.'><a href="'.$link.'">'.($i+1).'</a></li>';
        }
        return $phantrang;
    }
    function show_sanpham_home(){
        $sql = "SELECT * FROM san_pham LIMIT 12";
        $data = pdo_query($sql);
        return $data;
    }
    function show_sanpham_moi_nhat(){
        $sql = "SELECT * FROM san_pham ORDER BY ma_san_pham DESC LIMIT 8";
        $data = pdo_query($sql);
        return $data;
    }
    function chitiet($masp){
        $sql = 'SELECT * FROM san_pham WHERE ma_san_pham='.$masp;
        $data = pdo_query_one($sql);
        return $data;
    }
    function show_theoloai($loai){
        $sql = 'SELECT * FROM san_pham WHERE loai_san_pham='.$loai;
        $data = pdo_query($sql);
        return $data;
    }
?>  