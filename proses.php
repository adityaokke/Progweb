<?php
include("koneksi.php");
session_start();
	$_GET['gambar'];
	$_GET['idpinjam'];
	if($_GET['gambar']==2){
		$str="DELETE FROM `pinjam_tempat`  WHERE `pinjam_tempat`.id_pinjam=".$_GET['idpinjam'];
		echo $str;
		mysql_query($str) or die(mysql_error());	
	}
	else if($_GET['gambar']==1){
		$str="UPDATE  `pinjam_tempat` SET  `status` =  'accepted' WHERE  `pinjam_tempat`.`id_pinjam` ='".$_GET['idpinjam']."'";
		echo $str;
		mysql_query($str) or die(mysql_error());
	}
	header("location:profil.php?nama=".$_SESSION['user']);
	
?>