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
  <body class=" text-left text-white bg-dark";> 
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">  
      <div style="margin: 30px 200px; background-color: transparent;" class = "">  
          <form action="proses_tambah_pelanggan.php" method="post" style="padding : 80px;">
          <b style="font-size: 48px">Silahkan Daftar Terlebih Dahulu</b><br><br>
              Nama :
              <input type="text" name="nama" value="" class="form-control">
              <br>
              Alamat : 
              <textarea name="alamat" class="form-control" rows="4"></textarea>
              <br>
              No Telp : 
              <input type="text" name="telp" class="form-control">
              <br>
              Username : 
              <input type="text" name="username" value="" class="form-control">
              <br>
              Password : 
              <input type="password" name="password" value="" class="form-control">
              <br>
              <input type="submit" name="simpan" value="Register" class="btn btn-primary">
              <br>
              </form>
      </div> 
  </div>
  </body>
</html>
