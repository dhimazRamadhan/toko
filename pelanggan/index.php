
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Toko Online</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet"> 
  </head>
  <body class="d-flex h-100 text-left bg-dark";> 
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <main class="px-3">
    <main class="form-signin" style="font-family: Arial">
      <form action="proses_login.php" method="POST" class="position-absolute top-50 start-50 translate-middle position-absolute top-50 start-50 translate-middle shadow-sm bg-light shadow px-4 mb-5 bg-body rounded">
      <img src="../src/logo.png" style="width: 135px; margin-left:60px" alt="logo">  
      <h1 class="fw-bolder text-center font-dark" style="font-family: 'Marck Script', cursive; margin-top:-20px">Mebel</h1><br>
        <div class="form-floating" style="padding-bottom: 8px">
          <input class="form-control" placeholder="name@example.com" name="username">
          <label class="fw-light">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control"  placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
        </div><br>
        <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
        <br>
        <p class="pt-3 text-muted">Not registered? <a href="register.php"> Create an account </a></p>
      </form>
    </main> 
  </main>



  <footer class="mt-auto text-white-50">
  </footer>
  </div>
  </body>
</html>
