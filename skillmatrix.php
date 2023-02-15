<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Skill Matrix</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/skill.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack"> SKILL MATRIX</div>
        <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>01 Februari 2023</option>
              <option value="1">01 Februari 2023</option>
              <option value="2">01 Februari 2023</option>
              <option value="3">01 Februari 2023</option>
            </select>
          </div>
    </div>

    <div class="content">
      <div class="content-title"> 
        <div class="content-title-sub">
          <div class="information">
            Date
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>01 Februari 2023</option>
              <option value="1">01 Februari 2023</option>
              <option value="2">01 Februari 2023</option>
              <option value="3">01 Februari 2023</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
            Department/Line
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Main Assy 1</option>
              <option value="1">Main Assy 2</option>
              <option value="2">Tampon 1</option>
              <option value="3">Tampon 2</option>
            </select>
          </div>
        </div>

        <div class="content-title-sub">
          <div class="information">
            Superior/GL
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Juna</option>
              <option value="1">Andi</option>
              <option value="2">Feby</option>
              <option value="3">Resti</option>
            </select>
          </div>
        </div>
      </div>


      <div class="content-information">
        <table class="table table-bordered border-light">
          <thead>
            <tr class="bg-judul text-white text-center">
              <th>NO</th>
              <th>NAME</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th><a href="record.php" class="text-white nav-link">MH</th>
              <th>REMARK</th>
            </tr>
          </thead>

          <tbody>
            <?php 
            $q = $conn->query("SELECT * FROM skillmatrixx");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
            <tr <?php if ($dt['skill_id'] %2 != 0) {?>class="<?php echo 'row-2 text-center'; } ?>" <?php if ($dt['skill_id'] %2 == 0) {?>class="<?php echo 'row-1 text-center'; } ?>">

              <td rowspan="3"><?php echo $no++ ?></td>

              <td><form method="get"><a href="training.php?name=<?php echo $dt['skill_name']?>" class="text-black nav-link"><?= $dt['skill_name'] ?> <input type="hidden" name="name" value="<?php echo $dt['skill_name']?>"></input></a></form></td>

              <td>
                <?php if ($dt['process1'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process1'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process1'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />';  } ?>
                <?php if ($dt['process1'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process1'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process2'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process2'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process2'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process2'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process2'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process3'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process3'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process3'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process3'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process3'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process4'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process4'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process4'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process4'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process4'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process5'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process5'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process5'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process5'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process5'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process6'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process6'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process6'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process6'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process6'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process7'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process7'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process7'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process7'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process7'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td>
                <?php if ($dt['process8'] == 0){ echo '<img src="img/Figpie.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process8'] == 1){ echo '<img src="img/Figpie1.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process8'] == 2){ echo '<img src="img/Figpie2.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process8'] == 3){ echo '<img src="img/Figpie3.svg" width="25" height="25" />'; } ?>
                <?php if ($dt['process8'] == 4){ echo '<img src="img/Figpie4.svg" width="25" height="25" />'; } ?>
              </td>

              <td rowspan="3"><?= $dt['skill_remark'] ?></td>

            </tr>
            <tr <?php if ($dt['skill_id'] %2 != 0) {?>class="<?php echo 'row-2 text-center'; } ?>" <?php if ($dt['skill_id'] %2 == 0) {?>class="<?php echo 'row-1 text-center'; } ?>">
              <td rowspan="2">Development Plan</td>
              <td>Level : <?= $dt['process1'] ?></td>
              <td>Level : <?= $dt['process2'] ?></td>
              <td>Level : <?= $dt['process3'] ?></td>
              <td>Level : <?= $dt['process4'] ?></td>
              <td>Level : <?= $dt['process5'] ?></td>
              <td>Level : <?= $dt['process6'] ?></td>
              <td>Level : <?= $dt['process7'] ?></td>
              <td>Level : <?= $dt['process8'] ?></td>
            </tr>
            <tr <?php if ($dt['skill_id'] %2 != 0) {?>class="<?php echo 'row-2 text-center'; } ?>" <?php if ($dt['skill_id'] %2 == 0) {?>class="<?php echo 'row-1 text-center'; } ?>">
              <td>Week : 1</td>
              <td>Week : 2</td>
              <td>Week : 3</td>
              <td>Week : 4</td>
              <td>Week : 5</td>
              <td>Week : 6</td>
              <td>Week : 7</td>
              <td>Week : 8</td>
            </tr>

 
          </tbody>
        <?php
    endwhile;
?>
          <tfoot>
             <tr class="text-center">
              <td rowspan="2">Total <br> Current</td>
              <td>Level 3 <img src="img/Figpie3.svg" width="25" height="25"/></td>
<?php
$query = "SELECT SUM(process1 = 3) AS 'process13',
  	            SUM(process1 = 4) AS 'process14',
                SUM(process2 = 3) AS 'process23',
                SUM(process2 = 4) AS 'process24',
                SUM(process3 = 3) AS 'process33',
                SUM(process3 = 4) AS 'process34',
                SUM(process4 = 3) AS 'process43',
                SUM(process4 = 4) AS 'process44',
                SUM(process5 = 3) AS 'process53',
                SUM(process5 = 4) AS 'process54',
                SUM(process6 = 3) AS 'process63',
                SUM(process6 = 4) AS 'process64',
                SUM(process7 = 3) AS 'process73',
                SUM(process7 = 4) AS 'process74',
                SUM(process8 = 3) AS 'process83',
                SUM(process8 = 4) AS 'process84'
                FROM skillmatrixx;";
$result = $conn->query($query);
while ($dt = $result->fetch_assoc()) {
?>
              <td><?php echo $dt['process13']?></td>
              <td><?php echo $dt['process23']?></td>
              <td><?php echo $dt['process33']?></td>
              <td><?php echo $dt['process43']?></td>
              <td><?php echo $dt['process53']?></td>
              <td><?php echo $dt['process63']?></td>
              <td><?php echo $dt['process73']?></td>
              <td><?php echo $dt['process83']?></td>
              <td></td>
            </tr>
            <tr class="text-center">
              <td>Level 4 <img src="img/Figpie4.svg"/></td>
              <td><?php echo $dt['process14']?></td>
              <td><?php echo $dt['process24']?></td>
              <td><?php echo $dt['process34']?></td>
              <td><?php echo $dt['process44']?></td>
              <td><?php echo $dt['process54']?></td>
              <td><?php echo $dt['process64']?></td>
              <td><?php echo $dt['process74']?></td>
              <td><?php echo $dt['process84']?></td>
              <td></td>
            </tr>
<?php
}
?>
            <tr class="text-center">
              <td rowspan="2">Target</td>
              <td>Level 3 <img  src="img/Figpie3.svg" width="25" height="25"/></td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td></td>
            </tr>
            <tr class="text-center">
              <td>Level 4 <img src="img/Figpie4.svg" width="25" height="25"/></td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td></td>
            </tr>
            <tr class=" text-center">
              <td rowspan="2">Gaps</td>
              <td>Level 3 <img src="img/Figpie3.svg" width="25" height="25"/></td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td></td>
            </tr>
            <tr class="text-center">
              <td>Level 4 <img src="img/Figpie4.svg" width="25" height="25"/></td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td></td>
            </tr>
          </tfoot>
        </table>
        </div>
      </div>
    </div>
  </body>
</html>