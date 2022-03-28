<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $keterangan = $_POST['keterangan'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../foto/';
  $folder = $folder . basename($namaFoto);

  if (move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
    rename("../foto/$namaFoto", "../foto/$namaFoto");
    $q = mysqli_query($koneksi, 
    "insert into project values (NULL, '$nama', '$keterangan', '$namaFoto')"
    );
    $message = "<div class='alert alert-success'>Project berhasil ditambahkan!</div>";
  }
}
?>

<div class="row">
  <div class="col-md-6">
    <h1>
      Tambah Project
      <a href="?menu=project" class="btn btn-danger">kembali</a>
    </h1>
    <?=$message?>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label>UPLOAD FOTO</label>
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>KETERANGAN</label>
        <textarea name="keterangan" cols="30" rows="3" class="form-control"></textarea>
      </div>
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>