<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daily Output</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/daily_output1.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack"> DAILY OUTPUT</div>
    </div>

    <div class="content">
      <div class="content-title"> 
        <div class="content-title-sub">
          <div class="information">
            Line
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Main Assy 1</option>
              <option value="1">Main Assy 1</option>
              <option value="2">Main Assy 1</option>
              <option value="3">Main Assy 1</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
            Shift
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Night</option>
              <option value="1">Morning</option>
              <option value="2">Second</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
            Date
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>28 April 2022</option>
              <option value="1">28 April 2022</option>
              <option value="2">28 April 2022</option>
              <option value="3">28 April 2022</option>
            </select>
          </div>
        </div>


      </div>

      <div class="content-information">
        <table class="table table-bordered border-light">
          <thead>
            <tr class="text-white text-center ">
                <th rowspan="2">Code</th>
                <th rowspan="2">Defect</th>
                <th colspan="12">Time</th>
                <th rowspan="2" class="text-wrap">Total Reject</th>
            </tr>
            <tr>
                <td >7 - 8 AM</td>
                <td >8 - 9 AM</td>
                <td >9 - 10 AM</td>
                <td >10 - 11 AM</td>
                <td >11 - 12 AM</td>
                <td >12 - 1 PM</td>
                <td >1 - 2 PM</td>
                <td >2 - 3 PM</td>
                <td >3 - 4 PM</td>
                <td >4 - 5 PM</td>
                <td >5 - 6 PM</td>
                <td >6 - 7 PM</td>               
            </tr>
          </thead>
          <tbody>
          <?php 
            $q = $conn->query("SELECT * FROM dailyoutput");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
           <tr <?php if ($dt['daily_id'] %2 != 0) {?>class="<?php echo 'row-1'; } ?>" <?php if ($dt['daily_id'] %2 == 0) {?>class="<?php echo 'row-2'; } ?>">
              <td class="text-center"><?= $no++ ?></td>
              <td><?php echo $dt['defect']?></td>
              <td class="text-center"><?php echo $dt['time1']?></td>
              <td class="text-center"><?php echo $dt['time2']?></td>
              <td class="text-center"><?php echo $dt['time3']?></td>
              <td class="text-center"><?php echo $dt['time4']?></td>
              <td class="text-center"><?php echo $dt['time5']?></td>
              <td class="text-center"><?php echo $dt['time6']?></td>
              <td class="text-center"><?php echo $dt['time7']?></td>
              <td class="text-center"><?php echo $dt['time8']?></td>
              <td class="text-center"><?php echo $dt['time9']?></td>
              <td class="text-center"><?php echo $dt['time10']?></td>
              <td class="text-center"><?php echo $dt['time11']?></td>
              <td class="text-center"><?php echo $dt['time12']?></td>
              <td class="text-center"><?php echo $dt['total_reject']?></td>
            </tr>
            <?php
    endwhile;
?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>