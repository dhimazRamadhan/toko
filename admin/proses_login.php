<?php 
include "koneksi.php";
if($_POST){
  $username_petugas =$_POST['username'];
  $password_petugas =$_POST['password'];
  $level_petugas    =$_POST['level'];

}
  if(empty($username_petugas)){
    echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
  } else if(empty($password_petugas)){
    echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
  } else {
    include "koneksi.php";
    $qry_login=mysqli_query($koneksi,"select * from petugas where username='".$username_petugas."' and password='".md5($password_petugas)."' and level='".$level_petugas."'");
    if(mysqli_num_rows($qry_login)>0){
      $dt_login=mysqli_fetch_array($qry_login);
      session_start();
      $_SESSION['id_petugas']   = $dt_login['id_petugas'];
      $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
      $_SESSION['level'] = $dt_login['level'];
      $_SESSION['status_login'] = true;
      header("location: tampil_produk.php");
    } else {
      echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
    }
  }
?>

