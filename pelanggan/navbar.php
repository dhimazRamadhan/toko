<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<navbar class="mb-5">
    <div>
      <h3 class="float-md-start mb-0" style="font-family: 'Marck Script', cursive;">Mebel</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="Home.php">Beranda</a>
        <a class="nav-link" href="produk.php">Produk</a>
        <a class="nav-link" href="cart.php">Keranjang</a>
        <a class="nav-link" href="riwayat.php">Riwayat</a>
        <a class="nav-link" href="proses_logout.php">Logout</a>
      </nav>
    </div>
  </navbar>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
