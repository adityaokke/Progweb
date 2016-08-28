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
        <script>
function jajal()
{
alert("su")
}
</script>
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
                        if($_GET['tipe']=="ruangan")
                            include("ruangan.php");
                        else if($_GET['tipe']=="kendaraan")
                            include("kendaraan.php");
                    ?>
                </div>
                <div id="formPinjam">
                </div>
                <div id="left">
                    <div id="calendar">
                        <?php
                            include("calendar.php");
                        ?>
                    </div>
                    <div id="jadwal">
                        <div class="acara">Acara</div><div class="mulai">Mulai</div><div class="akhir">Akhir</div>
                        <hr style="background-color: #fe8101; height: 1px; border: 0; margin:0px;width:200px"/>
                        <div id="jadwalIsi" style="margin-bottom:10px;"></div>
                            <?php if(!empty($_SESSION['user'])) {?>
                        <button type="submit" id="pinjamButton" name=<?php echo $_GET['tipe'];?>>PINJAM</button>
                        <?php }?>
                        <button type="submit" id="komentarButton" name=<?php echo $_GET['tipe'];?> >KOMENTAR</button>
                    </div>
                    <div id="menuFasilitas">
                    </div>
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
