<?php
require '3-function.php';
$departemen = query("SELECT * FROM departemen");
$job = query("SELECT * FROM jobs");

$id = $_GET["id_pegawai"];
$ganti  = query("SELECT * FROM pegawai WHERE id_pegawai = $id")[0];
$ganti2  = query("SELECT pegawai.id_departemen, pegawai.id_job, departemen_name, job_title FROM pegawai
              JOIN departemen ON pegawai.id_departemen = departemen.id_departemen
              JOIN jobs ON pegawai.id_job = jobs.id_job WHERE id_pegawai = $id")[0];


if ( isset($_POST["submit"])){
  if (ubahpegawai($_POST) > 0){
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ubah Pegawai</title>
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
        <h1 class="fw-bolder">Ubah Data Pegawai</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="" method ="post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id_pegawai" value="<?= $ganti["id_pegawai"]?>">
        <div class="mb-2">
          <label for="id_departemen" class="form-label">Departemen</label>
          <select class="form-select" name="id_departemen" id="id_departemen" required>
            <option selected value="<?= $ganti2["id_departemen"]?>"><?= $ganti2["departemen_name"]?></option>
          <?php foreach ($departemen as $deptname) : ?>
            <option value="<?=$deptname['id_departemen']?>"><?=$deptname['departemen_name']?></option>
          <?php endforeach?>
          </select>
        </div>
        <div class="mb-2">
          <label for="id_job" class="form-label">Jabatan</label>
          <select class="form-select" name="id_job" id="id_job" required>
            <option selected value="<?= $ganti2["id_job"]?>"><?= $ganti2["job_title"]?></option>
          <?php foreach ($job as $jt) : ?>
            <option value="<?=$jt['id_job']?>"><?=$jt['job_title']?></option>
          <?php endforeach?>
          </select>
        </div>
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input class="form-control" type="text" name="nama" id="nama" required value = "<?= $ganti["nama"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="email" name="email" id="email" required value = "<?= $ganti["email"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="no_hp" class="form-label">Nomor Telepon</label>
          <input class="form-control" type="text" name="no_hp" id="no_hp" required value = "<?= $ganti["no_hp"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="hire_date" class="form-label">Tanggal Masuk</label>
          <input class="form-control" type="date" name="hire_date" id="hire_date" required value = "<?= $ganti["hire_date"]?>" autocomplete ="off">  
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>