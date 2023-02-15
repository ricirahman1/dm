<?php
    include('main.php');
    if($_SESSION['admin_sid']==session_id())
	{
?>

<html>
<head>
    <title>Daily Output</title>
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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="js/timestamp.js"></script>
</head>

<body>
<section class="content-wrapper" style="overflow: hidden;">
      <div class="container-fluid">
        <div class="content-line"><br>
		<a href="dailyins.php" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table table-sm table-bordered border-light">
            <thead>
            <tr class="bg-judul text-white text-center">
                <th rowspan="2">Code</th>
                <th rowspan="2">Defect</th>
                <th colspan="12">Time</th>
                <th rowspan="2" class="text-wrap">Total Reject</th>
                <th rowspan="2" class="text-wrap">Action</th>
            </tr>
            <tr class="bg-judul text-white text-center">
                <td>7 - 8 AM</td>
                <td>8 - 9 AM</td>
                <td>9 - 10 AM</td>
                <td>10 - 11 AM</td>
                <td>11 - 12 AM</td>
                <td>12 - 1 PM</td>
                <td>1 - 2 PM</td>
                <td>2 - 3 PM</td>
                <td>3 - 4 PM</td>
                <td>4 - 5 PM</td>
                <td>5 - 6 PM</td>
                <td>6 - 7 PM</td>               
            </tr>
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM dailyoutput");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
<tr> 
    <td class="text-center"><?= $no++ ?></td>
    <td><?= $dt['defect'] ?></td>
    <td class="text-center"><?= $dt['time1'] ?></td>
	<td class="text-center"><?= $dt['time2'] ?></td>
	<td class="text-center"><?= $dt['time3'] ?></td>
	<td class="text-center"><?= $dt['time4'] ?></td>
	<td class="text-center"><?= $dt['time5'] ?></td>
	<td class="text-center"><?= $dt['time6'] ?></td>
	<td class="text-center"><?= $dt['time7'] ?></td>
	<td class="text-center"><?= $dt['time8'] ?></td>
    <td class="text-center"><?= $dt['time9'] ?></td>
    <td class="text-center"><?= $dt['time10'] ?></td>
    <td class="text-center"><?= $dt['time11'] ?></td>
    <td class="text-center"><?= $dt['time12'] ?></td>
    <td class="text-center"><?= $dt['total_reject'] ?></td>
    <td class="text-center">
		<a href="dailyup.php?id=<?= $dt['daily_id'] ?>" title="Edit Daily" id="daily_id" name="daily_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-daily<?php echo $dt['daily_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<!-- //  here i am creating a modal popup code......... -->
<div id="delete-daily<?php echo $dt['daily_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['defect']?> ?
            </div>
            <form method="post" action="routers/daily.php">
                <input type="hidden" value="<?php echo $dt['daily_id']?>" name="daily_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-daily" value="Confirm" class="btn btn-danger btn-md"></input>
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