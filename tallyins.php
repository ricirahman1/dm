<?php
    include('main.php');
?>

<head>
  <title>Create Tally Sheet</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/skillmatrix.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<section class="content-wrapper" style="overflow: hidden;">
  <div class="container-fluid">
    <div class="content-line">
	  <div class="card">
        <div class="card-header"><b> INSERT TALLY SHEET </b></div>
          <div class="card-body card-body-part">
            <form  action="routers/tally.php" method="post" class="row g-3">
                <div class="col-md-4">
                    <label for="problem" class="form-label">Problem</label>
                    <input type="text" class="form-control" id="problem" name="problem" placeholder="Problem" aria-label="Problem" aria-describedby="button-addon2" required></input>
                </div>
                <div class="col-md-2">
                    <label for="mon" class="form-label">Mon</label>
                    <input type="number" min="0" max="10" class="form-control" id="mon" name="mon" placeholder="Monday" aria-label="Monday" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="tue" class="form-label">Tue</label>
                    <input type="number" min="0" max="10" class="form-control" id="tue" name="tue" placeholder="Tuesday" aria-label="Tuesday" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="wed" class="form-label">Wed</label>
                    <input type="number" min="0" max="10" class="form-control" id="wed" name="wed" placeholder="Wednesday" aria-label="Wednesday" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="thu" class="form-label">Thu</label>
                    <input type="number" min="0" max="10" class="form-control" id="thu" name="thu" placeholder="Thursday" aria-label="Thursday" aria-describedby="button-addon2">
                </div>
                <div class="col-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
                </div>
                <div class="col-md-2">
                    <label for="fri" class="form-label">Fri</label>
                    <input type="number" min="0" max="10" class="form-control" id="fri" name="fri" placeholder="Friday" aria-label="Friday" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="sat" class="form-label">Sat</label>
                    <input type="number" min="0" max="10" class="form-control" id="sat" name="sat" placeholder="Saturday" aria-label="Saturday" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="sun" class="form-label">Sun</label>
                    <input type="number" min="0" max="10" class="form-control" id="sun" name="sun" placeholder="Sunday" aria-label="Sunday" aria-describedby="button-addon2">
                </div>
                <div class="form-group row py-5">
                  <div class="col-auto"></div>
                    <div class="py-5">
                      <input type="submit" name="add-tally" class="btn btn-success btn-block" type="submit" id="inputData" value="Submit"></input>
                    </div>
                    <div class="py-5">
                      <a href="tally.php" class="btn btn-primary btn-block" type="submit" >Back</a>
                    </div>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</section>