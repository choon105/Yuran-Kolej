<?php
 include 'config.php';

	if (isset($_POST['save'])) {
$kp=$_REQUEST['noKP'];
$nm=$_REQUEST['namaPelajar'];
$as=$_REQUEST['yuranAsrama'];
$mk=$_REQUEST['yuranMakan'];
$pp=$_REQUEST['yuranPep'];

$sql = "INSERT INTO yuran (noKP, namaPelajar, yuranAsrama, yuranMakan, yuranPep) VALUES ('$kp', '$nm','$as','$mk','$pp')";

if (mysqli_query($connect, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
require 'index.php';		
}
?>