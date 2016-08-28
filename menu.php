<ul>
	<li><p><a href="index.php">home</a></p><hr/></li>
	<li name="anak"><p>fasilitas krt</p>
			<ul class="pop">
				<li><a href="fasilitas.php?tipe=ruangan">RUANGAN DAN GEDUNG</a></li>
					<hr/>
				<li><a href="fasilitas.php?tipe=kendaraan">KENDARAAN DINAS</a></li>
			</ul>
		<hr/>
	</li>
	<li><p><a href="tentang.php">tentang</a></p><hr/></li>
	<li><p><a href="kontak.php">kontak</a></p><hr/></li>
	<?php if(empty($_SESSION['user'])) {?>
	<li name="anak" id="login"><p>login</p>
			<ul class="pop">
				<form method="post" action="login.php">
					<li>Username<input type="text" name="username"/></li>
					<li>Password <input type="password" name="password"/></li>
					<li >&nbsp<button type="submit" name="login" style="font-size:9pt;float:right;">SUBMIT</button> </li>
				</form>
			</ul>
		<hr/>
	</li>
	<?php }else{ ?>
	<li><p><a href="profil.php?nama=<?php echo $_SESSION['user'];?>"><?php echo $_SESSION['user']; ?></a></p><hr/></li>
	<li  id="logout"><p><a href="logout.php">logout</a></p><hr/></li>
	<?php } ?>
</ul>
