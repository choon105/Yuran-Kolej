<?php
include 'config.php';
if (isset($_POST['update'])) {
				
// info dari kemaskini.php
$kp=$_REQUEST['noKP'];
$nm=$_REQUEST['namaPelajar'];
$as=$_REQUEST['yuranAsrama'];
$mk=$_REQUEST['yuranMakan'];
$pp=$_REQUEST['yuranPep'];

// SQL
$sql = "UPDATE yuran SET namaPelajar='$nm', yuranAsrama='$as', yuranMakan='$mk', yuranPep='$pp' WHERE noKP='$kp'";

if (mysqli_query($connect, $sql)) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}
mysqli_close($connect);
echo "<script> location.href='index.php'; </script>";
exit;
}
?>