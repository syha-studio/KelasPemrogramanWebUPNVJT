<?php 
session_start();
if (isset($_SESSION["login"])){
  header ("Location: dashboard.php");
  exit;
}
require 'functions.php';

if ( isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM usersadu where username = '$username' and passwords ='$password'");

  if (mysqli_num_rows($result) === 1){
      $_SESSION["login"] = true;
      header("Location: dashboard.php?username=".$username);
      exit;
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistem Informasi Pengaduan</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>

  
    <!-- Login -->
    <section id="Login">
      <div class="container">
        <div class="d-flex justify-content-start pt-3">
          <a href="dataAduan.php"><button type="button" class="btn btn-light">Data Akun Pengaduan</button></a>
        </div>
        <div class="row text-center mb-3 ">
          <div class="col mt-5 pt-5 Proto">
            <h2 id="Login">Sistem Informasi Pengaduan <br> Fasilkom UPN Jatim</h2>
          </div>
        </div>
        <?php if (isset($error)) : ?>
        <div class="row text-center mb-1">
          <div class="col pt-1">
            <p style = "color : red;">Username/Password salah!!</p>
          </div>
        </div>
        <?php endif ?>
        <form action="" method ="post">
          <div class="row justify-content-center fs-5">
            <div class="col-md-5">
              <div class="row g-6 align-items-center">
                <div class="col-4">
                  <label for="username" class="form-label">Username</label>
                </div>
                <div class="col-8">
                  <input type="text" class="form-control" name ="username" placeholder="username" autocomplete ="off"/>
                </div>
              </div>
              <div class="row g-8 pt-3 align-items-center">
                <div class="col-4">
                <label for="password" class="form-label">Password</label>
                </div>
                <div class="col-8">
                <input type="password" class="form-control" name ="password" placeholder="password" autocomplete ="off"/>
                </div>
              </div>
              <div class="col-auto pt-5 d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
              </div>
            </div>
          </div>
        </form>
        <div class="row text-center mb-3 ">
          <div class="col">
            <a style="text-decoration:none; font-weight:500; color:red" href="lupaPassword.php">Lupa Password</a>
          </div>
        </div>
        <div class="row text-center mb-3 ">
          <div class="col">
          <a style="text-decoration:none; font-weight:500; color:blue" href="regitrasi.php">Registrasi</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
