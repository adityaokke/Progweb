<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <?php
            include("head.php");
        ?>
    </head>
    <body>
        <?php 
            include("header.php");

        ?>
        <div id="wrap">
            <!--<hr color=black size="10" width="960" noshade style="color:#00000"/>-->
            <div id="content"> 
                
                <?php
                include("menu.php");

                ?>
                <div id="isi">

                    <?php
                        if(!empty($_POST['forms'])){
                            if(trim($_POST['comments'])!="" && trim($_POST['comments'])!="Tulis kritik dan saran di sini!"){
                                $query="INSERT INTO `kritiksaran`(`isi`) VALUES ('".$_POST['comments']."')";
                                if(mysql_query ($query)){
                                    echo "<span style=background-color:gray;color:white;>TERIMA KASIH atas Kritik dan Saran yang anda berikan</span><br/>";
                                }
                            }
                            else echo "<span style=background-color:red;color:white;>Tulis Kritik dan Saran di tempat yang disediakan dan tidak boleh kosong!</span><br/>";

                        }
                    ?>

                        <strong>Kontak kami di :</strong>
                        <br/>
                        <?php
                            $query="SELECT * from `kontak`";
                            $result = mysql_query ($query);
                            while($data=mysql_fetch_assoc($result)){
                                echo $data['kontak'];    
                            }                            
                        ?>
                        <br/>
                        <br/>
                    <strong>Kritik dan Saran :</strong><br />
                    <form method="POST"  action="#">
                        <textarea name="comments" rows="10" cols="80" id="comments">
                        Tulis kritik dan saran di sini!
                        </textarea>
                        <br />
                        <input type="submit" value="Submit" name="forms"/>

                    </form>     

                </div>
            </div>
        
            <div id="footer">
                <?php
                    include("footer.php");
                ?>
            </div>
        </div>
    </body>
</html>