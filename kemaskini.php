<?php
 include 'config.php';
 //getting ag from url
$kp = $_GET['nokp'];
 
//selecting data associated with this particular kp
$sql = "SELECT * FROM yuran WHERE noKP='$kp'";
$papar = mysqli_query($connect, $sql);
 
while($res = mysqli_fetch_array($papar))
{
    $kp = $res['noKP'];
    $nm = $res['namaPelajar'];
    $as = $res['yuranAsrama'];
    $mk = $res['yuranMakan'];
    $pp = $res['yuranPep'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kemaskini</title>
</head>
<body>
	<center>
		<form method="post" action="pros_kemaskini.php"> 
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<td>No. Kad Pengenalan</td>
				<td>:</td>
				<td><input style="border: none;" type="text" name="noKP" value="<?php echo $kp; ?>"></td>
			</tr>
			<tr>
				<td>Nama Pelajar</td>
				<td>:</td>
				<td><input type="text" name="namaPelajar" value="<?php echo $nm; ?>"></td>
			</tr>
			<tr>
				<td>Yuran Asrama</td>
				<td>:</td>
				<td><input type="text" name="yuranAsrama" value="<?php echo $as; ?>"></td>
			</tr>
			<tr>
				<td>Yuran Makan</td>
				<td>:</td>
				<td><input type="text" name="yuranMakan" value="<?php echo $mk; ?>"></td>
			</tr>
			<tr>
				<td>Yuran Peperiksaan</td>
				<td>:</td>
				<td><input type="text" name="yuranPep" value="<?php echo $pp; ?>"></td>
			</tr>

		</table>
		<br>
		 <input type="submit" name="update" value="Kemaskini">
		</form>
		<br>
	</center>
</body>
</html>