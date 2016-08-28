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
                          /*  $query="SELECT * from `kontak`";
                            $result = mysql_query ($query);
                            while($data=mysql_fetch_assoc($result)){
                                echo $data['kontak'];    
                            }  */                          
                        ?>
                    <p>Alamat :<br/>No Telp : <br/>E-mail : </p>
                    <strong>Kritik dan Saran :</strong><br />
                    <form method="POST"  action="#">
                        <textarea name="comments" rows="10" cols="80" id="comments">
                        Tulis kritik dan saran di sini!
                        </textarea>
                        <br />
                        <input type="submit" value="Submit" name="forms"/>
                        <!--<button type="submit" name="form" >SUBMIT</button>-->
                    </form> 
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
