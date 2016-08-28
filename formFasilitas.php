
<?php
    $response='';
if($_GET['tipe']=="ruangan"){
        $response='
                            <div id="kembaliRuang.php">
                            <>
                            <form style="
      font-family: Century Gothic, Arial, Courier New, Sans-Serif;" method="post" action="prosesPinjam.php">
                            <i style="font-size:25px; color:#fe8101;" method="post" action="">PEMINJAMAN </i>
                            <textarea name="tahun" style="display:none"> ';

                            if(!empty($_GET['tahun'])&&$_GET['tahun']!="")
                            $response.= $_GET['tahun'];

                            $response.='

                            </textarea>
                            <textarea name="tipe" style="display:none"> ';

                            

                            $response.='

                            </textarea>
                            <textarea name="tempats" style="display:none">';

                            if(!empty($_GET['tempat'])&&$_GET['tempat']!="")
                            $response.= $_GET['tempat'];

                            $response.='

                            </textarea>
                            <br>Nama Ruangan : 
                            ';
                            if(!empty($_GET['tempat'])&&$_GET['tempat']!="")
                            $response.= $_GET['tempat'];
                            $response.='
                            </br>
                            Tanggal : 
                            <select name="tanggalpinjam">
                            <option>- Tanggal -</option>';
                            for($i=1;$i<32;$i++){
                                if($_GET['tanggal']!=$i)
                                $response.='<option value="'.$i.'">'.$i.'</option>';
                                else
                                $response.='<option selected="selected" value="'.$i.'">'.$i.'</option>';
                            }
                            $response.='</select>

                            <select name="bulanpinjam">
                            <option >- Bulan -</option>';
                            for($i=1;$i<13;$i++){
                                if($_GET['bulan']!=$i)
                                $response.='<option>'.date("F",strtotime("0000-$i")).'</option>';
                                else
                                $response.='<option selected="selected">'.date("F",strtotime("0000-$i")).'</option>';
                            }
                            $response.='</select>
                             
                            <select name="tahunpinjam">
                            <option>- Tahun -</option>';
                            for($i=-1;$i<2;$i++){
                                $po=$_GET['tahun']+$i;
                                if($_GET['tahun']!=$po)
                                $response.='<option value="'.$po.'">'.$po.'</option>';
                                else
                                $response.='<option selected="selected" value="'.$po.'">'.$po.'</option>';
                            }
                            $response.='</select><br/>
                                                s.d. 
                            
                            <br/>Tanggal : <select name="tanggalkembali">
                            <option>- Tanggal -</option>';
                            for($i=1;$i<32;$i++){
                                if($_GET['tanggal']!=$i)
                                $response.='<option value="'.$i.'">'.$i.'</option>';
                                else
                                $response.='<option selected="selected" value="'.$i.'">'.$i.'</option>';
                            }
                            $response.='</select>                    
                                          
                            <select name="bulankembali">
                            <option>- Bulan -</option>';
                            for($i=1;$i<13;$i++){
                                if($_GET['bulan']!=$i)
                                $response.='<option>'.date("F",strtotime("0000-$i")).'</option>';
                                else
                                $response.='<option selected="selected">'.date("F",strtotime("0000-$i")).'</option>';
                            }
                            $response.='</select>
                             
                            <select name="tahunkembali">
                            <option>- Tahun -</option>';
                            for($i=-1;$i<2;$i++){
                                $po=$_GET['tahun']+$i;
                                if($_GET['tahun']!=$po)
                                $response.='<option value="'.$po.'">'.$po.'</option>';
                                else
                                $response.='<option selected="selected" value="'.$po.'">'.$po.'</option>';
                            }
                            $response.='</select>

                                                <br>Jam : 

                            <select name="jampinjam">
                            <option> - Pukul - </option>';
                            for($i=1;$i<23;$i++){
                                if($i<10)
                                    $response.='<option value="'.$i.'">0'.$i.':00</option>';
                                else
                                    $response.='<option value="'.$i.'">'.$i.':00</option>';
                            }
   
                            $response.='</select> s.d. <select name="jamkembali">
                            <option> - Pukul - </option>';
                            for($i=1;$i<23;$i++){
                                if($i<10)
                                    $response.='<option value="'.$i.'">0'.$i.':00</option>';
                                else
                                    $response.='<option value="'.$i.'">'.$i.':00</option>';
                            }
   
                            $response.='</select>                      
                                                
                            <br />
                            <br>

                            Keperluan :<br />

                            <textarea name="keperluan" rows="10" cols="80" placeholder="Tulis keperluan di sini!" style="border-color:#fe8101;font-family: Century Gothic, Arial, Courier New, Sans-Serif;font-weight:bold;"> </textarea>
                            <br />
                            <textarea name="status" style="display:none">request</textarea>                        
                            <input type="submit" value="Submit" name="submitPinjam"/>

                        </form> ';

}
                        echo $response;   
    
?>
