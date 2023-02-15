<?php 

include '../includes/connect.php';

$problem = $_POST['problem'];
$description = htmlspecialchars($_POST['description']);
$mon = $_POST['mon'];
$tue = $_POST['tue'];
$wed = $_POST['wed'];
$thu = $_POST['thu'];
$fri = $_POST['fri'];
$sat = $_POST['sat'];
$sun = $_POST['sun'];
$total = $mon + $tue + $wed + $thu + $fri + $sat + $sun;

if (isset($_POST['add-tally'])) {
// menginput data ke database
mysqli_query($con,"INSERT INTO tally VALUES('','$problem','$description','$mon','$tue','$wed','$thu','$fri','$sat','$sun','$total')");
 
header("location:../tally.php");
}

elseif (isset($_POST['update-tally'])) {
$tally_id = $_POST['tally_id'];
// menginput data ke database
mysqli_query($con,"UPDATE tally SET problem='$problem', description='$description', mon='$mon', tue='$tue', wed='$wed', thu='$thu', fri='$fri', sat='$sat', sun='$sun', total='$total' WHERE tally_id='$tally_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tally.php");
}

elseif (isset($_POST['delete-tally'])) {
$tally_id = $_POST['tally_id'];
// menghapus data dari database
mysqli_query($con,"DELETE FROM tally WHERE tally_id='$tally_id'");
        
// mengalihkan halaman kembali ke index.php
header("location:../tally.php");
}

?>