<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class = "container" style="margin-top : 50px">
        <h1>Data Pelanggan</h1>        
        <br>     
        <table>
            <thead>
            <tr>
                <th style="width : 95%">
                    <form action="tampil_siswa.php" method ="POST">           
                    <input  type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian id/nama pelanggan">      
                </th>
                <th style="width : 5%">
                    <a type="button" class="btn btn-primary" href="tambah_pelanggan.php">Tambah</a>
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_pelanggan=mysqli_query($koneksi,"select * from pelanggan where id_pelanggan='$cari'or nama like'%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_pelanggan=mysqli_query($koneksi,"select * from pelanggan");
                }
                ?>
            </tbody>
            </table>
        </form>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Pelanggan</th>
                        <th scope="col">Nama pelanggan</th>
                        <th scope="col">Alamat </th>
                        <th scope="col">Telp</th>
                        <th scope="col">Username</th>
                        <th scope="col">Pass</th>
                        <th scope="col">Aksi</th>                        
                    </tr>
                </thead>
                <div>
                    
                </div>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_pelanggan["id_pelanggan"];?></td>
                                <td><?php echo $data_pelanggan["nama"];?></td>
                                <td><?php echo $data_pelanggan["alamat"];?></td>
                                <td><?php echo $data_pelanggan["telp"];?></td>
                                <td><?php echo $data_pelanggan["username"];?></td>
                                <td><?php echo $data_pelanggan["password"];?></td>
                                <td>
                                <a href="ubah_pelanggan.php?id_pelanggan=<?php echo $data_pelanggan['id_pelanggan']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus.pelanggan?id_pelanggan=<?php echo $data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>             
                            </tr>
                            </div>
                            </div>
                        <?php
                        }
                    ?>
                    
                    
                </tbody>
                <footer>        
                </footer>
        </table>
    </div> 
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>