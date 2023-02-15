<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>6S Checklist</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/6s1.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack"> 6S CHECKLIST</div>
    </div>

    <div class="content">
      <div class="content-title"> 
        <div class="content-title-sub">
          <div class="information">
            Area
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Area</option>
              <option value="1">Area</option>
              <option value="2">Area</option>
              <option value="3">Area</option>
            </select>
          </div>
        </div>

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
            Year
          </div>
          <div class="information-select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>2022</option>
              <option value="1">2022</option>
              <option value="2">2022</option>
              <option value="3">2022</option>
            </select>
          </div>
        </div>


      </div>

      <div class="content-information">
        <table class="table table-bordered border-light">
          <thead>
            <tr class="text-white fs-5 text-center ">
                <th rowspan="2" style="font-size:12px;">6S Checklist</th>
            </tr>
            <tr class="text-white text-center">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
            </tr>
          </thead>
          <tbody>
            <tr class="row-header1 text-black border-light">
                <th colspan="32">Safety (Make it Safe)  Menciptakan situasi yang aman</th>
            </tr>
            <tr class="row-1 text-black">
            <?php 
            $q = $conn->query("SELECT * FROM safety1");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
                <td>  1. Berapa skor audit 6S sebelumnya dan apa temuannya? </td>
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
                <?php
    endwhile;
?>
            </tr>
            <tr class="row-1 text-black">
            <?php 
            $q = $conn->query("SELECT * FROM safety2");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
                <td>  2. Informasi dan alat keamanan keselamatan digunakan  </td>
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
                <?php
    endwhile;
?>
             </tr>
            <tr class="row-1 text-black">
            <?php 
            $q = $conn->query("SELECT * FROM safety3");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
                <td> 3. Pekerja telah dilatih dan skill matrix di perbaharui </td>
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
                <?php
    endwhile;
?>
            </tr>
            <tr class="row-1 text-black">
            <?php 
            $q = $conn->query("SELECT * FROM safety4");
            $no = 1; // nomor urut
            while ($dt = $q->fetch_assoc()) :
            ?>
                <td> 4. Kondisi area kerja aman, pintu keluar tidak di blokir, bahaya & pengaman mesin, MSCS, alarm berada di tempat dan bekerja </td>
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
                <?php
    endwhile;
?>
            </tr>

            <tr class="row-header2 text-black border-light">
                <th colspan="32">Sort (Get rid of  what's not needed)  Singkirkan apa yang tidak di perlukan</th>
            </tr>
            <tr class="row-2 text-black">
                <td>  1. Lantai, Peralatan, mesin dan area penyimpanan harus bersih </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="row-2 text-black">
                <td>  2. Sampah dan daur ulang berada di tempat/ bin yang benar </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            <tr class="row-header1 text-black border-light">
                <th colspan="32">Straighten(organize) Mengatur</th>
            </tr>
            <tr class="row-1 text-black">
                <td>  1. Lingkungan kerja yang baik dan aman</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="row-1 text-black">
                <td>  2. Jika menemukan waste segera ambil tindakan, tulis di 3C  </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            <tr class="row-header2 text-black border-light">
                <th colspan="32">Sweep(clean and solve) Membersihkan dan Menyelesaikannya</th>
            </tr>
            <tr class="row-2 text-black">
                <td>  1. Lantai, Area kerja, Peralatan, Mesin, Lemari dan area penyimpanan bersih dengan 3F</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="row-2 text-black">
                <td>  2. Sampah dan daur ulang  dibuang dengan benar</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
             </tr>
             <tr class="row-2 text-black">
                <td> 3. Station kerja yang baik dan lingkungan yang bersih </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="row-2 text-black">
                <td> 4. Jika menemukan  sampah segera ambil tindakan </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr class="row-header1 text-black border-light">
                <th colspan="32">Standardize(task)</th>
            </tr>
            <tr class="row-1 text-black">
                <td>  1. Tanya pada salah satu team member apa itu lean manufacture, 6S, 7W dan kaizen bulan lalu</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="row-1 text-black">
                <td>  2. Update management harian(standar work, skill matrix,hourly output, For record, problem solving yang terbaru</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            <tr class="row-header2 text-black border-light">
                <th colspan="32">Sustain(keep it up) Mempertahankannya</th>
            </tr>
            <tr class="row-2 text-black">
                <td>  1. Standar work sheet terpasang dan digunakan</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="row-2 text-black">
                <td>  2. 6S telah di lakukan dengan benar, PM/TPM dilakukan sesuai jadwal</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="row-2 text-black">
                <td>  3. Semua Kaizen yang dibuat telah diselesaikan kurang dari 3 hari</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
          </tbody>

          <tfoot>
              <tr>
                <td>6S Level</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Audit By (TL)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Check By (GL)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </body>
</html>