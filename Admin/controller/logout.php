<?php 
    ob_start();
    session_start();
    if(isset($_SESSION['idadmin'])){
        unset($_SESSION['idadmin']);
    }
                  
?>