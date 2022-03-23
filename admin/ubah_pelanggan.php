<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Pelanggan</title>
</head>
<body>
<div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">  
   <form action="proses_ubah_pelanggan.php" method="post" style="padding : 80px;">
          <b style="font-size: 48px">Silahkan Daftar Terlebih Dahulu</b><br><br>
              Nama :
              <input type="text" name="nama" class="form-control" value="<?=$data_pelanggan['nama']?>" >
              <br>
              Alamat : 
              <textarea name="alamat" class="form-control" rows="4"></textarea>
              <br>
              No Telp : 
              <input type="text" name="telp" class="form-control" value="<?=$data_pelanggan['telp']?>">
              <br>
              Username : 
              <input type="text" name="username" value="<?=$data_pelanggan['username']?>" class="form-control">
              <br>
              Password : 
              <input type="password" name="password" value="" class="form-control">
              <br>
              <input type="submit" name="simpan" value="Register" class="btn btn-primary">
              <br>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>