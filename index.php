<?php
    session_start();
    include("koneksi.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <?php 
            include("script.php"); 
        ?>
    </head>
    <body>
        <?php
            include("head.php");
        ?>
        <div id="wrap">
            <div id="menu">
                <?php 
                    include("menu.php");
                ?>
            </div>
            <div id="content"> 

                <div id="isi">
                    <?php 
                        include("slider.php");
                    ?>  
                </div>
            </div>
        
            <div id="footer">
            </div>
        </div>
       <!-- <textarea id="log"></textarea>-->
    </body>
</html>
