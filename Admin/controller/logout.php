<?php 
    ob_start();
    session_start();
    if(isset($_SESSION['idAdmin'])){
        unset($_SESSION['idAdmin']);
    }
                  
?>