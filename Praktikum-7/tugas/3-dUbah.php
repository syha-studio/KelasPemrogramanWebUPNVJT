<?php
require '3-function.php';

$id = $_GET["id_departemen"];
$ganti  = query("SELECT * FROM departemen WHERE id_departemen = $id")[0];


if ( isset($_POST["submit"])){
  if (ubahdepartemen($_POST) > 0){
    echo "
      <script>
        alert('Data Berhasil Diubah!');
        document.location.href = '3-CRUDPegawai.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
        document.location.href = '3-CRUDPegawai.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ubah Departemen</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <a class="navbar-brand" href="3-CRUDPegawai.php" style="color: white; font-weight: 700">PROGRAM KELOLA PEGAWAI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="3-CRUDPegawai.php"><button type="button" class="btn btn-light"><i class="bi bi-x-square-fill"></i> Batal</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h1 class="fw-bolder">Ubah Data Departemen</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="" method ="post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id_departemen" value="<?= $ganti["id_departemen"]?>">
        <div class="mb-2">
          <label for="departemen_name" class="form-label">Nama Departemen</label>
          <input class="form-control" type="text" name="departemen_name" id="departemen_name" required value = "<?= $ganti["departemen_name"]?>" autocomplete ="off">  
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>
