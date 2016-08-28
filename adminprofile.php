
                        <h2><b>REQUEST</b><h2>
                            <table id="req"style="border:1px solid black;border-collapse:collapse;">
                            <tr>
                            <th >NAMA</th><th >REQUEST</th><th >TANGGAL</th><th >JAM</th><th ></th><th ></th>
                            </tr>
                                <?php $query = mysql_query("SELECT t.nick, p.id_pinjam,t.nick,o.nama, p.tgl_mulai, p.tgl_akhir, p.jam_mulai, p.jam_akhir FROM pinjam_tempat p, user t, ruangan o WHERE p.id_user = t.id AND p.id_ruang = o.id AND p.status='request'") or die(mysql_error());
                                //echo "SELECT t.nama, p.id_pinjam,t.nick,o.nama, p.tgl_mulai, p.tgl_akhir, p.jam_mulai, p.jam_akhir FROM pinjam_tempat p, user t, tempat o WHERE p.id_user = t.id_user AND p.id_tmpt = o.id_tmpt AND p.status='request'";
                                while($data=mysql_fetch_array($query)){
                                    echo "<tr>
                                        <td><a href='profil.php?nama=".$data['nick']."'>".$data['nick']."</a></td>
                                        <td class='reqtmp' id='".$data['nama']."'>".$data['nama']."</td>
                                        <td>".$data['tgl_mulai']." - ".$data['tgl_akhir']."</td>
                                        <td>".$data['jam_mulai']." - ".$data['jam_akhir']."</td>
                                        <td><a href = 'proses.php?gambar=1&idpinjam=".$data['id_pinjam']."'><img src = 'images/centang.png' width='12' height='12' /></a></td>
                                        <td><a href = 'proses.php?gambar=2&idpinjam=".$data['id_pinjam']."'><img src = 'images/silang.png' width='12' height='12'/></a></td>                                        
                                        </tr>";
                                }    
                                ?>
                            </table>
