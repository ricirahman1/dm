<?php
include 'includes/connect.php';

	if($_SESSION['admin_sid']==session_id())
	{
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="js/timestamp.js"></script>


</head>


<body class="hold-transition sidebar-mini layout-fixed" style="height: auto;">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <span class="nav-link"></span>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #052E87;">
      <a href="/" class="brand-link text-center">
        <span class="brand-text font-weight-bold">Daily Management</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item">
                    <a class="nav-link " href="content.php">
                      <i class="nav-icon fas fa-home"></i>
                      <p class="text =" style="font-size: medium;">Dashboard</p>
                    </a>
                  </li>

                   <li class="nav-item">
                    <a class="nav-link dropdown-btn" href="skillmatrix.php">
                      <i class="nav-icon"><img src="img/icon-kaizen.png" width=18px; height=18px; /></i>
                      <p class="text" style="font-size: medium">Skill Matrix</p>
                    </a>
                  </li>
                 

                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn">
                      <i class="nav-icon"><img src="img/icon-kaizen.png" width=18px; height=18px; /></i>
                      <p class="text" style="font-size: medium">Kaizen Tracking</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn" href="6s.php">
                      <i class="nav-icon"><img src="img/icon-6s.png" width=18px; height=18px;; /></i>
                      <p class="text" style="font-size: medium">6S Checklist</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn" href="dailyout.php">
                      <i class="nav-icon"><img src="img/icon-daily.png" width=18px; height=18px;; /></i>
                      <p class="text" style="font-size: medium">Daily Output</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn" href="tally.php">
                      <i class="nav-icon"><img src="img/icon-tally.png" width=18px; height=18px; /></i>
                      <p class="text" style="font-size: medium">Tally Sheet</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn" href="fishbone.php">
                      <i class="nav-icon"><img src="img/icon-fishbone.png" width=18px; height=18px; /></i>
                      <p class="text" style="font-size: medium">Fishbone & 5 Why</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn" href="3c.php">
                      <i class="nav-icon"><img src="img/icon-3c.png" width=18px; height=18px; /></i>
                      <p class="text" style="font-size: medium">3C Document</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn">
                      <i class="nav-icon"><img src="img/icon-yama.png" width=18px; height=18px; /></i>
                      <p class="text" style="font-size: medium">Yamazumi Chart</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn">
                      <i class="nav-icon fas fa-database"></i>
                      <p class="text text-size" style="font-size: medium;">Master Data</p>
                      <div class="dropdown-container">
                        <a class="nav-link" href="#">
                          <i class="nav-icon"><img src="img/icon1.png" width=24px; height=24px; /></i>
                          <p class="text" style="font-size: medium;">Line</p>
                        </a>
                        <a class="nav-link" href="#">
                          <i class="nav-icon"><img src="img/icon2.png" width=24px; height=24px; /></i>
                          <p class="text" style="font-size: medium;">Employ</p>
                        </a>
                        <a class="nav-link" href="#">
                          <i class="nav-icon"><img src="img/icon4.png" width=24px; height=24px; /></i>
                          <p class="text" style="font-size: medium;">Skill</p>
                        </a>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-btn">
                      <i class="nav-icon fas fa-cog"></i>
                      <p class="text text-size" style="font-size: medium;">Settings</p>
                      <div class="dropdown-container">
                        <a class="nav-link" href="#">
                          <i class="nav-icon fas fa-users"></i>
                          <p class="text" style="font-size: medium;">Users</p>
                        </a>
                        <a class="nav-link" href="#">
                          <i class="nav-icon fas fa-user-cog"></i>
                          <p class="text" style="font-size: medium;">My Account</p>
                        </a>
                        <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                          <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                          <p class="text" style="font-size: medium;">Logout </p>
                        </a>
                      </div>
                    </a>
                  </li>
                </ul>
        </nav>
      </div>
    </aside>
  </div>

<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabelLogout"></h5>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to logout?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
					<a href="routers/logout.php" class="btn btn-danger">Yes</a>
				</div>
			</div>
		</div>
</div>


<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>
<script src="jquery/jquery.min.js"></script>
<script src="jquery-ui/jquery-ui.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/adminlte.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:main.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>