<?php
    include('main.php');
?>

<head>
  <title>Create Fishbone</title>
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
            <form action="routers/fish.php" method="post">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label col-4" for="method">Method</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="method" name="method" placeholder="Method" aria-label="Method" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="machine">Machine</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="machine" name="machine" placeholder="Machine" aria-label="Machine" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="material">Material</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="material" name="material" placeholder="Material" aria-label="Material" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="measurement">Measurement</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="measurement" name="measurement" placeholder="Measurement" aria-label="Measurement" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="environment">Environment</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="environment" name="environment" placeholder="Environment" aria-label="Environment" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="personnel">Personnel</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="personnel" name="personnel" placeholder="Personnel" aria-label="Personnel" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="why_1">1. Why</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="why_1" name="why_1" placeholder="Why" aria-label="Why" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="why_2">2. Why</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="why_2" name="why_2" placeholder="Why" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="why_3">3. Why</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="why_3" name="why_3" placeholder="Why" aria-label="Why" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="why_4">4. Why</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="why_4" name="why_4" placeholder="Why" aria-label="Why" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="why_5">5. Why</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="why_5" name="why_5" placeholder="Why" aria-label="Why" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_1">Happen 1</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_1" name="happen_1" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_2">Happen 2</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_2" name="happen_2" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_3">Happen 3</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_3" name="happen_3" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_4">Happen 4</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_4" name="happen_4" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_5">Happen 5</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_5" name="happen_5" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_6">Happen 6</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_6" name="happen_6" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="happen_7">Happen 7</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="1" class="form-control" id="happen_7" name="happen_7" placeholder="Happen" aria-label="Happen" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="root_day">Root Cause</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="root_day" name="root_day" placeholder="Root Cause" aria-label="Root Cause" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                  <div class="col-4"></div>
                    <div class="col-3">
                      <input type="submit" name="add-fish" class="btn btn-success btn-block" type="submit" id="inputData" value="Submit"></input>
                    </div>
                    <div class="col-3">
                      <a href="fishbone.php" class="btn btn-primary btn-block" type="submit" >Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </form> 
          </div>
      </div>
    </div>
  </div>
</section>