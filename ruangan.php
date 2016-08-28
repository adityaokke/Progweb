<?php

		$str="SELECT * from `ruangan`";
		$query=mysql_query($str);
		$tab="<ul id='tabs'>";
		$isiTab="<div id='isiTab'>";
		$cont=1;
		while($data=mysql_fetch_assoc($query)){
			$tab.="<li title='".$data['nama']."'><a name='tab".$cont."' href='#'>".$data['nama']."</a></li>";
			$isiTab.="<div id='tab".$cont."'>".$data['nama']."<br/>";
			
			$gmb=explode(",",$data['gambar']);
			for ($x=0; $x<sizeof($gmb); $x++)
			{
			  //if(sizeof($gmb[$x])!=0)
				if($gmb[$x]!="")
			  $isiTab.="<img class='gmb' src='gedung/".$gmb[$x]."' alt='".substr($gmb[$x],0,sizeof($gmb[$x])-4)."'/>";
			} 
			$isiTab.="<br/>";
			$isiTab.="<p>".$data['keterangan']."<br/>";
			$isiTab.="Fasilitas :<br/>";
			
			$fas=explode(",", $data['fasilitas']);
			for ($x=0; $x<sizeof($fas); $x++){
				$isiTab.=$fas[$x]."<br/>";
			}
			$isiTab.="Catatan : ".$data['catatan']."</p></div>";
			$cont++;

		}
		$tab.="</ul><img class='cursor' id='pnhKanan' src='images/panah_kanan.png'/><img class='cursor' id='pnhKiri' src='images/panah_kiri.png'/>";
		$isiTab.="</div>";
		echo $tab;
		echo $isiTab;
?>  
