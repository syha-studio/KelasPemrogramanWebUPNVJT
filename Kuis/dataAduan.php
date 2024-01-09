<?php
require 'functions.php';
$adu  = query("SELECT * FROM usersadu ORDER BY username DESC");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DATA ADUAN</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="dashboard.php"><button type="button" class="btn btn-light"><i class="bi bi-back"></i> Kembali</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">DATA ADUAN</h1>
      </div>
      <div class="d-flex justify-content-center pt-1 pb-3">
        <p class="text-start">Berikut adalah Data Aduan yang dikirim oleh Mahasiswa.</p>
      </div>
    <!-- Akhir Keterangan --> 

    <!-- Tabel dan Kontrol -->
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Nama Lengkap</th>
            <th>NPM</th>
            <th>Program Studi</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($adu as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["username"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["namaLengkap"]?></td>
            <td><?= $row["NPM"]?></td>
            <td ><?= $row["ProgramStudi"]?></td>
            <td class="text-center">
            <a class="p-1" href="cekAduan.php?username=<?= $row["username"];?>"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    </div>
  </body>
</html>