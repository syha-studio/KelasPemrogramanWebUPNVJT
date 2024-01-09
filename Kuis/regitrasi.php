<?php
require 'functions.php';

if ( isset($_POST["submit"])){
  if (tambahAdu($_POST) > 0){
    echo "
      <script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href = 'cekAduan.php?username=".$_POST["username"]."'
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulir - Registrasi</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="index.php"><button type="button" class="btn btn-light"><i class="bi bi-x-square-fill"></i> Batal</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h2 class="fw-bolder">Registrasi Sistem Informasi Pengaduan Fasilkom UPN Jatim</h2>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <div class="d-flex justify-content-center">
        <form action="" method ="post" enctype="multipart/form-data" class="row g-3 pt-2 justify-content-center">
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="username" class="form-label">Username</label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" name ="username" autocomplete ="off"/>
            </div>
          </div>
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="password" class="form-label">Password</label>
            </div>
            <div class="col-6">
              <input type="password" class="form-control" name ="password"  autocomplete ="off"/>
            </div>
          </div>
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="email" class="form-label">Email</label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" name ="email"  autocomplete ="off"/>
            </div>
          </div>
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="namaLengkap" class="form-label">Nama Lengkap</label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" name ="namaLengkap" autocomplete ="off"/>
            </div>
          </div>
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="NPM" class="form-label">NPM</label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" name ="NPM" autocomplete ="off"/>
            </div>
          </div>
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="programStudi" class="form-label">Program Studi</label>
            </div>
            <div class="col-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="programStudi" id="inlineRadio1" value="Informatika">
              <label class="form-check-label" for="inlineRadio1">Informatika</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="programStudi" id="inlineRadio2" value="Sistem Informasi">
              <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="programStudi" id="inlineRadio3" value="Sains Data">
              <label class="form-check-label" for="inlineRadio3">Sains Data</label>
            </div>
          </div>
          <div class="row g-2 d-flex justify-content-center">
            <div class="col-2">
              <label for="aduan" class="form-label">Isi Aduan</label>
            </div>
            <div class="col-6">
              <textarea class="form-control" placeholder="Isi Masalah" id="aduan" name="aduan" style="height: 100px"></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-center row g-2 pt-3">
            <div class="col-2">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>