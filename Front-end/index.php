<?php
    require 'global.php';
    require_once 'model/pdo.php';
    require_once 'model/loai.php';
    require_once 'model/lienhe.php';
    require_once 'model/sanpham.php';
    // ìn lu header
    include 'view/header.php';

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'category':
                if(isset($_POST['search']) && $_POST['search']){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['id_loai'])){
                    $id_loai=$_GET['id_loai'];
                    // $sanpham = show_theoloai($_GET['id_loai']);
                }
                else{
                    $id_loai=0;
                }
                if(isset($_GET['page']) && ($_GET['page']>0)){
                    $page= $_GET['page'];
                }else{
                    $page=1;
                }
                $danhmuc = show_danhmuc();
                $sanpham = show_sanpham($id_loai,$kyw,$page);
                $tongsp = count(tongsp($id_loai));
                $phantrang = phantrang($id_loai,$page,$tongsp);
                include 'view/category.php';
                break;
            case 'product':
                $sanpham = show_sanpham_home();
                $chitiet = chitiet($_GET['id']);
                include_once 'view/product.php';
                break;
            case 'checkout':
                include_once 'view/checkout.php';
                break;
            case 'cart':
                $sanpham = show_sanpham_home();
                include_once 'view/cart.php';
                break;
            case 'contact':
                if(isset($_POST['send']) && $_POST['send']){
                    $ten = $_POST['ten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $noidung = $_POST['noidung'];
                    insertContact($ten,$email,$sdt,$noidung);
                }
                $sanpham = show_sanpham_home();
                include_once 'view/contact.php';
                break;
            default:
                $spmoi = show_sanpham_moi_nhat();
                $sphome = show_sanpham_home();
                include 'view/home.php';
                break;
        }
    }
    else{
        $danhmuc = show_danhmuc();
        $spmoi = show_sanpham_moi_nhat();
        $sphome = show_sanpham_home();
        include 'view/home.php';
    }
    include 'view/footer.php';
?>