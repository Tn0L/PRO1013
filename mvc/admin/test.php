<?php
  include "../controller/check.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

 

</head>

<body class="bg-gradient-primary">

  
                  <form action="test.php" method="post">
                   
                      <input type="text"  name="user" placeholder="User Name">
                   
                  
                      <input type="password"  name="pass" placeholder="Password">
                  
        
                    <input type="submit" name="dangnhap" value="login">
                      
                  </form>
                
                <?Php
                    
                    echo $_SESSION['idadmin'];
                    echo $_SESSION['imgadmin'];
                ?>
                
</body>

</html>
