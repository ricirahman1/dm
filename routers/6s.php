<?php 

include '../includes/connect.php';

$sixs_id = $_POST['sixs_id'];
$sixs_check = $_POST['sixs_check'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$date3 = $_POST['date3'];
$date4 = $_POST['date4'];
$date5 = $_POST['date5'];
$date6 = $_POST['date6'];
$date7 = $_POST['date7'];
$date8 = $_POST['date8'];
$date9 = $_POST['date9'];
$date10 = $_POST['date10'];
$date11 = $_POST['date11'];
$date12 = $_POST['date12'];
$date13 = $_POST['date13'];
$date14 = $_POST['date14'];
$date15 = $_POST['date15'];
$date16 = $_POST['date16'];
$date17 = $_POST['date17'];
$date18 = $_POST['date18'];
$date19 = $_POST['date19'];
$date20 = $_POST['date20'];
$date21 = $_POST['date21'];
$date22 = $_POST['date22'];
$date23 = $_POST['date23'];
$date24 = $_POST['date24'];
$date25 = $_POST['date25'];
$date26 = $_POST['date26'];
$date27 = $_POST['date27'];
$date28 = $_POST['date28'];
$date29 = $_POST['date29'];
$date30 = $_POST['date30'];
$date31 = $_POST['date31'];

if (isset($_POST['add-sixs'])) {
// menginput data ke database
mysqli_query($con,"INSERT INTO 6s VALUES('','$sixs_check','$date1','$date2','$date3','$date4','$date5','$date6','$date7','$date8','$date9','$date10','$date11','$date12','$date13','$date14','$date15','$date16','$date17','$date18','$date19','$date20','$date21','$date22','$date23','$date24','$date25','$date26','$date27','$date28','$date29','$date30','$date31')");
 
header("location:../6s.php");
}

elseif (isset($_POST['update-sixs'])) {
$sixs_id = $_POST['sixs_id'];
// menginput data ke database
mysqli_query($con,"UPDATE 6s SET sixs_check='$sixs_check', date1='$date1', date2='$date2', date3='$date3', date4='$date4', date5='$date5', date6='$date6', date7='$date7', date8='$date8', date9='$date9', date10='$date10', date11='$date11', date12='$date12', , date13='$date13', date14='$date14', date15='$date15', date16='$date16', date17='$date17', date18='$date18', date19='$date19', date20='$date20', date21='$date21', date22='$date22', date23='$date23', date24='$date24', date25='$date25', date26='$date26', date27='$date27', date28='$date28', date29='$date29', date30='$date30', date31='$date31'  WHERE sixs_id='$sixs_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../6s.php");
}

elseif (isset($_POST['delete-sixs'])) {
$sixs_id = $_POST['sixs_id'];
// menghapus data dari database
mysqli_query($con,"DELETE FROM 6s WHERE sixs_id='$sixs_id'");
        
// mengalihkan halaman kembali ke index.php
header("location:../6s.php");
}

?>