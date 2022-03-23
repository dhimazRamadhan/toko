
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
  <body class="d-flex h-100 text-left text-white bg-dark";"> 
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include  "navbar.php" ?>
  
  <main class="px-3" style=" color: white">
    <div class="container" >
        <div class="card" style="padding: 20px; margin-top: 50px; background-color: transparent; box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-webkit-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57);-moz-box-shadow: 10px 12px 25px -1px rgba(0,0,0,0.57); >
            <div class="card-body">
            <table class="table" style="color: white;">
                <h1 style="font-weight: bold !important;">History Transaksi</h1>
                <br>
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL TRANSAKSI</th>
                    <th scope="col">PRODUK</th>
                    <th scope="col">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    $transaksi = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi DESC");
                    $no=0;
                    while($data_transaksi=mysqli_fetch_array($transaksi)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_transaksi['tanggal']?></td>
                        <td>
                            <?php
                            $detail_transaksi = mysqli_query($koneksi, "SELECT a.*, b.nama_produk FROM detail_transaksi a JOIN produk b ON a.id_produk=b.id_produk WHERE a.id_transaksi = '".$data_transaksi['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($detail_transaksi)){
                                echo "<p>( ".$data_detail['qty']."x ) ".$data_detail['nama_produk']." IDR ".$data_detail['subtotal']." </p>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $detail_transaksi = mysqli_query($koneksi, "SELECT SUM(subtotal) total FROM detail_transaksi WHERE id_transaksi = '".$data_transaksi['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($detail_transaksi)){
                                echo "<p>IDR ".$data_detail['total']."</p>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
  </main>

  <footer class="mt-auto text-white-50">
  </footer>
  </div>
  </body>
</html>
