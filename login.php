<?php
	include("koneksi.php");

	if(isset($_POST['username']) && isset($_POST['password'])){
		$str="SELECT * from `user` WHERE nick='".$_POST['username']."' AND password='".$_POST['password']."'";
		
		$query=mysql_query($str);
		if(mysql_num_rows($query)>0){
			session_start();
			$_SESSION['user']=$_POST['username'];
			header ("location:index.php");
		}
		else {
			echo($str);
		}
	}
?>