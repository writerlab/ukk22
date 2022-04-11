<?php
include('../koneksi.php');

if (isset($_POST['kirim'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($koneksi, "insert into login values (NULL, '$username', sha1('$password'), 1)");
  
  if($query){
    $pesan = "<div class='alert alert-success'>Akun berhasil dibuat!</div>";
  } else {
    $pesan = "<div class='alert alert-success'>Terjadi kesalahan!</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="./css/sb-admin-2.min.css">
</head>
<body class="bg-danger">
<div class="container">
<div class="row mt-5 mb-5">
  <div class="col-md-4 offset-md-4">
    <h3 class="mb-3 text-white">Registrasi <em>(Portofolio)</em></h3>
    <div class="card shadow-lg">
      <?=$pesan?>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <input type="text" name="username" placeholder="username" class="form-control" autofocus required>
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
          &nbsp;<a href="index.php?menu=login" class="text-dark">Login</a>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>