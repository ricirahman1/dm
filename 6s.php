<?php
    include('main.php');
    if($_SESSION['admin_sid']==session_id())
	{
?>

<html>
<head>
    <title>6S Checklist</title>
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
        <div class="content-line">
		<a href="6sins.php" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table table-sm table-bordered border-light">
            <tr class="bg-judul text-white text-center">
                <th>6S Checklist</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>
                <th>Action</th>
            </tr>
<tr>
    <th colspan="33">Safety (Make it Safe)  Menciptakan situasi yang aman</th>
</tr> 
<tr> 
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM safety1");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
    <td>1. Berapa skor audit 6S sebelumnya dan apa temuannya?</td>
    <td class="text-center"><?php echo $dt['date1']?></td>
    <td class="text-center"><?php echo $dt['date2']?></td>
    <td class="text-center"><?php echo $dt['date3']?></td>
    <td class="text-center"><?php echo $dt['date4']?></td>
    <td class="text-center"><?php echo $dt['date5']?></td>
    <td class="text-center"><?php echo $dt['date6']?></td>
    <td class="text-center"><?php echo $dt['date7']?></td>
    <td class="text-center"><?php echo $dt['date8']?></td>
    <td class="text-center"><?php echo $dt['date9']?></td>
    <td class="text-center"><?php echo $dt['date10']?></td>
    <td class="text-center"><?php echo $dt['date11']?></td>
    <td class="text-center"><?php echo $dt['date12']?></td>
    <td class="text-center"><?php echo $dt['date13']?></td>
    <td class="text-center"><?php echo $dt['date14']?></td>
    <td class="text-center"><?php echo $dt['date15']?></td>
    <td class="text-center"><?php echo $dt['date16']?></td>
    <td class="text-center"><?php echo $dt['date17']?></td>
    <td class="text-center"><?php echo $dt['date18']?></td>
    <td class="text-center"><?php echo $dt['date19']?></td>
    <td class="text-center"><?php echo $dt['date20']?></td>
    <td class="text-center"><?php echo $dt['date21']?></td>
    <td class="text-center"><?php echo $dt['date22']?></td>
    <td class="text-center"><?php echo $dt['date23']?></td>
    <td class="text-center"><?php echo $dt['date24']?></td>
    <td class="text-center"><?php echo $dt['date25']?></td>
    <td class="text-center"><?php echo $dt['date26']?></td>
    <td class="text-center"><?php echo $dt['date27']?></td>
    <td class="text-center"><?php echo $dt['date28']?></td>
    <td class="text-center"><?php echo $dt['date29']?></td>
    <td class="text-center"><?php echo $dt['date30']?></td>
    <td class="text-center"><?php echo $dt['date31']?></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
    <!-- //  here i am creating a modal popup code......... -->
<div id="delete-sixs<?php echo $dt['safety_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['safety_id']?> ?
            </div>
            <form method="post" action="routers/6s1.php">
                <input type="hidden" value="<?php echo $dt['safety_id']?>" name="safety_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-sixs" value="Confirm" class="btn btn-danger btn-md"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // end modal popup code........ -->
    <?php
    endwhile;
?>
</tr>
<tr> 
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM safety2");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
    <td>2. Informasi dan alat keamanan keselamatan digunakan</td>
    <td class="text-center"><?php echo $dt['date1']?></td>
    <td class="text-center"><?php echo $dt['date2']?></td>
    <td class="text-center"><?php echo $dt['date3']?></td>
    <td class="text-center"><?php echo $dt['date4']?></td>
    <td class="text-center"><?php echo $dt['date5']?></td>
    <td class="text-center"><?php echo $dt['date6']?></td>
    <td class="text-center"><?php echo $dt['date7']?></td>
    <td class="text-center"><?php echo $dt['date8']?></td>
    <td class="text-center"><?php echo $dt['date9']?></td>
    <td class="text-center"><?php echo $dt['date10']?></td>
    <td class="text-center"><?php echo $dt['date11']?></td>
    <td class="text-center"><?php echo $dt['date12']?></td>
    <td class="text-center"><?php echo $dt['date13']?></td>
    <td class="text-center"><?php echo $dt['date14']?></td>
    <td class="text-center"><?php echo $dt['date15']?></td>
    <td class="text-center"><?php echo $dt['date16']?></td>
    <td class="text-center"><?php echo $dt['date17']?></td>
    <td class="text-center"><?php echo $dt['date18']?></td>
    <td class="text-center"><?php echo $dt['date19']?></td>
    <td class="text-center"><?php echo $dt['date20']?></td>
    <td class="text-center"><?php echo $dt['date21']?></td>
    <td class="text-center"><?php echo $dt['date22']?></td>
    <td class="text-center"><?php echo $dt['date23']?></td>
    <td class="text-center"><?php echo $dt['date24']?></td>
    <td class="text-center"><?php echo $dt['date25']?></td>
    <td class="text-center"><?php echo $dt['date26']?></td>
    <td class="text-center"><?php echo $dt['date27']?></td>
    <td class="text-center"><?php echo $dt['date28']?></td>
    <td class="text-center"><?php echo $dt['date29']?></td>
    <td class="text-center"><?php echo $dt['date30']?></td>
    <td class="text-center"><?php echo $dt['date31']?></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
    <!-- //  here i am creating a modal popup code......... -->
<div id="delete-sixs<?php echo $dt['safety_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['safety_id']?> ?
            </div>
            <form method="post" action="routers/6s2.php">
                <input type="hidden" value="<?php echo $dt['safety_id']?>" name="safety_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-sixs" value="Confirm" class="btn btn-danger btn-md"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // end modal popup code........ -->
    <?php
    endwhile;
?>
</tr>
<tr> 
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM safety3");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
    <td>3. Pekerja telah dilatih dan skill matrix di perbaharui</td>
    <td class="text-center"><?php echo $dt['date1']?></td>
    <td class="text-center"><?php echo $dt['date2']?></td>
    <td class="text-center"><?php echo $dt['date3']?></td>
    <td class="text-center"><?php echo $dt['date4']?></td>
    <td class="text-center"><?php echo $dt['date5']?></td>
    <td class="text-center"><?php echo $dt['date6']?></td>
    <td class="text-center"><?php echo $dt['date7']?></td>
    <td class="text-center"><?php echo $dt['date8']?></td>
    <td class="text-center"><?php echo $dt['date9']?></td>
    <td class="text-center"><?php echo $dt['date10']?></td>
    <td class="text-center"><?php echo $dt['date11']?></td>
    <td class="text-center"><?php echo $dt['date12']?></td>
    <td class="text-center"><?php echo $dt['date13']?></td>
    <td class="text-center"><?php echo $dt['date14']?></td>
    <td class="text-center"><?php echo $dt['date15']?></td>
    <td class="text-center"><?php echo $dt['date16']?></td>
    <td class="text-center"><?php echo $dt['date17']?></td>
    <td class="text-center"><?php echo $dt['date18']?></td>
    <td class="text-center"><?php echo $dt['date19']?></td>
    <td class="text-center"><?php echo $dt['date20']?></td>
    <td class="text-center"><?php echo $dt['date21']?></td>
    <td class="text-center"><?php echo $dt['date22']?></td>
    <td class="text-center"><?php echo $dt['date23']?></td>
    <td class="text-center"><?php echo $dt['date24']?></td>
    <td class="text-center"><?php echo $dt['date25']?></td>
    <td class="text-center"><?php echo $dt['date26']?></td>
    <td class="text-center"><?php echo $dt['date27']?></td>
    <td class="text-center"><?php echo $dt['date28']?></td>
    <td class="text-center"><?php echo $dt['date29']?></td>
    <td class="text-center"><?php echo $dt['date30']?></td>
    <td class="text-center"><?php echo $dt['date31']?></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
    <!-- //  here i am creating a modal popup code......... -->
<div id="delete-sixs<?php echo $dt['safety_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['safety_id']?> ?
            </div>
            <form method="post" action="routers/6s3.php">
                <input type="hidden" value="<?php echo $dt['safety_id']?>" name="safety_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-sixs" value="Confirm" class="btn btn-danger btn-md"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // end modal popup code........ -->
</tr>
<?php
    endwhile;
?>
<tr>
<tr> 
<?php
    // Tampilkan semua data
	$conn=new mysqli("localhost","root","","dmboard");
    $q = $conn->query("SELECT * FROM safety4");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
?>
    <td>4. Kondisi area kerja aman, pintu keluar tidak di blokir, bahaya & pengaman mesin, MSCS, alarm berada di tempat dan bekerja</td>
    <td class="text-center"><?php echo $dt['date1']?></td>
    <td class="text-center"><?php echo $dt['date2']?></td>
    <td class="text-center"><?php echo $dt['date3']?></td>
    <td class="text-center"><?php echo $dt['date4']?></td>
    <td class="text-center"><?php echo $dt['date5']?></td>
    <td class="text-center"><?php echo $dt['date6']?></td>
    <td class="text-center"><?php echo $dt['date7']?></td>
    <td class="text-center"><?php echo $dt['date8']?></td>
    <td class="text-center"><?php echo $dt['date9']?></td>
    <td class="text-center"><?php echo $dt['date10']?></td>
    <td class="text-center"><?php echo $dt['date11']?></td>
    <td class="text-center"><?php echo $dt['date12']?></td>
    <td class="text-center"><?php echo $dt['date13']?></td>
    <td class="text-center"><?php echo $dt['date14']?></td>
    <td class="text-center"><?php echo $dt['date15']?></td>
    <td class="text-center"><?php echo $dt['date16']?></td>
    <td class="text-center"><?php echo $dt['date17']?></td>
    <td class="text-center"><?php echo $dt['date18']?></td>
    <td class="text-center"><?php echo $dt['date19']?></td>
    <td class="text-center"><?php echo $dt['date20']?></td>
    <td class="text-center"><?php echo $dt['date21']?></td>
    <td class="text-center"><?php echo $dt['date22']?></td>
    <td class="text-center"><?php echo $dt['date23']?></td>
    <td class="text-center"><?php echo $dt['date24']?></td>
    <td class="text-center"><?php echo $dt['date25']?></td>
    <td class="text-center"><?php echo $dt['date26']?></td>
    <td class="text-center"><?php echo $dt['date27']?></td>
    <td class="text-center"><?php echo $dt['date28']?></td>
    <td class="text-center"><?php echo $dt['date29']?></td>
    <td class="text-center"><?php echo $dt['date30']?></td>
    <td class="text-center"><?php echo $dt['date31']?></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
    <!-- //  here i am creating a modal popup code......... -->
<div id="delete-sixs<?php echo $dt['safety_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['safety_id']?> ?
            </div>
            <form method="post" action="routers/6s4.php">
                <input type="hidden" value="<?php echo $dt['safety_id']?>" name="safety_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-sixs" value="Confirm" class="btn btn-danger btn-md"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // end modal popup code........ -->
</tr>
<?php
    endwhile;
?>
    <th colspan="33">Sort (Get rid of  what's not needed)  Singkirkan apa yang tidak di perlukan</th>
</tr> 
<tr> 
    <td>1. Lantai, Peralatan, mesin dan area penyimpanan harus bersih</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>2. Sampah dan daur ulang berada di tempat/ bin yang benar</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr>
    <th colspan="33">Straighten(organize) Mengatur</th>
</tr> 
<tr> 
    <td>1. Lingkungan kerja yang baik dan aman</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>2. Jika menemukan waste segera ambil tindakan, tulis di 3C</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr>
    <th colspan="33">Sweep(clean and solve) Membersihkan dan Menyelesaikannya</th>
</tr> 
<tr> 
    <td>1. Lantai, Area kerja, Peralatan, Mesin, Lemari dan area penyimpanan bersih dengan 3F</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>2. Sampah dan daur ulang  dibuang dengan benar</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>3. Station kerja yang baik dan lingkungan yang bersih</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>4. Jika menemukan  sampah segera ambil tindakan</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr>
    <th colspan="33">Standardize(task)</th>
</tr> 
<tr> 
    <td>1. Tanya pada salah satu team member apa itu lean manufacture, 6S, 7W dan kaizen bulan lalu</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td><font size="2">2. Update management harian(standar work, skill matrix,hourly output, For record, <br> problem solving yang terbaru</font></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr>
    <th colspan="33">Sustain(keep it up) Mempertahankannya</th>
</tr> 
<tr> 
    <td>1. Standar work sheet terpasang dan digunakan</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>2. 6S telah di lakukan dengan benar, PM/TPM dilakukan sesuai jadwal</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<tr> 
    <td>3. Semua Kaizen yang dibuat telah diselesaikan kurang dari 3 hari</td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center"></td>
    <td class="text-center">
		<a href="6sup.php?id=<?= $dt['safety_id'] ?>" title="Edit 6S Checklist" id="safety_id" name="safety_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-sixs<?php echo $dt['safety_id']?>"><i class="fas fa-trash-alt"></i></button>
	</td>
</tr>
<!-- //  here i am creating a modal popup code......... -->
<div id="delete-sixs<?php echo $dt['safety_id']?>" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body font-weight-bold">
            Anda yakin akan menghapus data <?php echo $dt['safety_id']?> ?
            </div>
            <form method="post" action="routers/6s1.php">
                <input type="hidden" value="<?php echo $dt['safety_id']?>" name="safety_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete-sixs" value="Confirm" class="btn btn-danger btn-md"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // end modal popup code........ -->

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