<?php
if($_POST){
    $id_pelanggan=$_POST["id_pelanggan"];
    $nama_pelanggan=$_POST["nama_pelanggan"];
    $alamat=$_POST["alamat"];
    $telp=$_POST["telp"];
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($nama_pelanggan)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi,"update pelanggan set nama_pelanggan='".$nama_pelanggan."', alamat='".$alamat."', telp='".$telp."', username='".$username."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($koneksi));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        } else {
            $update=mysqli_query($koneksi,"update pelanggan set nama_pelanggan='".$nama_pelanggan."', alamat='".$alamat."',telp='".$telp."', username='".$username."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($koneksi)); 
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
        
    } 
}
?>