<?php
    require_once 'model/pdo.php';
    require_once 'model/loai.php';
    require_once 'model/sanpham.php';
    // ìn lu header
    include 'view/header.php';

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'category':
                $danhmuc = show_danhmuc();
                $sanpham = show_sanpham();
                if(isset($_GET['id_loai'])){
                    $sanpham = show_theoloai($_GET['id_loai']);
                }
                else{
                    $sanpham = show_sanpham();
                }
                include_once 'view/category.php';
                break;
            case 'product':
                $sanpham = show_sanpham();
                $chitiet = chitiet($_GET['id']);
                include_once 'view/product.php';
                break;
            case 'checkout':
                include_once 'view/checkout.php';
                break;
            case 'cart':
                $sanpham = show_sanpham();
                include_once 'view/cart.php';
                break;
            case 'contact':
                $sanpham = show_sanpham();
                include_once 'view/contact.php';
                break;
            default:
                include 'view/home.php';
                break;
        }
    }
    else{
        include 'view/home.php';
    }
    include 'view/footer.php';
?>