<?php
 include 'config.php'; // this is not needed here
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Rekod</title>
</head>
<body>
	<center>
		<form method="post" action="pros_tambah.php" >
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<td>No Kad Pengenalan</td>
				<td>:</td>
				<td><input type="text" name="noKP"></td>
			</tr>
			<tr>
				<td>Nama Pelajar</td>
				<td>:</td>
				<td><input type="text" name="namaPelajar"></td>
			</tr>
			<tr>
				<td>Yuran Asrama</td>
				<td>:</td>
				<td><input type="text" name="yuranAsrama"></td>
			</tr>
			<tr>
				<td>Yuran Makan</td>
				<td>:</td>
				<td><input type="text" name="yuranMakan"></td>
			</tr>
			<tr>
				<td>Yuran Peperiksaan</td>
				<td>:</td>
				<td><input type="text" name="yuranPep"></td>
			</tr>

		</table>
		<br>
		 <input type="submit" name="save" value="Simpan">
		</form>
		</center>
</body>
</html>