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
                <div id="mid">
                    <?php
                        if($_GET['nama']=="admin"){
                            include("adminprofile.php");
                        }  
                        else if($_GET['nama']!=""&&$_GET['nama']!="admin"){
                           include("userprofile.php"); 
                        }
                    ?>
                </div>
                <div id="formPinjam">
                </div>
            </div>
        
            <div id="footer">
            </div>

            <div id="formFasilitasHidden">
                <textarea id="tanggal"></textarea>
            </div>

        </div>
       <!-- <textarea id="log"></textarea>-->
    </body>
</html>
