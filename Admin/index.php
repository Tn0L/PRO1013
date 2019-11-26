<?php
    include 'view/header.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'home':
                include_once 'view/home.php';
                break;
            case 'category':
                include_once 'view/add-category.php';
                break;
            case 'product':
                include_once 'view/add-product.php';
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