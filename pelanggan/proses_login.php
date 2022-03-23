<?php 
if($_POST){
  $username_pelanggan=$_POST['username'];
  $password_pelanggan=$_POST['password'];
  if(empty($username_pelanggan)){
    echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
  } elseif(empty($password_pelanggan)){
    echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
  } else {
    include "koneksi.php";
    $qry_login=mysqli_query($koneksi,"select * from pelanggan where username='".$username_pelanggan."' and password='".md5($password_pelanggan)."'");
    if(mysqli_num_rows($qry_login)>0){
      $dt_login=mysqli_fetch_array($qry_login);
      session_start();
      $_SESSION['id_pelanggan']   = $dt_login['id_pelanggan'];
      $_SESSION['nama']           = $dt_login['nama'];
      $_SESSION['status_login']   = true;
      header("location: home.php");
    } else {
      echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
    }
  }
}
?>

