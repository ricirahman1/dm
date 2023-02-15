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
          <div class="bginput">
            <form>
               <div class="row mb-3" >
                 <label for="text" class="col-sm-1 col-form-label">Line ID</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputText">
                </div>
              </div>
              <div class="row mb-3">
                <label for="text" class="col-sm-1 col-form-label">Line Name</label>
                 <div class="col-sm-4">
                   <input type="text" class="form-control" id="inputText">
                </div>
             </div>  
             <div class="button">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>           
            </form>
          </div>
        </div>
      </div>
</section>