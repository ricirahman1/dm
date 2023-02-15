<?php
    include('main.php');
    if($_SESSION['admin_sid']==session_id())
	{
?>

<html>
<head>
    <title>Fishbone</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="http://localhost/board/css/skillmatrix.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="js/timestamp.js"></script>
</head>

<body>
<section class="content-wrapper" style="overflow: hidden;">
      <div class="container-fluid">
        <div class="content-line"><br>
		<a href="fishins.php" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table table-sm table-bordered border-light">
            <tr class="bg-judul text-white text-center">
                <th colspan="6">The Cause Of</th>
                <th colspan="5">5 Why</th>
                <th colspan="7">Happen On The Day</th>
                <th rowspan="2">New Root Cause</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr class="bg-judul text-white text-center">
                <td>Method</td>
                <td>Machine</td>
                <td>Material</td>
                <td>Measurement</td>
                <td>Environment</td>
                <td>Personnel</td>
                <td>1. Why</td>
                <td>2. Why</td>
                <td>3. Why</td>
                <td>4. Why</td>
                <td>5. Why</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>              
            </tr>
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM fish");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>

<tr class="row-1 text-center" >
    <td><?= $dt['method'] ?></td>
    <td><?= $dt['machine'] ?></td>
    <td><?= $dt['material'] ?></td>
    <td><?= $dt['measurement'] ?></td>
    <td><?= $dt['environment'] ?></td>
    <td><?= $dt['personnel'] ?></td>
    <td><?= $dt['why_1'] ?></td>
    <td><?= $dt['why_2'] ?></td>
    <td><?= $dt['why_3'] ?></td>
    <td><?= $dt['why_4'] ?></td>
    <td><?= $dt['why_5'] ?></td>
    <td><?php if ($dt['happen_1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?php if ($dt['happen_2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?php if ($dt['happen_3'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?php if ($dt['happen_4'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?php if ($dt['happen_5'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?php if ($dt['happen_6'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?php if ($dt['happen_7'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></td>
    <td><?= $dt['root_day'] ?></td>
    <td class="text-center">
        <a href="fishup.php?id=<?= $dt['fish_id'] ?>" title="Edit Fishbone" id="fish_id" name="fish_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-fish<?php echo $dt['fish_id']?>"><i class="fas fa-trash-alt"></i></button>
    </td>
</tr>

<!-- //  here i am creating a modal popup code......... -->
<div id="delete-fish<?php echo $dt['fish_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['material']?> ?
            </div>
            <form method="post" action="routers/fish.php">
                <input type="hidden" value="<?php echo $dt['fish_id']?>" name="fish_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-fish" value="Confirm" class="btn btn-danger btn-md"></input>
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