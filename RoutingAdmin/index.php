<?php
    include 'view/header.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'category':
                include_once 'view/category.php';
                break;
            case 'single_product':
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
                include 'view/404.php';
                break;
        }
    }
    else{
        include 'view/home.php';
    }
    include 'view/footer.php';
?>