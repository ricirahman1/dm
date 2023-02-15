<?php 

include '../includes/connect.php';

$defect = $_POST['defect'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$time5 = $_POST['time5'];
$time6 = $_POST['time6'];
$time7 = $_POST['time7'];
$time8 = $_POST['time8'];
$time9 = $_POST['time9'];
$time10 = $_POST['time10'];
$time11 = $_POST['time11'];
$time12 = $_POST['time12'];
$daily_id = $_POST['daily_id'];
$total_reject = $time1 + $time2 + $time3 + $time4 + $time5 + $time6 + $time7 + $time8 + $time9 + $time10 + $time11 + $time12;

if (isset($_POST['add-daily'])) {
// menginput data ke database
mysqli_query($con,"INSERT INTO dailyoutput VALUES('','$defect','$time1','$time2','$time3','$time4','$time5','$time6','$time7','$time8','$time9','$time10','$time11','$time12','$total_reject')");
 
header("location:../dailyout.php");
}

elseif (isset($_POST['update-daily'])) {
$daily_id = $_POST['daily_id'];
// menginput data ke database
mysqli_query($con,"UPDATE dailyoutput SET defect='$defect', time1='$time1', time2='$time2', time3='$time3', time4='$time4', time5='$time5', time6='$time6', time7='$time7', time8='$time8', time9='$time9', time10='$time10', time11='$time11', time12='$time12', total_reject='$total_reject' WHERE daily_id='$daily_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../dailyout.php");
}

elseif (isset($_POST['delete-daily'])) {
$daily_id = $_POST['daily_id'];
// menghapus data dari database
mysqli_query($con,"DELETE FROM dailyoutput WHERE daily_id='$daily_id'");
        
// mengalihkan halaman kembali ke index.php
header("location:../dailyout.php");
}

?>