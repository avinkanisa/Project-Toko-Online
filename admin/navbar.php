<?php
    session_start();
    if($_SESSION['status_login']!=true) {
        header('location:index.php');
    }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class="b-example-divider"></div>

<header>
  <div class="px-3 py-2 bg-white text-black">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img class="bi me-2" width="200"  role="img" src="logodlm.png">
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="home.php" class="nav-link text-dark">
            <img class="bi d-block mx-auto mb-1" src="home.png" width="24" height="24">
              Home
            </a>
          </li>
          <li>
            <a href="tampil_pelanggan.php" class="nav-link text-dark">
            <img class="bi d-block mx-auto mb-1" src="data.png" width="24" height="24">
              Data Pelanggan
            </a>
          <li>
            <a href="tampil_produk.php" class="nav-link text-dark">
            <img class="bi d-block mx-auto mb-1" src="product.png" width="24" height="24">
              Data Produk
            </a>
          </li>
          
          </li>
          <li>
            <a href="profil_petugas.php" class="nav-link text-dark">
            <img class="bi d-block mx-auto mb-1" src="user.png" width="24" height="24">
              Profil Petugas
            </a>
          </li>
          <li>
            <a href="proses_logout.php" class="nav-link text-dark">
              <img class="bi d-block mx-auto mb-1" src="logout.png" width="24" height="24">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
</body>