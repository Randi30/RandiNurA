<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
		<h4>Lepaskan Peningmu dan Rasakan Kebahagiaan didalamnya</h4>
	</p>
	<form method="post" action="data.php">
		<table>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input type="text" name="nama" class="ac"></td>
			</tr>
			<br>
			<tr>
				<td>Password </td>
				<td>:</td>
				<td><input type="Password" name="pass" class="ac"></td>
			</tr>
			<br>
			<tr>
				<td>Jumlah Peserta</td>
				<td>:</td>
				<td>
					<select name="peserta">
					<option value="">==Jumlah Peserta==</option>
					<?php for($x=1;$x<=3;$x++){ ?>
						<option value="<?php echo $x; ?>">
							<?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
 				<td>
 					Pilih Lokasi
 				</td>
 				<td>:</td>
 				<td>
 					<select name="lokasi">
 						<option value="Atlantos">Atlantos</option>
 						<option value="Seaworld">Seaworld</option>
 						<option value="Kampung">Kampung Seni</option>
 						<option value="Pantai">Pantai</option>
 						<option value="Dufan">Dunia Fantasi</option>
 					</select>
 				</td>
 			</tr>
 			
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
			<br>
		</table>
	</form>
		<a href="Daftar.php">Daftarkan Akunmu</a>

</body>
</html>