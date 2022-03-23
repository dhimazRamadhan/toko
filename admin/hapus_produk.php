<?php
    if ($_GET['id_produk']) {
        include "koneksi.php";
        $query_foto = mysqli_query($koneksi, "SELECT * FROM produk where id_produk = '".$_GET['id_produk']."'");
        $data_foto = mysqli_fetch_array($query_foto);
        
        $query_hapus = mysqli_query($koneksi, "DELETE FROM produk where id_produk = '".$_GET['id_produk']."'");
        unlink('../foto/'.$data_foto['foto']);
        if ($query_hapus) {
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_produk.php'; </script>";
        }
        else{
            echo "<script> alert ('Gagal dihapus'); location.href='tampil_buku.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>