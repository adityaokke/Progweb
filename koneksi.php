<?php
$server="localhost";
$username="ukdwnetc_krt";
$password="krtokke";
$database="ukdwnetc_krt";
mysql_connect($server,$username,$password) or die(mysql_error());
mysql_select_db($database) or die (mysql_error());
//session_start();
?>