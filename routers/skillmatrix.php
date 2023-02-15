<?php 

include '../includes/connect.php';
 
$skill_id = $_POST['skill_id'];
$skill_name = $_POST['skill_name'];
$process1 = $_POST['process1'];
$process2 = $_POST['process2'];
$process3 = $_POST['process3'];
$process4 = $_POST['process4'];
$process5 = $_POST['process5'];
$process6 = $_POST['process6'];
$process7 = $_POST['process7'];
$process8 = $_POST['process8'];
$skill_remark = $_POST['skill_remark'];

if (isset($_POST['add-skillmatrix'])) {
// menginput data ke database
mysqli_query($con,"INSERT INTO skillmatrixx VALUES('','$skill_name','$process1','$process2','$process3','$process4','$process5','$process6','$process7','$process8','$skill_remark')");
 
header("location:../skill.php");
}

elseif (isset($_POST['update-skillmatrix'])) {
mysqli_query($con,"UPDATE skillmatrixx SET skill_name='$skill_name', process1='$process1', process2='$process2', process3='$process3', process4='$process4', process5='$process5', process6='$process6', process7='$process7', process8='$process8', skill_remark='$skill_remark' WHERE skill_id='$skill_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../skill.php");
}

elseif (isset($_POST['delete-skillmatrix'])) {
// menghapus data dari database
mysqli_query($con,"DELETE FROM skillmatrixx WHERE skill_id='$skill_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../skill.php");
}
?>