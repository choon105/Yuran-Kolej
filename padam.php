<?php
include 'config.php';

if (isset($_REQUEST['nokp'])) {
				
// info dari index.php
$kp=$_REQUEST['nokp'];

// sql to delete a record
$sql = "DELETE FROM yuran WHERE noKP= $kp";

if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
    //header("location:index.php");
} else {
    echo "Error delete record: " . mysqli_error($connect);
}
mysqli_close($connect);

//header("location:index.php");
echo "<script>location.href='index.php';</script>";	
}
echo "no nokp... missing..";
?>