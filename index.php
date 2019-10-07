<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pengurusan Yuran Kolej</title>
</head>
<body><br>
	<center>
		<h1>SENARAI YURAN PELAJAR KOLEJ 2018</h1>		
<!-- building table to display fees info of each student -->		
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<th>Bil</th>
				<th>No. KP</th>
				<th>Nama Pelajar</th>
				<th>Yuran Asrama</th>
				<th>Yuran Makan</th>
				<th>Yuran Peperiksaan</th>
				
				<th colspan="2">Tindakan</th>
			</tr>
			<?php 
			    // getting fees info from db
				include 'config.php';
				$sql="SELECT * FROM yuran"; //sql statement
				$display = mysqli_query($connect, $sql);
				$bil = 1;
				// displaying fees info
				while ($result=mysqli_fetch_array($display)) {
				echo "
				<tr>
				<td align='center'>".$bil++."</td>
				<td align='center'>".$result['noKP']."</td>
				<td align='center'>".$result['namaPelajar']."</td>
				<td align='center'>".$result['yuranAsrama']."</td>
				<td align='center'>".$result['yuranMakan']."</td>
				<td align='center'>".$result['yuranPep']."</td>
				
				<td align='center'>
				<!-- link to updating procedures -->
				<a href='kemaskini.php?nokp=$result[noKP]'>Kemaskini</td>
				<td align='center'>
				<!-- link to deleting procedures -->
				<a href='padam.php?nokp=$result[noKP]'>Padam</td>
				
					</tr>
				";
			}
			?>

		</table><br> 
		<!-- link to inserting new record -->
		 <a href="tambah.php"><p style="text-align:center">Tambah Yuran</p></a>
	</center>
</body>
</html>
