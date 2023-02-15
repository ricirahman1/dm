<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fishbone</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
     <link href="http://localhost/board/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/fish.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack">FISHBONE</div>
    </div>
      <div class="content">
      <div class="content-top">
        <div class="content-left">
          <div class="content-fishbone"> 
            <div class="content-title-sub">
              <div class="information">
               week
              </div>
                <div class="information-select">
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>2201</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <?php 
                $q = $conn->query("SELECT * FROM fish");
                $no = 1; // nomor urut
                while ($dt = $q->fetch_assoc()) :
              ?>
              <div class="box">
                <div class="content-box-data">
                  <div class="content-box-information">
                    <div class="title-data">Method <br> <?= $dt['method'] ?></div>
                  </div>
                </div>
                <div class="content-box-data">
                  <div class="content-box-information">
                    <div class="title-data">Machines <br> <?= $dt['machine'] ?></div>
                  </div>
                </div>
                <div class="content-box-data">
                  <div class="content-box-information">
                    <div class="title-data">Material <br> <?= $dt['material'] ?></div>
                  </div>
                </div>
              </div>
              <div class="content-img">
                <img class="img-fish" src="img/fishbn.png">
              </div>
              <div class="box2">
                <div class="content-box-data2">
                  <div class="content-box-information2">
                    <div class="title-data">Measurement <br> <?= $dt['measurement'] ?></div>
                  </div>
                </div>
                <div class="content-box-data2">
                  <div class="content-box-information2">
                    <div class="title-data">Environment <br> <?= $dt['environment'] ?></div>
                  </div>
                </div>
                <div class="content-box-data2">
                  <div class="content-box-information2">
                    <div class="title-data">Personel <br> <?= $dt['personnel'] ?></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="content-right">
         <div class="content-5why">
            <div class="title-header">
               5 Why
            </div>
            <div class="conten-5why-information">
              <div class="">
                1.Why
                <div class="box-why"><?= $dt['why_1'] ?></div>
              </div>
              <div class="">
                2.Why
                <div class="box-why"><?= $dt['why_2'] ?></div>
              </div>
              <div class="">
                3.Why
                <div class="box-why"><?= $dt['why_3'] ?></div>
              </div>
              <div class="">
                4.Why
                <div class="box-why"><?= $dt['why_4'] ?></div>
              </div>
              <div class="">
                5.Why
                <div class="box-why"><?= $dt['why_5'] ?></div>
              </div>
            </div>
         </div>
        </div> 
	    </div>
      <div class="content-buttom">
        <div class="content-buttom-left">
          <div class="content-table">
            <div class="content-information">
              <table class="table table-bordered border-light">
                <thead>
                    <tr class="text-white text-center ">
                        <th rowspan="2">The Cause OF</th>
                        <th colspan="7">Happen Of the Day</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>        
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row-1">
                      <td>Method</td>
                      <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                    </tr>
                    <tr class="row-2">
                      <td>Machine</td>
                      <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                    </tr>
                    <tr class="row-1">
                      <td>Material</td>
                      <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                    </tr>
                    <tr class="row-2">
                      <td>Measurement/Equipment</td>
                      <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                    </tr>
                    <tr class="row-1">
                      <td>Environment</td>
                      <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                    </tr>
                    <tr class="row-2">
                      <td>Personnel</td>
                      <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                      <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
                    </tr>
                  </tbody>
              </table>
            </div>

          </div> 
        </div> 
        <div class="content-buttom-right">
          <div class="content-root">
            <div class="title-header-root">
               New Rootcause
            </div>
            <div class="content-root-information">
              <div class="title-data-root">1. <?= $dt['root_day'] ?></div>
              <div class="title-data-root">2. <?= $dt['root_day'] ?></div>
              <div class="title-data-root">3. <?= $dt['root_day'] ?></div>
              <div class="title-data-root">4. <?= $dt['root_day'] ?></div>
            </div>
           <div class="title-foot-root">
               Found By
           </div> 
        </div>
        <?php
                endwhile;
              ?>
      </div>
    </div>
   </div>
  </body>
</html>
