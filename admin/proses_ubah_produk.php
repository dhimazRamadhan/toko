<?php
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk']; 
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];


    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "../foto/";



    include "koneksi.php";
    #mendapatkan data buku yang diubah
    $sql = "SELECT * from produk where id_produk='$id_produk'";
    #proses eksekusi
    $qry = mysqli_query($koneksi , $sql);
    $produk = mysqli_fetch_array($qry);
    #proses hapus file yang lama
    $path = $folder.$produk['foto'];
    if (file_exists($path)) {
        unlink($path);
    }

    move_uploaded_file($temp,$folder. $name);

    #proses update data
    $sql = "UPDATE produk SET nama_produk='$nama_produk',
    deskripsi = '$deskripsi',harga = '$harga', foto ='$name'
    where id_produk = '$id_produk'";

    #eksekusi 
    $result = mysqli_query($koneksi,$sql);
    if($result){
        echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
    }
 ?>  