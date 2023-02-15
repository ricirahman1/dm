<?php
    include('main.php');
    if($_SESSION['admin_sid']==session_id())
	{
?>

<html>
<head>
    <title>3C Document</title>
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
		<a href="3cins.php" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table table-sm table-bordered border-light">
            <tr class="bg-judul text-white text-center">
                <th rowspan="2"><font size="1">No</font></th>
                <th rowspan="2"><font size="1">Ref.No</font></th>
                <th rowspan="2"><font size="1">Concern</font></th>
                <th rowspan="2"><font size="1">Cause</font></th>
                <th rowspan="2"><font size="1">Countermeasure</th>
                <th colspan="5"><font size="1">To be fillet for Product & Process 3c only</font></th>
                <th colspan="10"><font size="1">Category</font></th>
                <th colspan="2"><font size="1">Who</font></th>
                <th colspan="2"><font size="1">When</font></th>
                <th rowspan="2"><font size="1">Status</font></th>
                <th rowspan="2" class="text-wrap"><font size="1">Chacked by GL/Superior</font></th>
                <th rowspan="2"><font size="1">Action</font></th>
            </tr>
            <tr class="bg-judul text-white text-center">
                <td><font size="1">Critical</font></td>
                <td><font size="1">A</font></td>
                <td><font size="1">B</font></td>
                <td><font size="1">minor</font></td>
                <td><font size="1">Risk Level</font></td>
                <td><font size="1">Safety</font></td>
                <td><font size="1">T</font></td>
                <td><font size="1">I</font></td>
                <td><font size="1">M</font></td>
                <td><font size="1">W</font></td>
                <td><font size="1">O</font></td>
                <td><font size="1">O</font></td>
                <td><font size="1">D</font></td>
                <td><font size="1">S</font></td>
                <td><font size="1">Cost</font></td>
                <td><font size="1">Raised by</font></td>
                <td><font size="1">Action by</font></td>
                <td><font size="1">W.day raised</font></td>
                <td><font size="1">W.day closed</font></td>                
            </tr>
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM 3c");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>

<tr class="row-1 text-center" >
    <td ><font size="2"><?= $no++ ?></font></td>
    <td><font size="2"><?= $dt['ref_no'] ?></font></td>
    <td><font size="2"><?= $dt['concern'] ?></font></td>
    <td><font size="2"><?= $dt['cause'] ?></font></td>
    <td><font size="2"><?= $dt['count'] ?></font></td>
    <td><font size="2"><?php if ($dt['critical'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['a'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['b'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['minor'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['risk'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['saf'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_t'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_i'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_m'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_w'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_o1'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_o2'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_d'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cat_s'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?php if ($dt['cost'] == 1){ echo '<i class="fas fa-check"></i>'; } ?></font></td>
    <td><font size="2"><?= $dt['raised'] ?></font></td>
    <td><font size="2"><?= $dt['act'] ?></font></td>
    <td><font size="2"><?= $dt['day_raised'] ?></font></td>
    <td><font size="2"><?= $dt['day_closed'] ?></font></td>
    <td><font size="2"><?= $dt['stat'] ?></font></td>
    <td><font size="2"><?= $dt['chacked'] ?></font></td>
    <td class="text-center">
        <a href="3cup.php?id=<?= $dt['threec_id'] ?>" title="Edit 3C" id="threec_id" name="threec_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-threec<?php echo $dt['threec_id']?>"><i class="fas fa-trash-alt"></i></button>
    </td>
</tr>

<!-- //  here i am creating a modal popup code......... -->
<div id="delete-threec<?php echo $dt['threec_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['ref_no']?> ?
            </div>
            <form method="post" action="routers/3c.php">
                <input type="hidden" value="<?php echo $dt['threec_id']?>" name="threec_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-threec" value="Confirm" class="btn btn-danger btn-md"></input>
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