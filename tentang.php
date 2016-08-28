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
                    <p id="judulTentang" > <strong>TENTANG KRT</strong> </p>
                    <p style="text-align:justify;"> 
                        <?php
                        /*
                            $query="SELECT * from `about`";
                            $result = mysql_query ($query);
                            while($data=mysql_fetch_assoc($result)){
                                echo $data['about'];    
                            }*/
                        ?>
                        Kerumahtanggaan atau yang biasa disebut KRT adalah salah satu unit  yang dimiliki oleh Universitas Kristen Duta Wacana
                    </p>
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
