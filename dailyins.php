<?php
    include('main.php');
?>

<head>
  <title>Create Daily Output</title>
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
        <div class="card-header"></div>
          <div class="card-body card-body-part">
            <form  action="routers/daily.php" method="post" class="row g-3">
                <div class="col-md-12">
                    <label for="defect" class="form-label">Defect</label>
                    <input type="text" class="form-control" id="defect" name="defect" placeholder="Defect" aria-label="Defect" aria-describedby="button-addon2" required></input>
                </div>
                <div class="col-md-2">
                    <label for="time1" class="form-label">7 - 8 AM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time1" name="time1" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time2" class="form-label">8 - 9 AM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time2" name="time2" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time3" class="form-label">9 - 10 AM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time3" name="time3" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time4" class="form-label">10 - 11 AM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time4" name="time4" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time5" class="form-label">11 - 12 AM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time5" name="time5" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time6" class="form-label">12 - 1 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time6" name="time6" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time7" class="form-label">1 - 2 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time7" name="time7" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time8" class="form-label">2 - 3 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time8" name="time8" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time9" class="form-label">3 - 4 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time9" name="time9" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time10" class="form-label">4 - 5 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time10" name="time10" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time11" class="form-label">5 - 6 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time11" name="time11" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2">
                    <label for="time12" class="form-label">6 - 7 PM</label>
                    <input type="number" min="0" max="10" class="form-control" id="time12" name="time12" placeholder="Time" aria-label="Time" aria-describedby="button-addon2">
                </div>
                <div class="form-group row ">
                  <div class="col-auto"></div>
                    <div class="">
                      <input type="submit" name="add-daily" class="btn btn-success btn-block" type="submit" id="inputData" value="Submit"></input>
                    </div>
                    <div class="">
                      <a href="dailyout.php" class="btn btn-primary btn-block" type="submit" >Back</a>
                    </div>
                </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</section>