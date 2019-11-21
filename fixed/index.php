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
                include_once 'view/category.php';
                break;
            case 'single_product':
                $chitiet=chitiet($_GET['id']);
                include_once 'view/single_product.php';
                break;
            case 'tracking':
                include_once 'view/tracking.php';
                break;
            case 'cart':
                include_once 'view/cart.php';
                break;
            case 'contact':
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