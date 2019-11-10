<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['idadmin'])){
        header('Location: login.php');
    }

?>