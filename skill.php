<?php
    include('main.php');
    if($_SESSION['admin_sid']==session_id())
	{
?>

<html>
<head>
    <title>Skill Matrix</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/tambah-skill.css">
    <link href="http://localhost/board/css/skillmatrix.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="js/timestamp.js"></script>
</head>

<body>
<section class="content-wrapper" style="overflow: hidden;">
      <div class="container-fluid">
        <div class="content-line"><br>
		<a href="insert.php" class="btn btn-primary mb-2">Tambah Data</a>
        <a class="test">Superior/GL : Andy saputra </a>
        <a class="test">line : Main Assy #1</a>
        <table class="table table-sm table-bordered border-light">
            <tr class="bg-judul text-white text-center">
                <th>No</th> 
				<th>Name</th>
                <th>MH</th>
				<th>MH</th>
				<th>MH</th>
				<th>MH</th>
				<th>MH</th>
				<th>MH</th>
				<th>MH</th>
				<th>MH</th>
                <th>Remark</th>
                <th>Action</th>
            </tr>
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM skillmatrixx");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
<tr class="text-center">  
    <td rowspan="3"><?= $no++ ?></td>

    <td><?= $dt['skill_name'] ?></td>

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

    <td rowspan="3">
		<a href="update.php?id=<?= $dt['skill_id'] ?>" title="Edit Skill" id="skill_id" name="skill_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-skillmatrix<?php echo $dt['skill_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr class="text-center">
    <td rowspan="2" >Development Plan</td>
    <td>Level : <?= $dt['process1'] ?></td>
    <td>Level : <?= $dt['process2'] ?></td>
    <td>Level : <?= $dt['process3'] ?></td>
    <td>Level : <?= $dt['process4'] ?></td>
    <td>Level : <?= $dt['process5'] ?></td>
    <td>Level : <?= $dt['process6'] ?></td>
    <td>Level : <?= $dt['process7'] ?></td>
    <td>Level : <?= $dt['process8'] ?></td>
</tr>
<tr class="text-center">
    <td>Week : 1</td>
    <td>Week : 2</td>
    <td>Week : 3</td>
    <td>Week : 4</td>
    <td>Week : 5</td>
    <td>Week : 6</td>
    <td>Week : 7</td>
    <td>Week : 8</td>
</tr>
<!-- //  here i am creating a modal popup code......... -->
<div id="delete-skillmatrix<?php echo $dt['skill_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['skill_name']?> ?
            </div>
            <form method="post" action="routers/skillmatrix.php">
                <input type="hidden" value="<?php echo $dt['skill_id']?>" name="skill_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-skillmatrix" value="Confirm" class="btn btn-danger btn-md"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // end modal popup code........ -->
<?php
    endwhile;
?>
		</table>
	</div>
</div>
</section>
</body>
</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:main.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>