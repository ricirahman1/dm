<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>3C Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/3c1.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack"> 3C DOCUMENT</div>
    </div>

    <div class="content">
      <div class="content-title"> 
        <div class="content-title-sub">
          <div class="information">
            Month
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>April</option>
              <option value="1">April</option>
              <option value="2">April</option>
              <option value="3">April</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
           Department
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>MCC</option>
              <option value="1">OHC</option>
              <option value="2">MCC</option>
              <option value="3">Grooming</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
         Line
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Tampon 1</option>
              <option value="1">Main Assy 1</option>
              <option value="2">Main Assy 1</option>
              <option value="3">Main Assy 1</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
           Cell
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>1</option>
              <option value="1">2</option>
              <option value="2">3</option>
              <option value="3">4</option>
            </select>
          </div>
        </div>
      </div>

      <div class="content-information">
        <table class="table table-bordered border-light">
          <thead>
            <tr class="text-white text-center ">
                <th rowspan="3">No</th>
                <th rowspan="3">Ref.No</th>
                <th rowspan="3">Concern</th>
                <th rowspan="3">Cause</th>
                <th rowspan="3">Countermeasure</th>
                <th colspan="5">To be fillet for Product & Process 3c only</th>
                <th colspan="10">Category</th>
                <th colspan="2">Who</th>
                <th colspan="2">When</th>
                <th rowspan="3">Status</th>
                <th rowspan="3" class="text-wrap">Chacked by GL/Superior</th>
                
            </tr>
            <tr>
                <td >Critical</td>
                <td >A</td>
                <td >B</td>
                <td >minor</td>
                <td >Risk Level</td>
                <td >Safety</td>
                <td >T</td>
                <td >I</td>
                <td >M</td>
                <td >W</td>
                <td >O</td>
                <td >O</td>
                <td >D</td>
                <td >S</td>
                <td >Cost</td>
                <td >Raised by</td>
                <td >Action by</td>
                <td >W.day raised</td>
                <td >W.day closed</td>                
            </tr>
          </thead>
          <tbody>
          <?php 
            $q = $conn->query("SELECT * FROM 3c");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
           <tr <?php if ($dt['threec_id'] %2 != 0) {?>class="<?php echo 'row-2'; } ?>" <?php if ($dt['threec_id'] %2 == 0) {?>class="<?php echo 'row-1'; } ?>">
              <td class="text-center"><?= $no++ ?></td>
              <td class="text-center"><?php echo $dt['ref_no']?></td>
              <td class="text-center"><?php echo $dt['concern']?></td>
              <td class="text-center"><?php echo $dt['cause']?></td>
              <td class="text-center"><?php echo $dt['count']?></td>
              <td class="text-center"><?php if ($dt['critical'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['a'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['b'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['minor'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['risk'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['saf'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_t'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_i'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_m'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_w'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_o1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_o2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_d'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cat_s'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php if ($dt['cost'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
              <td class="text-center"><?php echo $dt['raised']?></td>
              <td class="text-center"><?php echo $dt['act']?></td>
              <td class="text-center"><?php echo $dt['day_raised']?></td>
              <td class="text-center"><?php echo $dt['day_closed']?></td>
              <td class="text-center"><?php echo $dt['stat']?></td>
              <td class="text-center"><?php echo $dt['chacked']?></td>
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