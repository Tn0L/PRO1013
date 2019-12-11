<?php
    include 'model/pdo.php';
    include "./controller/check.php";
    include 'view/header.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'home':
                include_once 'view/home.php';
                break;
            case 'category':
                include 'model/category.php';
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name = $_POST['nameCategory'];
                    insertCategories($name);
                }
                else if(isset($_GET['delete']) && $_GET['delete']){
                    $id = $_GET['delete'];
                    deleteCategories($id);
                }
                else if(isset($_POST['edit']) && $_POST['edit']){
                    $name = $_POST["nameCategory"];
                    $id = $_POST["id"];
                    editCategories($name,$id);
                }
                include_once 'view/add-category.php';
                break;
            case 'product':
                include 'model/product.php';
                if(isset($_POST['submit']) && $_POST['submit']){
                    $nameProduct = $_POST['nameProduct'];
                    $categoryProduct = $_POST['categoryProduct'];
                    $priceProduct = $_POST['priceProduct'];
                    $describeProduct = $_POST['describeProduct'];
                    insertProduct($nameProduct,$categoryProduct,$priceProduct,$describeProduct);
                }
                else if(isset($_GET['delete']) && $_GET['delete']){
                    $idProduct = $_GET['delete'];
                    deleteProduct($idProduct);
                }
                else if(isset($_POST['edit']) && $_POST['edit']){
                    $idProduct = $_POST['idProduct'];
                    $nameProduct = $_POST['nameProduct'];
                    $categoryProduct = $_POST['categoryProduct'];
                    $priceProduct = $_POST['priceProduct'];
                    $describeProduct = $_POST['describeProduct'];
                    editProduct($idProduct,$nameProduct,$categoryProduct,$priceProduct,$describeProduct);
                }
                else if(isset($_POST['submit1']) && $_POST['submit1']){
                    $color = $_POST['color'];
                    $colorProduct = $_POST['colorProduct'];
                    $img=$_FILES["img"]["name"];
                    $target_file="../uploads/products/".$img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    insertColor($colorProduct,$color,$img);
                }
                else if(isset($_GET['delete1']) && $_GET['delete1']){
                    $idColor = $_GET['delete1'];
                    deleteColor($idColor); 
                }
                else if(isset($_POST['edit1']) && $_POST['edit1']){
                    $idColor = $_POST['idColor'];
                    $color = $_POST['color'];
                    editColor($idColor,$color);
                }
                else if(isset($_POST['submit2']) && $_POST['submit2']){
                    $colorSize = $_POST['colorSize'];
                    $size = $_POST['size'];
                    $count = $_POST['count'];
                    insertSize($colorSize,$size,$count);
                }
                else if(isset($_GET['delete2']) && $_GET['delete2']){
                    $idSize = $_GET['delete2'];
                    deleteSize($idSize);
                }
                else if(isset($_POST['edit2']) && $_POST['edit2']){
                    $idSize = $_POST['idSize'];
                    $size = $_POST['size'];
                    $count = $_POST['count'];
                    editSize($idSize,$size,$count);
                }
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