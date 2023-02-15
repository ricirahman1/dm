<?php 
include 'main.php';
include 'koneksi.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		$id = $_GET['id'];

        $query = mysqli_query($conn,"SELECT * FROM 3c WHERE threec_id='$id'");
		$row = mysqli_fetch_array($query);

	}else{
		header("location:3c.php");
	}
}else{
	header("location:3c.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update 3C Document</title>
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
<body>
<section class="content-wrapper" style="overflow: hidden;">
  <div class="container-fluid">
    <div class="content-line">
	  <div class="card">
        <div class="card-header"></div>
          <div class="card-body card-body-part">
            <form  action="routers/3c.php" method="post" class="row g-3">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-2" for="ref_no">Ref.No</label>
                      <div class="col-10">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="ref_no" name="ref_no" placeholder="Ref.No" aria-label="Ref.No" aria-describedby="button-addon2" value="<?php echo $row['ref_no']; ?>" required></input>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="critical" name="critical" value="1" <?php if ($row['critical'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="critical">Critical</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="a" name="a" value="1" <?php if ($row['a'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="a">A</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="b" name="b" value="1" <?php if ($row['b'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="b">B</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="minor" name="minor" value="1" <?php if ($row['minor'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="minor">Minor</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="risk" name="risk" value="1" <?php if ($row['risk'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="risk">Risk</label>
                  </div><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="saf" name="saf" value="1" <?php if ($row['saf'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="saf">Safety</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_t" name="cat_t" value="1" <?php if ($row['cat_t'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_t">Transportation</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_i" name="cat_i" value="1" <?php if ($row['cat_i'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_i">Inventory</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_m" name="cat_m" value="1" <?php if ($row['cat_m'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_m">Motion</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_w" name="cat_w" value="1" <?php if ($row['cat_w'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_w">Waiting</label>
                  </div><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_o1" name="cat_o1" value="1" <?php if ($row['cat_o1'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_o1">O.Product</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_o2" name="cat_o2" value="1" <?php if ($row['cat_o2'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_o2">O.Process</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_d" name="cat_d" value="1" <?php if ($row['cat_d'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_d">Defect</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cat_s" name="cat_s" value="1" <?php if ($row['cat_s'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cat_s">Skill</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cost" name="cost" value="1" <?php if ($row['cost'] == 1){ echo 'checked'; } ?>></input>
                    <label class="form-check-label" for="cost">Cost</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-2" for="concern">Concern</label>
                      <div class="col-10">
                        <div class="input-group mb-3">
                          <textarea class="form-control" id="concern" name="concern" placeholder="Concern" rows="4"><?php echo $row['concern'];?></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="raised">Raised By</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="raised" name="raised" placeholder="Raised By" aria-label="Raised" value="<?php echo $row['raised']; ?>"></input>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="day_raised">W.day Raised</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="day_raised" name="day_raised" placeholder="W.day Raised" aria-label="W.day Raised" value="<?php echo $row['day_raised']; ?>"></input>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="act">Action By</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="act" name="act" placeholder="Action By" aria-label="Action By" value="<?php echo $row['act']; ?>"></input>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-4" for="day_closed">W.day Closed</label>
                      <div class="col-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="day_closed" name="day_closed" placeholder="W.day Closed" aria-label="W.day Closed" value="<?php echo $row['day_closed']; ?>"></input>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-2" for="cause">Cause</label>
                      <div class="col-10">
                        <div class="input-group mb-3">
                          <textarea class="form-control" id="cause" name="cause" placeholder="Cause" rows="2"><?php echo $row['cause'];?></textarea>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-2" for="count">Countermeasure</label>
                      <div class="col-10">
                        <div class="input-group mb-3">
                          <textarea class="form-control" id="count" name="count" placeholder="Countermeasure" rows="2"><?php echo $row['count'];?></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-form-label col-2" for="stat">Status</label>
                      <div class="col-10">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="stat" name="stat" placeholder="Status" aria-label="Status" value="<?php echo $row['stat']; ?>"></input>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-2" for="chacked">Checked By</label>
                      <div class="col-10">
                        <div class="input-group mb-3">
                          <textarea class="form-control" id="chacked" name="chacked" placeholder="Checked By" rows="3"><?php echo $row['chacked'];?></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                <input type="hidden" name="threec_id" class="form-control" value="<?php echo $row['threec_id']; ?>">
                <div class="form-group row ">
                  <div class="col-auto"></div>
                    <div class="">
                      <input type="submit" name="update-threec" class="btn btn-success btn-block" type="submit" id="updateData" value="Submit"></input>
                    </div>
                    <div class="">
                      <a href="3c.php" class="btn btn-primary btn-block" type="submit" >Back</a>
                    </div>
                </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>