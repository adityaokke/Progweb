<?php
include("koneksi.php");
session_start();
	if(isset($_POST['tempats'])&&isset($_POST['tanggalpinjam'])&&isset($_POST['bulanpinjam'])&&isset($_POST['tanggalkembali'])&&isset($_POST['bulankembali'])&&isset($_POST['jampinjam'])&&isset($_POST['jamkembali'])&&isset($_POST['keperluan'])&&isset($_POST['status'])){
                
        $tempat = $_POST['tempats'];
        $tempat = trim($tempat);
        $str = "SELECT * from `tempat` where `nama` LIKE '".$tempat."'";
        echo $str;
        $opo=mysql_query($str) or die (mysql_error());
        

        $idtempat=mysql_fetch_array($opo);
        $id=$idtempat['id_tmpt'];
        $str="SELECT * from `user` where `nick` LIKE '".$_SESSION['user']."'";
        echo $str;
		$opo=mysql_query($str) or die (mysql_error());
        $iduser=mysql_fetch_array($opo);
        $ids= $iduser['id_user'];
        echo $ids;
//		$query="INSERT INTO `pinjam_tempat`(`id_user`, `id_tmpt`, `tgl_mulai`, `tgl_akhir`, `jam_mulai`, `jam_akhir`, `status`, `acara`) VALUES ('".$ids."','".$id."','2013-10-11','2013-12-12','10:00:00','19:00:00','".$_POST['status']."','".$_POST['keperluan']."')";
        $query="INSERT INTO `pinjam_tempat`(`id_user`, `id_tmpt`, `tgl_mulai`, `tgl_akhir`, `jam_mulai`, `jam_akhir`, `status`, `acara`) VALUES ('".$ids."','".$id."','".trim($_POST['tahun'])."-".trim($_POST['bulanpinjam'])."-".trim($_POST['tanggalpinjam'])."','".trim($_POST['tahun'])."-".trim($_POST['bulankembali'])."-".trim($_POST['tanggalkembali'])."','".trim($_POST['jampinjam']).":00:00','".trim($_POST['jamkembali']).":00:00','".$_POST['status']."','".$_POST['keperluan']."')";
        echo $query;
        mysql_query($query) or die(mysql_error());
    }
    header("location:fasilitas.php");


?>