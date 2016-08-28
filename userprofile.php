<?php
                    $str="SELECT * FROM user WHERE nick='".$_GET['nama']."'";
                    $query = mysql_query($str);
                    $data=mysql_fetch_assoc($query);
                        echo "<img src = 'images/".$data['id'].".png'  width='90'  height='90'/>";
                        echo "<span style='font-size:15px;color:#fe8101;'><strong>".$data['nick']."</strong></span><br/>";                             
                    ?>
                    <table id="req">
                    <tr>
                        <th >REQUEST</th><th >TANGGAL</th><th >JAM</th><th >ACARA</th><th >STATUS</th><th ></th> <?php if($_SESSION['user']=="admin"){ ?> <th ></th><?php }?>
                    </tr>
                    <?php
                        $str="SELECT p.id_pinjam,o.nama, p.tgl_mulai, p.tgl_akhir, p.jam_mulai, p.jam_akhir,p.acara,p.status FROM pinjam_tempat p, user t, ruangan o WHERE p.id_user = t.id AND p.id_ruang = o.id AND t.nick='".$_GET['nama']."'";
                        $query = mysql_query($str);
                        while($data=mysql_fetch_array($query)){
                        echo "<tr>
                            <td>".$data['nama']."</td>
                            <td>".$data['tgl_mulai']." - ".$data['tgl_akhir']."</td>
                            <td>".$data['jam_mulai']." - ".$data['jam_akhir']."</td>
                            <td>".$data['acara']."</td>
                            <td>".$data['status']."</td>";
                        if($_SESSION['user']=="admin")
                            echo "<td><a href = 'proses.php?gambar=1&idpinjam=".$data['id_pinjam']."'><img src = 'images/centang.png' width='12' height='12'/></a></td>";
                            echo "<td><a href = 'proses.php?gambar=2&idpinjam=".$data['id_pinjam']."'><img src = 'images/silang.png' width='12' height='12' /></a></td>
                            </tr>";
                        }    
?>