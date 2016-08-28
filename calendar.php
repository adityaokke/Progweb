<img class="dateCursor" id="pnhKiriDate" src="images/panah_kiri_calendar.png"/>
<div id="monthYear">
<ul id="month">
<?php
	for($i=1;$i<13;$i++){
		?>
		<li  name='<?php echo $i; ?>'><?php echo date("F",strtotime("0000-$i"));?></li>
		<?php
	}
?>
</ul>
<div id="year"></div>
</div>
<img class="dateCursor" id="pnhKananDate" src="images/panah_kanan_calendar.png"/>
<div id="table">
	<div id="thead">
			<div>Su</div>
			<div>Mo</div>
			<div>Tu</div>
			<div>We</div>
			<div>Th</div>
			<div>Fr</div>
			<div>Sa</div>
	</div>
	<div id="tbody">

	</div>
</div>
<div id="tanggal">
</div>
<div id="tglTamp"></div>