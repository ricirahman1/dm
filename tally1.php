<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tally Sheet</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/tally1.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack"> TALLY SHEET</div>
    </div>

    <div class="content">
      <div class="content-information">
        <table class="table table-bordered border-light">
          <thead>
            <tr class="text-white text-center ">
                <th colspan="2">
                  <div class="content-title-sub">
                    <div class="information">
                      Tally Sheet for actual week 
                    </div>
                    <div class="information-select">
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>2201</option>
                        <option value="1">2201</option>
                        <option value="2">2201</option>
                        <option value="3">2201</option>
                      </select>
                    </div>
                  </div>
                </th>
                <th colspan="7">
                  <div class="content-title-sub">
                    <div class="information">
                      Owner
                    </div>
                    <div class="information-select">
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Dani</option>
                        <option value="1">Dani</option>
                        <option value="2">Dani</option>
                        <option value="3">Dani</option>
                     </select>
                    </div>
                    </div>
                </th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                <td >Problem</td>
                <td >Description</td>
                <td >Mon</td>
                <td >Tue</td>
                <td >Wed</td>
                <td >Thu</td>
                <td >Fri</td>
                <td >Sat</td>
                <td >Sun</td>    
            </tr>
          </thead>
          <tbody>
          <?php 
            $q = $conn->query("SELECT * FROM tally");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
           <tr <?php if ($dt['tally_id'] %2 != 0) {?>class="<?php echo 'row-1 text-center'; } ?>" <?php if ($dt['tally_id'] %2 == 0) {?>class="<?php echo 'row-2 text-center'; } ?>">
              <td><?php echo $dt['problem']?></td>
              <td><?php echo $dt['description']?></td>
              <td><?php echo $dt['mon']?></td>
              <td><?php echo $dt['tue']?></td>
              <td><?php echo $dt['wed']?></td>
              <td><?php echo $dt['thu']?></td>
              <td><?php echo $dt['fri']?></td>
              <td><?php echo $dt['sat']?></td>
              <td><?php echo $dt['sun']?></td>
              <td><?php echo $dt['total']?></td>
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