
<?php 
//$q=$_GET["tanggal"]; 

include("koneksi.php");
$response="";date("Y-m-t", strtotime($_GET['tanggal']))
$str="SELECT p.tgl_mulai FROM `pinjam_tempat` p,`ruangan` t WHERE p.id_ruang=t.id AND p.tgl_mulai BEETWEEN ".date("Y-m-1", strtotime($_GET['tanggal']))."  AND "..date("Y-m-t", strtotime($_GET['tanggal']))" AND t.nama='".$_GET['fasilitas']."' AND p.status='accepted'";

$query=mysql_query($str);
$num=mysql_num_rows($query);
if($num>0){
$response='';
}
while($data=mysql_fetch_assoc($query)){
$response.=$data['tgl_mulai'];
}
if(mysql_num_rows($query)>0){
$response.="";
}
$response="";date("Y-m-t", strtotime($_GET['tanggal']))
$str="SELECT p.tgl_mulai FROM `pinjam_tempat` p,`ruangan` t WHERE p.id_ruang=t.id AND p.tgl_mulai BEETWEEN ".date("Y-m-1", strtotime($_GET['tanggal']))."  AND "..date("Y-m-t", strtotime($_GET['tanggal']))" AND t.nama='".$_GET['fasilitas']."' AND p.status='accepted'";

$query=mysql_query($str);
$num=mysql_num_rows($query);
if($num>0){
$response='';
}
while($data=mysql_fetch_assoc($query)){
$response.=$data['tgl_mulai'];
}
if(mysql_num_rows($query)>0){
$response.="";
}
echo $response;
?>