<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) )
{
	header("location:main.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LOGIN</title>
    <link href="http://localhost/board/css/login.css" rel="stylesheet" />
    <link href="http://localhost/board/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body class="bg-blue" style="overflow: auto">
    <div style="width: 100vw; height: 100vh">
      <div class="container-fluid">
        <div class="row" style="border-radius: 15px; height: 100vh">
          <div class="col-md-6" style="background-color: #052e87">
            <div class="text-center"><img src="img/philips.png" class="foto" /></div>
            <p class="text-center text-white fw-bold fs-2">WELCOME PAGE</p>
            <p class="text-center text-white fw-bold">DAILY MANAGEMENT</p>
            <p class="text-center text-white fw-bold">BOARD</p>
          </div>
          <div class="col-md-6" style="background-color: #c4dffe">
            <h3 class="text-center" id="text" style="color: #052e87">USER LOGIN</h3>
            <form action="routers/router.php" method="post" id="form">
              <div class="mb-3">
                <input type="username" class="form-control" id="username" name="username" required autocomplete="username" style="border-radius: 20px 20px 20px 20px; background-color: #d6e9fe" placeholder=" Username" />
              </div>
              <div class="mb-3">
                <input id="password" type="password" class="form-control" id="password" name="password" required autocomplete="current-password" style="border-radius: 20px 20px 20px 20px; background-color: #d6e9fe" placeholder="Password" />
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <p style="color: #052e87">Remember</p>
              </div>
              <div class="d-flex justify-content-center">
                <a href="javascript:void(0);" onclick="document.getElementById('form').submit();" style="width: 120px; background-color: #052e87" class="btn btn-primary center-block">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

  </body>
</html>
<?php
}
?>