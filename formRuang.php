
<?php
    include("koneksi.php");
    

        $response='
                            <div id="kembaliRuang.php">
                            <form style="
      font-family: Century Gothic, Arial, Courier New, Sans-Serif;" method="post" action="jajal.php">
                            <i style="font-size:25px; color:#fe8101;" method="post" action="">PEMINJAMAN </i>
                            <textarea name="tahun" style="display:none"> ';

                            if(!empty($_GET['tahun'])&&$_GET['tahun']!="")
                            $response.= $_GET['tahun'];

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
                            <option>';
                                if(!empty($_GET['tanggal'])&&$_GET['tanggal']!="")
                                    $response.=$_GET['tanggal'];
                                else
                                    $response.="- Tanggal -";
                            $response.='
                            </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            </select>                        
                            <textarea name="bulanpinjam" style="display:none"> 
                            ';

                            if(!empty($_GET['bulan'])&&$_GET['bulan']!="")
                            $response.= $_GET['bulan'];

                            $response.='

                            </textarea>
                            <select >
                            <option>';
                                if(!empty($_GET['bulan'])&&$_GET['bulan']!=""){
                                    $a=$_GET['bulan'];
                                    $response.=date("F",strtotime("a"));
                                }   
                                else
                                    $response.="- Bulan -";
                            $response.='
                            </option>
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                            </select>
                             
                                                s.d. 
                            
                            <select name="tanggalkembali">
                            <option style="">';
                            
                                if(!empty($_GET['tanggal'])&&$_GET['tanggal']!="")
                                    $response.= $_GET['tanggal'];
                                else
                                    $response.= "- Tanggal -";
                            $response.='
                            </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            </select>                    
                            <textarea name="bulankembali" style="display:none"> 
                            ';

                            if(!empty($_GET['bulan'])&&$_GET['bulan']!="")
                            $response.= $_GET['bulan'];

                            $response.='

                            </textarea>                                            
                            <select >
                            <option>';
                            
                                if(!empty($_GET['bulan'])&&$_GET['bulan']!=""){
                                    $a=$_GET['bulan'];
                                    $response.=date("F",strtotime("a"));
                                }
                                else
                                $response.= "- Bulan -"; 
                            $response.='
                            </option>
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                            </select>
                             

                                                <br>Jam : 

                            <select name="jampinjam">
                            <option> - Pukul - </option>
                            <option value="1">01:00</option>
                            <option value="2">02:00</option>
                            <option value="3">03:00</option>
                            <option value="4">04:00</option>
                            <option value="5">05:00</option>
                            <option value="6">06:00</option>
                            <option value="7">07:00</option>
                            <option value="8">08:00</option>
                            <option value="9">09:00</option>
                            <option value="10">10:00</option>
                            <option value="11">11:00</option>
                            <option value="12">12:00</option>
                            <option value="13">13:00</option>
                            <option value="14">14:00</option>
                            <option value="15">15:00</option>
                            <option value="16">16:00</option>
                            <option value="17">17:00</option>
                            <option value="18">18:00</option>
                            <option value="19">19:00</option>
                            <option value="20">20:00</option>
                            <option value="21">21:00</option>
                            <option value="22">22:00</option>
                            <option value="23">23:00</option>
                            <option value="24">24:00</option>
                            </select>                    
                                                
                                               s.d. 
                                               
                            <select name="jamkembali">
                            <option> - Pukul - </option>
                            <option value="1">01:00</option>
                            <option value="2">02:00</option>
                            <option value="3">03:00</option>
                            <option value="4">04:00</option>
                            <option value="5">05:00</option>
                            <option value="6">06:00</option>
                            <option value="7">07:00</option>
                            <option value="8">08:00</option>
                            <option value="9">09:00</option>
                            <option value="10">10:00</option>
                            <option value="11">11:00</option>
                            <option value="12">12:00</option>
                            <option value="13">13:00</option>
                            <option value="14">14:00</option>
                            <option value="15">15:00</option>
                            <option value="16">16:00</option>
                            <option value="17">17:00</option>
                            <option value="18">18:00</option>
                            <option value="19">19:00</option>
                            <option value="20">20:00</option>
                            <option value="21">21:00</option>
                            <option value="22">22:00</option>
                            <option value="23">23:00</option>
                            <option value="24">24:00</option>
                            </select>                    
                                                
                            <br />
                            <br>

                            Keperluan :<br />

                            <textarea name="keperluan" rows="10" cols="80" placeholder="Tulis keperluan di sini!" style="border-color:#fe8101;font-family: Century Gothic, Arial, Courier New, Sans-Serif;font-weight:bold;"> </textarea>
                            <br />
                            <textarea name="status" style="display:none">request</textarea>                        
                            <input type="submit" value="Submit" name="submitPinjam"/>

                        </form> ';


                        echo $response;   
    
?>
