<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Produk</title>
</head>
<body>
    <div>
    <!-- (nama_buku,pengarang,deskripsi,foto)  -->
<div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">   
    <form action="proses_tambah_produk.php" method="post" style="padding : 80px;" enctype ="multipart/form-data">
        <h2>Tambah Produk</h2>
        <br>
        Nama produk :  
        <input type="text" name="nama_produk" value="" class="form-control" require>
        <br>
        Deskripsi :
        <br> 
        <textarea name="deskripsi" class="form-control" width="200" require></textarea>  
        <br>
        Harga : 
        <input type="text" name="harga" value="" class="form-control" require>
        <br>
        Foto :
        <br> 
        <input type="file" name="foto" value="" class="form-control" require>

        <br>
        <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">
    </form>
</div>    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
