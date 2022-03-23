<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Toko Online</title>
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
  <body class=" text-center text-white bg-dark"> 
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <?php include  "navbar.php"?> 
    <main class="px-3">
    <div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          include "koneksi.php";
          if (isset($_POST['cari'])) {
              $cari = $_POST['cari'];
              $query_produk = mysqli_query($koneksi, "select * from produk where id_produk = '$cari'");
          }
          else{
              $query_produk = mysqli_query($koneksi, "select * from produk");
          }
          while($data_produk = mysqli_fetch_array($query_produk)){
          ?>  
          <div style="color: white; text-align: left; width: 400px; margin-right: 20px; background-color: transparent; box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-webkit-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-moz-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57); padding: 5px 5px 5px 5px;" class="card123">
            <img src="../foto/<?=$data_produk['foto']?>" style="width:100%">
            <br>
              <h4><b><?=$data_produk['nama_produk']?></b></h4>
              <p class="card-text" style="font-weight: 100;color:gray"><?=$data_produk['deskripsi']?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="beli_produk.php?id_produk=<?=$data_produk['id_produk']?>" type="button" class="btn btn-sm 
                        btn-outline-secondary">
                        Beli
                      </a>
                    </div>
                    <small class="text-muted">IDR <?=$data_produk['harga']?></small>
              </div>
          </div>
          <?php
          }
          ?>
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