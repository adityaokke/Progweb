
                        <?php 
//$q=$_GET["tanggal"]; 

                                include("koneksi.php");
                                $response="";
                                $str="SELECT p.jam_mulai,p.jam_akhir,p.acara FROM `pinjam_tempat` p,`tempat` t WHERE p.id_tmpt=t.id_tmpt AND '".$_GET['tanggal']."' BETWEEN    p.tgl_mulai AND p.tgl_akhir AND t.nama='".$_GET['tempat']."' AND p.status='accepted'";
                                //echo $str;
                                $query=mysql_query($str);
                                $num=mysql_num_rows($query);
                                 if($num>0){
                                $response='<table style="font-size:10pt;color:gray;">
                                <tr >
                                <td><p>Acara</p></td><td>Jan Mulai </td><td>Jan Akhir</td>
                                </tr>
                                <tr > 
                                    <td colspan="3"><hr/ style="background-color: #fe8101; height: 1px; border: 0; margin:0px;">
                                    </td>
                                </tr>';
                                }
                               while($data=mysql_fetch_assoc($query)){
                                $response.="<tr>"."<td><p>".$data['acara']."</p></td>"."<td>".$data['jam_mulai']."</td>"."<td>".$data['jam_akhir']."</td>"."</tr>";
                               }
                               if(mysql_num_rows($query)>0){
                                $response.="</table>";
                                }
                                echo $response;
                        ?> 