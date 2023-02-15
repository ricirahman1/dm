<?php
include '../includes/connect.php';
$success = false;
$username = $_POST['username'];
$password = md5($_POST['password']);


	$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Visitor' AND not deleted;");
	while ($row = mysqli_fetch_array($result))
	{
		$success = true;
		$user_id = $row['id'];
		$name = $row['name'];
		$role = $row['role'];
	}
	if ($success == true)
	{
		session_start();
		$_SESSION['visitor_sid'] = session_id();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $name;
		header("location: ../visitor.php");
	}
	else
	{
		$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Admin' AND not deleted;");
		while ($row = mysqli_fetch_array($result))
		{
			$success = true;
			$user_id = $row['id'];
			$name = $row['name'];
			$role = $row['role'];
		}
		if ($success == true)
		{
			session_start();
			$_SESSION['admin_sid'] = session_id();
			$_SESSION['user_id'] = $user_id;
			$_SESSION['role'] = $role;
			$_SESSION['name'] = $name;
			header("location: ../main.php");
		}
		else
		{
			header("location: ../login.php");
		}
	}

?>