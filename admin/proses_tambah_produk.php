<?php
    $nama_produk = $_POST['nama_produk']; 
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "../foto/";

    include "koneksi.php";

    move_uploaded_file($temp,$folder. $name);

    #proses insert data
    $sql = "insert into produk (nama_produk, deskripsi, harga, foto) 
    VALUES ('".$nama_produk."','".$deskripsi."','".$harga."','".$name."')";

    #eksekusi 
    $result = mysqli_query($koneksi,$sql);
    if($result){
        echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
    } 
?>