<?php
if($_POST){
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $telp           = $_POST['telp'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    if(empty($nama)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='';</script>";
    } else if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='';</script>";
    } else if(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into pelanggan (nama, alamat, telp, username, password) value ('".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='';</script>";
        }
    }
}
?>
