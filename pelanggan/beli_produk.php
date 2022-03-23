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
  <?php include  "navbar.php"?>
  <main class="px-3">
     <?php
        include "koneksi.php";
        $query_detail_produk = mysqli_query($koneksi, "SELECT * FROM produk where id_produk = '".$_GET['id_produk']."'");
        $data_produk = mysqli_fetch_array($query_detail_produk);
    ?>
    <main class="container">
    <section class="py-5 text-center container">   
            <h1 class="fw-light">Produk</h1>
    </section>
    <div class="card mb-3" style="max-width: 100% color: white; text-align: left; background-color: transparent; box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-webkit-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-moz-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="../foto/<?=$data_produk['foto']?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form action="insert_cart.php?" method="POST">
                <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">
                <table class="table table-hover table-striped">
                    <thead style="color: white">
                        <tr>
                            <td>Nama</td>
                            <td><?=$data_produk['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>IDR <?=$data_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?=$data_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td><input type="number" name="qty" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-success" value="Beli"></td>
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>
  </main>

  <footer class="mt-auto text-white-50">
    <!-- <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p> -->
  </footer>
</div>
  </body>
</html>
