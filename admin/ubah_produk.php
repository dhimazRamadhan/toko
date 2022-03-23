<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "koneksi.php";
        $query_produk = mysqli_query($koneksi, "select * from produk where id_produk='".$_GET['id_produk']."'");
        $data_produk = mysqli_fetch_array($query_produk);
    ?>
    <?php
    ?>
    <br></br>
    <div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">
        <div class="card">
            <div class="card-body">
                <form action="proses_ubah_produk.php" method="post" style="padding : 80px;" enctype ="multipart/form-data">
                    <h1>Update Produk</h1>
                    <br>
                    <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="<?=$data_produk['nama_produk']?>" placeholder="Masukkan Nama Produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" width="200" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" value="<?=$data_produk['harga']?>" placeholder="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="Foto" class="form-label">Foto</label>
                        <img style = "width : 100px" src = "../foto/<?=$data_produk['foto']?>">                       
                        <input type="file" class="form-control" name="foto" value="" placeholder="Masukkan Foto"  required> 
                    </div>
                    <button type="submit" class="btn btn-primary">Edit produk</button>
                </form>
            </div>
        </div>
    </div>
    <td></td>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
