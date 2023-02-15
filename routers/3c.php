<?php 

include '../includes/connect.php';
 
$threec_id = $_POST['threec_id'];
$ref_no = $_POST['ref_no'];
$concern = htmlspecialchars($_POST['concern']);
$cause = htmlspecialchars($_POST['cause']);
$count = htmlspecialchars($_POST['count']);
$critical = $_POST['critical'];
$a = $_POST['a'];
$b = $_POST['b'];
$minor = $_POST['minor'];
$risk = $_POST['risk'];
$saf = $_POST['saf'];
$cat_t = $_POST['cat_t'];
$cat_i = $_POST['cat_i'];
$cat_m = $_POST['cat_m'];
$cat_w = $_POST['cat_w'];
$cat_o1 = $_POST['cat_o1'];
$cat_o2 = $_POST['cat_o2'];
$cat_d = $_POST['cat_d'];
$cat_s = $_POST['cat_s'];
$cost = $_POST['cost'];
$raised = $_POST['raised'];
$act = $_POST['act'];
$day_raised = $_POST['day_raised'];
$day_closed = $_POST['day_closed'];
$stat = $_POST['stat'];
$chacked = htmlspecialchars($_POST['chacked']);

if (isset($_POST['add-threec'])) {
// menginput data ke database
mysqli_query($con,"INSERT INTO 3c VALUES('','$ref_no','$concern','$cause','$count','$critical','$a','$b','$minor','$risk','$saf','$cat_t','$cat_i','$cat_m','$cat_w','$cat_o1','$cat_o2','$cat_d','$cat_s','$cost','$raised','$act','$day_raised','$day_closed','$stat','$chacked')");
 
header("location:../3c.php");
}


elseif (isset($_POST['update-threec'])) {
mysqli_query($con,"UPDATE 3c SET ref_no='$ref_no', concern='$concern', cause='$cause', count='$count', critical='$critical', a='$a', b='$b', minor='$minor', risk='$risk', saf='$saf', cat_t='$cat_t', cat_i='$cat_i', cat_m='$cat_m', cat_w='$cat_w', cat_o1='$cat_o1', cat_o2='$cat_o2', cat_d='$cat_d', cat_s='$cat_s', cost='$cost', raised='$raised', act='$act', day_raised='$day_raised', day_closed='$day_closed', stat='$stat', chacked='$chacked' WHERE threec_id='$threec_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../3c.php");
}

elseif (isset($_POST['delete-threec'])) {
// menghapus data dari database
mysqli_query($con,"DELETE FROM 3c WHERE threec_id='$threec_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../3c.php");
}
?>