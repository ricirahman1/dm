<?php
    include('main.php');
    if($_SESSION['admin_sid']==session_id())
	{
?>

<html>
<head>
    <title>Tally Sheet</title>
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
		<a href="tallyins.php" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table table-sm table-bordered border-light">
            <tr class="bg-judul text-white text-center">
                <th>Problem</th> 
				<th>Description</th>
                <th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
				<th>Sat</th>
				<th>Sun</th>
				<th>Total</th>
                <th>Action</th>
            </tr>
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM tally");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
<tr class="text-center"> 
    <td><?= $dt['problem'] ?></td>
    <td><?= $dt['description'] ?></td>
	<td><?= $dt['mon'] ?></td>
	<td><?= $dt['tue'] ?></td>
	<td><?= $dt['wed'] ?></td>
	<td><?= $dt['thu'] ?></td>
	<td><?= $dt['fri'] ?></td>
	<td><?= $dt['sat'] ?></td>
	<td><?= $dt['sun'] ?></td>
    <td><?= $dt['total'] ?></td>
    <td>
		<a href="tallyup.php?id=<?= $dt['tally_id'] ?>" title="Edit Tally" id="tally_id" name="tally_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-tally<?php echo $dt['tally_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<!-- //  here i am creating a modal popup code......... -->
<div id="delete-tally<?php echo $dt['tally_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['problem']?> ?
            </div>
            <form method="post" action="routers/tally.php">
                <input type="hidden" value="<?php echo $dt['tally_id']?>" name="tally_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-tally" value="Confirm" class="btn btn-danger btn-md"></input>
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