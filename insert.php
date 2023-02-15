<?php
    include('main.php');
?>

<head>
  <title>Create Skill Matrix</title>
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
        <div class="card-header"><b> INSERT SKILL MATRIX </b></div>
          <div class="card-body card-body-part">
            <form action="routers/skillmatrix.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="name">Name</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="name" name="skill_name" placeholder="Name" aria-label="Name" aria-describedby="button-addon2" required></input>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process1" name="process1" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process2" name="process2" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process3" name="process3" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process4" name="process4" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process5" name="process5" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process6" name="process6" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process7" name="process7" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="process">Process</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="number" min="0" max="4" class="form-control" id="process8" name="process8" placeholder="Process" aria-label="Process" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="remark">Remark</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="remark" name="skill_remark" placeholder="Remark" aria-label="Remark" aria-describedby="button-addon2">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                  <div class="col-4"></div>
                    <div class="col-3">
                      <input type="submit" name="add-skillmatrix" class="btn btn-success btn-block" type="submit" id="inputData" value="Submit"></input>
                    </div>
                    <div class="col-3">
                      <a href="skill.php" class="btn btn-primary btn-block" type="submit" >Back</a>
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
