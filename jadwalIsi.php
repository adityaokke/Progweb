
<?php 
//$q=$_GET["tanggal"]; 

include("koneksi.php");
$response="";
if($_GET['jenis']=="ruangan")
$str="SELECT p.jam_mulai,p.jam_akhir,p.acara FROM `pinjam_tempat` p,`ruangan` t WHERE p.id_ruang=t.id AND '".$_GET['tanggal']."' BETWEEN    p.tgl_mulai AND p.tgl_akhir AND t.nama='".$_GET['fasilitas']."' AND p.status='accepted'";
else if($_GET['jenis']=="kendaraan")
$str="SELECT p.jam_mulai,p.jam_akhir,p.acara FROM `pinjam_tempat` p,`ruangan` t WHERE p.id_ruang=t.id AND '".$_GET['tanggal']."' BETWEEN    p.tgl_mulai AND p.tgl_akhir AND p.status='accepted'";	

$query=mysql_query($str);
$num=mysql_num_rows($query);
if($num>0){
$response='';
}
while($data=mysql_fetch_assoc($query)){
$response.="<div class='acara' title='".$data['acara']."'>".$data['acara']."</div><div class='mulai'>".substr($data['jam_mulai'], 0,-3)."</div><div>".substr($data['jam_akhir'], 0,-3)."</div><br/>";
}
if(mysql_num_rows($query)>0){
$response.="";
}
echo $response;
?>