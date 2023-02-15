<?php
    include('main.php');
?>

<head>
  <title>Create 6S</title>
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
        <div class="card-header"><b>Safety (Make it Safe)  Menciptakan situasi yang aman</b></div>
          <div class="card-body card-body-part">
            <div><b>4. Kondisi area kerja aman, pintu keluar tidak di blokir, bahaya & pengaman mesin, MSCS, alarm berada di tempat dan bekerja</b></div>
            <form  action="routers/6s4.php" method="post" class="row g-3">
                <div class="col-md-1">
                    <label for="date1" class="form-label">1</label>
                    <input type="number" min="0" max="1" class="form-control" id="date1" name="date1" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date2" class="form-label">2</label>
                    <input type="number" min="0" max="1" class="form-control" id="date2" name="date2" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date3" class="form-label">3</label>
                    <input type="number" min="0" max="1" class="form-control" id="date3" name="date3" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date4" class="form-label">4</label>
                    <input type="number" min="0" max="1" class="form-control" id="date4" name="date4" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date5" class="form-label">5</label>
                    <input type="number" min="0" max="1" class="form-control" id="date5" name="date5" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date6" class="form-label">6</label>
                    <input type="number" min="0" max="1" class="form-control" id="date6" name="date6" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date7" class="form-label">7</label>
                    <input type="number" min="0" max="1" class="form-control" id="date7" name="date7" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date8" class="form-label">8</label>
                    <input type="number" min="0" max="1" class="form-control" id="date8" name="date8" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date9" class="form-label">9</label>
                    <input type="number" min="0" max="1" class="form-control" id="date9" name="date9" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date10" class="form-label">10</label>
                    <input type="number" min="0" max="1" class="form-control" id="date10" name="date10" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date11" class="form-label">11</label>
                    <input type="number" min="0" max="1" class="form-control" id="date11" name="date11" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date12" class="form-label">12</label>
                    <input type="number" min="0" max="1" class="form-control" id="date12" name="date12" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date13" class="form-label">13</label>
                    <input type="number" min="0" max="1" class="form-control" id="date13" name="date13" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date14" class="form-label">14</label>
                    <input type="number" min="0" max="1" class="form-control" id="date14" name="date14" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date15" class="form-label">15</label>
                    <input type="number" min="0" max="1" class="form-control" id="date15" name="date15" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date16" class="form-label">16</label>
                    <input type="number" min="0" max="1" class="form-control" id="date16" name="date16" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date17" class="form-label">17</label>
                    <input type="number" min="0" max="1" class="form-control" id="date17" name="date17" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date18" class="form-label">18</label>
                    <input type="number" min="0" max="1" class="form-control" id="date18" name="date18" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date19" class="form-label">19</label>
                    <input type="number" min="0" max="1" class="form-control" id="date19" name="date19" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date20" class="form-label">20</label>
                    <input type="number" min="0" max="1" class="form-control" id="date20" name="date20" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date21" class="form-label">21</label>
                    <input type="number" min="0" max="1" class="form-control" id="date21" name="date21" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date22" class="form-label">22</label>
                    <input type="number" min="0" max="1" class="form-control" id="date22" name="date22" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date23" class="form-label">23</label>
                    <input type="number" min="0" max="1" class="form-control" id="date23" name="date23" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date24" class="form-label">24</label>
                    <input type="number" min="0" max="1" class="form-control" id="date24" name="date24" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date25" class="form-label">25</label>
                    <input type="number" min="0" max="1" class="form-control" id="date25" name="date25" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date26" class="form-label">26</label>
                    <input type="number" min="0" max="1" class="form-control" id="date26" name="date26" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date27" class="form-label">27</label>
                    <input type="number" min="0" max="1" class="form-control" id="date27" name="date27" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date28" class="form-label">28</label>
                    <input type="number" min="0" max="1" class="form-control" id="date28" name="date28" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date29" class="form-label">29</label>
                    <input type="number" min="0" max="1" class="form-control" id="date29" name="date29" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date30" class="form-label">30</label>
                    <input type="number" min="0" max="1" class="form-control" id="date30" name="date30" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="col-md-1">
                    <label for="date31" class="form-label">31</label>
                    <input type="number" min="0" max="1" class="form-control" id="date31" name="date31" placeholder="Date" aria-label="Date" aria-describedby="button-addon2">
                </div>
                <div class="form-group row py-4">
                  <div class="col-auto"></div>
                    <div class="">
                      <input type="submit" name="add-sixs" class="btn btn-success btn-block" type="submit" id="inputData" value="Submit"></input>
                    </div>
                    <div class="">
                      <a href="6sins3.php" class="btn btn-primary btn-block" type="submit" >Back</a>
                    </div>
                    <div class="">
                      <a href="6sins4.php" class="btn btn-danger btn-block" type="submit" >Next</a>
                    </div>
                </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</section>