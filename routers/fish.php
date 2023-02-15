<?php 

include '../includes/connect.php';

$method = $_POST['method'];
$machine = $_POST['machine'];
$material = $_POST['material'];
$measurement = $_POST['measurement'];
$environment = $_POST['environment'];
$personnel = $_POST['personnel'];
$why_1 = $_POST['why_1'];
$why_2 = $_POST['why_2'];
$why_3 = $_POST['why_3'];
$why_4 = $_POST['why_4'];
$why_5 = $_POST['why_5'];
$happen_1 = $_POST['cat_o1'];
$happen_2 = $_POST['happen_2'];
$happen_3 = $_POST['happen_3'];
$happen_4 = $_POST['happen_4'];
$happen_5 = $_POST['happen_5'];
$happen_6 = $_POST['happen_6'];
$happen_7 = $_POST['happen_7'];
$root_day = $_POST['root_day'];

if (isset($_POST['add-fish'])) {
// menginput data ke database
mysqli_query($con,"INSERT INTO fish VALUES('','$method','$machine','$material','$measurement','$environment','$personnel','$why_1','$why_2','$why_3','$why_4','$why_5','$happen_1','$happen_2','$happen_3','$happen_4','$happen_5','$happen_6','$happen_7','$root_day')");
     
header("location:../fishbone.php");
}
    
    
elseif (isset($_POST['update-fish'])) {
$fish_id = $_POST['fish_id'];
mysqli_query($con,"UPDATE fish SET method='$method', machine='$machine', material='$material', measurement='$measurement', environment='$environment', personnel='$personnel', why_1='$why_1', why_2='$why_2', why_3='$why_3', why_4='$why_4', why_5='$why_5', happen_1='$happen_1', happen_2='$happen_2', happen_3='$happen_3', happen_4='$happen_4', happen_5='$happen_5', happen_6='$happen_6', happen_7='$happen_7', root_day='$root_day' WHERE fish_id='$fish_id'");
     
// mengalihkan halaman kembali ke index.php
header("location:../fishbone.php");
}
    
elseif (isset($_POST['delete-fish'])) {
$fish_id = $_POST['fish_id'];
// menghapus data dari database
mysqli_query($con,"DELETE FROM fish WHERE fish_id='$fish_id'");
     
// mengalihkan halaman kembali ke index.php
header("location:../fishbone.php");
}
?>