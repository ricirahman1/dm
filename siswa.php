<?php
    include('main.php');
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
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
<section class="content-wrapper" style="overflow: hidden;">
      <div class="container-fluid">
        <div class="content-line">
		<br>
		<a href="insert.php" class="btn btn-primary mb-2">Tambah Data</a>
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
    <td><?= $no++ ?></td>
    <td><?= $dt['skill_name'] ?></td>
    <td><?= $dt['process1'] ?></td>
	<td><?= $dt['process2'] ?></td>
	<td><?= $dt['process3'] ?></td>
	<td><?= $dt['process4'] ?></td>
	<td><?= $dt['process5'] ?></td>
	<td><?= $dt['process6'] ?></td>
	<td><?= $dt['process7'] ?></td>
	<td><?= $dt['process8'] ?></td>
    <td><?= $dt['skill_remark'] ?></td>
    <td>
		<a href="edit.php?id=<?= $dt['skill_id'] ?>" title="Edit Skill" id="skill_id" name="skill_id" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
        <a href="delete.php?id=<?= $dt['skill_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" id="skill_id" name="skill_id" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
	</td>
</tr>
<?php
    endwhile;
?>
		</table>
	</div>
</div>
</section>
</body>
</html>