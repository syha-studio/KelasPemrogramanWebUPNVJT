<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="logOut nav-link" href="logout.php" style="color: #FF0000; font-weight: 700">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Menu Admin -->
    <section id="Menu Admin">
      <div class="container pt-5 pb-5">
        <div class="row text-start">
          <div class="col">
            <h4>Sistem Informasi akademik Fasilkom UPN Veteran Jawa Timur</h4>
            <p>Selamat Datang, <span style="font-weight:500"><?= $_GET["username"]  ?><br><?= date("l, j F Y") ?></span> </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Menu Admin -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>