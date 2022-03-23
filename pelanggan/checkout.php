<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];

    if (count($cart) < 0){ 
      echo "<script>alert('Masukkan produk ke keranjang');location.href='cart.php';</script>";
    } else {
        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_pelanggan, tanggal) VALUES ('".$_SESSION['id_pelanggan']."', '".date('Y-m-d')."')");
        if ($query_transaksi) {
            $id = mysqli_insert_id($koneksi);
            foreach ($cart as $key => $value) {
                $subtotal = $value['qty'] * $value['harga'];
                $query_detail_transaksi = mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal) VALUES ('".$id."', '".$value['id_produk']."', '".$value['qty']."', '".$subtotal."')");
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Transaksi Berhasil');location.href='home.php'</script>";
        }
        else{
            echo "<script>alert('Gagal Transaksi');location.href='cart.php'</script>";
        }
    }
?>