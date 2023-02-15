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
        <div class="card-header"></div>
          <div class="card-body card-body-part">
            <form action="routers/6s.php" method="post">
               <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-1 col-form-label">6S</label>
                <div class="col-sm-4">
                  <select class="form-control text-sm">
                    <option>Safety (Make it Safe)  Menciptakan situasi yang aman</option>
                    <option>Sort (Get rid of  what's not needed)  singkirkan apa yang tidak di perlukan</option>
                    <option>Straighten(organize) mengatur</option>
                    <option>Sweep(clean and solve) membersihkan dan menyelesaikannya</option>
                    <option>Standardize(task)</option>
                    <option>Sustain(keep it up) mempertahankannya</option>
                  </select>
                </div>
              </div>
              <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-1 col-form-label">Date</label>
                <div class="col-sm-4">
                  <input type="number" min="1" max="31" class="form-control" id="date" name="Date" placeholder="date" aria-label="date" aria-describedby="button-addon2">
                </div>
              </div>
              <table class="table table-bordered border-light">
                <thead>
                    <tr class="text-white text-center ">
                        <th rowspan="2 lh-base">NO</th>
                        <th rowspan="2">Kriteria</th>
                        <th colspan="2">Score</th>
                    </tr>
                    <tr>
                        <td >
                          <div class="text-center">1</div>
                          <div><a href="#" >cek</a></div>
                        </td>
                        <td >
                          <div class="text-center">1</div>
                          <div><a href="#" >cek</a></div>
                        </td>        
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr class="row-1">
                      <td>1</td>
                      <td>  Berapa skor audit 6S sebelumnya dan apa temuannya? </td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      
                    </tr>
                    <tr class="row-2">
                      
                      <td>2</td>
                      <td>Informasi dan alat keamanan keselamatan digunakan </td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      
                    </tr>
                    <tr class="row-1">
                     
                      <td>3</td>
                      <td>Pekerja telah dilatih dan skill matrix di perbaharui</td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      
                    </tr>
                    <tr class="row-2">
                      
                      <td>4</td>
                      <td>Kondisi area kerja aman, pintu keluar tidak di blokir, bahaya & pengaman mesin, MSCS, alarm berada di tempat dan bekerja</td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      <td>
                        <div class="form-check text-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                      </td>
                      
                    </tr>
                  </tbody>
              </table>
              <div class="form-group row left">
                  <div class="col-auto"></div>
                    <div class="py-1">
                      <input type="submit" name="add-tally" class="btn btn-success btn-block" type="submit" id="inputData" value="Submit"></input>
                    </div>
                    <div class="py-1">
                      <a href="tally.php" class="btn btn-primary btn-block" type="submit" >Back</a>
                    </div>
                  </div>
            </form> 
          </div>
      </div>
    </div>
  </div>
</section>