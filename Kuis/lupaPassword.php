<?php 
require 'functions.php';

if ( isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $result = mysqli_query($conn, "SELECT * FROM usersadu where username = '$username' and email = '$email'");
  if (mysqli_num_rows($result) === 1){
      echo "
      <script>
        alert('Tautan reset password telah dikirim ke email ".$email."');
        document.location.href = 'index.php';
      </script>
      ";
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
    <title>Lupa Password</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- Login -->
    <section id="Login">
      <div class="container">
        <div class="d-flex justify-content-start pt-3">
          <a href="index.php"><button type="button" class="btn btn-light"><i class="bi bi-x-square-fill"></i> Batal</button></a>
        </div>
        <div class="row text-center mb-3 ">
          <div class="col mt-5 pt-5">
            <h4 id="Login">Reset Password</h4>
            <p>Silahkan masukkan username dan email yang terdaftar</p>
          </div>
        </div>
        <?php if (isset($error)) : ?>
        <div class="row text-center mb-1">
          <div class="col pt-1">
            <p style = "color : red;">Username/email salah!!</p>
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
                <label for="email" class="form-label">Email</label>
                </div>
                <div class="col-8">
                <input type="text" class="form-control" name ="email" placeholder="email" autocomplete ="off"/>
                </div>
              </div>
              <div class="col-auto pt-5 d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Akhir Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
