<?php
    include('main.php');
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<section class="content-wrapper" style="overflow: hidden;">
      <div class="container-fluid">
        <div class="content-line">
        <div class="card">
                <div class="card-body card-body-part">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-4" for="employ Id">Employ ID</label>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="" placeholder="" aria-label="" aria-describedby="button-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-4" for="employ Id">Employ Name</label>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="" placeholder="" aria-label="" aria-describedby="button-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-4 mb-3" for="pusage">Employ Position</label>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>TL</option>
                                        <option value="1">Operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button class="btn btn-primary btn-block" type="submit" id="inputData" href="">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>