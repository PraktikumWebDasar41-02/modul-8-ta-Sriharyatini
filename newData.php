<?php 
	include "konek.php";
	$datbase = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Baru</title>
</head>
<body>
	<center>
	<h1>Tambah Data</h1>
	<form method="POST">
		<table>
			
			<tr>
				<td>Nama Depan</td>
				<td>:</td>
				<td><input type="text" name="nama_depan"></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>:</td>
				<td><input type="text" name="nama_belakang"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td> <input type="checkbox" name="hobi[]" value="Bersepeda"> Bersepeda<br>
 					 <input type="checkbox" name="hobi[]" value="Berenang"> Berenang<br>
 					 <input type="checkbox" name="hobi[]" value="Bercanda">Bercanda<br> 
 				</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>:</td>
				<td> <input type="checkbox" name="genre[]" value="Horror">Horror<br>
 					 <input type="checkbox" name="genre[]" value="Anime">Anime<br>
 					 <input type="checkbox" name="genre[]" value="Action">Action<br> 
 					 <input type="checkbox" name="genre[]" value="Drama">Drama<br> 
 				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td> <input type="checkbox" name="wisata[]" value="Lombok">Bali<br>
 					 <input type="checkbox" name="wisata[]" value="Bali">Tanjung Selor<br>
 					 <input type="checkbox" name="wisata[]" value="Jakarta">Jakarta<br>
 					 <input type="checkbox" name="wisata[]" value="Lombok">Lombok<br>  
 				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html>
<?php
	$no = 1;
	foreach($datbase->data_baru() as $db){
	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $db['nama_depan']; ?></td>
		<td><?php echo $db['nama_belakang']; ?></td>
		<td><?php echo $db['nim']; ?></td>
		<td><?php echo $db['kelas']; ?></td>
		<td><?php echo $db['hobbi']; ?></td>
		<td><?php echo $db['genre_film']; ?></td>
		<td><?php echo $db['temppat_wisata']; ?></td>
		<td><?php echo $db['tanggal_lahir']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
<?php 
	}
?>