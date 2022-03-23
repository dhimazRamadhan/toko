<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <? include "koneksi.php"; ?>
    <?php include "navbar.php"; ?>
    <div class = "container"></div>
    <div class = "container"style="margin-top : 50px">
        <h6 style="margin-top: -20px;">
            Selamat datang <?=$_SESSION['nama_petugas']?> bagian <?=$_SESSION['level']?>
        </h6> 
        <h1>Data Produk</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th style="width : 90%">
                        <form action="tampil_produk.php" method ="POST">           
                        <input type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian 'id/nama produk'">      
                    </th>
                    <th style="width : 5%">
                        <a type="button" class="btn btn-primary" href="tambah_produk.php">Tambah</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_produk=mysqli_query($koneksi,"select * from produk where id_produk='$cari'or nama_produk like'%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_produk=mysqli_query($koneksi,"select * from produk");
                }
                ?>
            </tbody>
        </form>
        </table>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
                        <th scope="col"></th>    
                        <th scope="col">Aksi</th>                 
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_produk = mysqli_fetch_array($qry_produk)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_produk["id_produk"];?></td>
                                <td><?php echo $data_produk["nama_produk"];?></td>
                                <td><?php echo $data_produk["deskripsi"];?></td>
                                <td><?php echo $data_produk["harga"];?></td>
                                <td><?php echo $data_produk["foto"];?></td>  
                                <td><img style = "width : 100px" src = "../foto/<?=$data_produk['foto']?>"></td>                            
                                <td>
                                <a href="ubah_produk.php?id_produk=<?=$data_produk['id_produk']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus_produk.php?id_produk=<?=$data_produk['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>             
                            </tr>
                            </div>
                        <?php
                        }
                    ?>
                </tbody>
        </table>
    </div> 
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>