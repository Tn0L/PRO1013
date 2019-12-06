<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['idAdmin'])){
        header('Location: login.php');
    }

?>