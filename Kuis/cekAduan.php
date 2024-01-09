<?php
require 'functions.php';
$id = $_GET["username"];
$show  = query("SELECT * FROM usersadu WHERE username = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data <?= $show["namaLengkap"]?></title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>

    <!-- BioData -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="dataAduan.php"><button type="button" class="btn btn-light"><i class="bi bi-back"></i> Kembali</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h1 class="fw-bolder">Data Aduan : <?= $show["namaLengkap"]?></h1>
      </div>
      <div class="justify-content-start pt-3 pb-3">
        <table class="table">
          <tr><th width ="275">Username</th><th width ="50">:</th><td><?= $show["username"]?></td></tr>
          <tr><th width ="275">Email</th><th width ="50">:</th><td><?= $show["email"]?></td></tr>
          <tr><th width ="275">Nama Lengkap</th><th width ="50">:</th><td><?= $show["namaLengkap"]?></td></tr>
          <tr><th width ="275">NPM</th><th width ="50">:</th><td><?= $show["NPM"]?></td></tr>
          <tr><th width ="275">Program Studi</th><th width ="50">:</th><td><?= $show["ProgramStudi"]?></td></tr>
          <tr><th width ="275">Isi Aduan</th><th width ="50">:</th><td><?= $show["aduan"]?></td></tr>
        </table> 
      </div>
    <!-- Akhir BioData -->
    </div>
  </body>
</html>
