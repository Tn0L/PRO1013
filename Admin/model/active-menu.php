<?php
    if(isset($_GET['act'])){
?>        
        <script>
            activeMenu()
            function activeMenu() {
                var menuActive = document.getElementById("<?php echo $_GET["act"] ?>");
                menuActive.classList.add('active')
            }
        </script>
<?php   
    }
    else{
?>
        <script>
            activeMenu()
            function activeMenu() {
                var menuActive = document.getElementById('home');
                menuActive.classList.add('active')
            }
        </script>
<?php    
    }
?>
