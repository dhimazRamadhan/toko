<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Chechk Out</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">   
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark"> 
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include  "navbar.php" ?>
    <main class="container">
        <div class="card mb-3" style="max-width: 100% color: white; text-align: left; background-color: transparent; box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-webkit-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-moz-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);>
            <div class="card-body">
            <h1 style="font-weight: bold !important;padding: 30px 30px 30px 30px">Keranjang</h1>
            <br>
            <?php 
            if (COUNT(@$_SESSION['cart']) == 0) {
                ?> <h6 style="padding: 30px 30px 30px 30px;font-style: italic;">Keranjang kosong</h6>
                <?php
            }
            else {
            ?>
            <table class="table" style="padding: 30px 30px 30px 30px;color: white">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;?>
                    <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                    <tr>
                        <td><?=($no)?></td>
                        <td><?=$value['nama_produk']?></td>
                        <td><?=$value['harga']?></td>
                        <td><?=$value['qty']?></td>
                        <td><a href="delete_cart.php?id=<?=$key?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php $no++;?>
                    <?php endforeach;?>
                </tbody>
            </table>
            <a href="checkout.php" type="button" class="btn btn-primary">Checkout</a>
            <?php } ?>
            </div>
        </div>
    </main>
  <footer class="mt-auto text-white-50">
  </footer>
</div>
  </body>
</html>
