<?php
if (isset($_POST['simpan'])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $keterangan = $_POST['keterangan'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../foto/';
  $folder = $folder . basename($namaFoto);

  if(!empty($foto)) {
    $q = mysqli_query($koneksi, 
    "update project set nama='$nama', keterangan='$keterangan'
    where id=$id"
    );
    $message = "<div class='alert alert-success'>Project berhasil diubah!</div>";
  } else {
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
      rename("../foto/$namaFoto", "../foto/$namaFoto");
      $q = mysqli_query($koneksi, 
      "update project set nama='$nama', keterangan='$keterangan', foto='$namaFoto'
      where id=$id"
      );
      $message = "<div class='alert alert-success'>Project berhasil diubah!</div>";
    }
  }
}


$id = $_GET['id'];
$getData = mysqli_query($koneksi, "select * from project where id=$id");
$data = mysqli_fetch_assoc($getData);
?>

<div class="row">
  <div class="col-md-6">
    <h1>
      Ubah Project <?=$data['nama']?>
      <a href="?menu=project" class="btn btn-danger">kembali</a>
    </h1>
    <?=$message?>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control" value="<?=$data['nama']?>" required>
      </div>
      <div class="form-group">
        <label>UPLOAD FOTO</label>
        <img src="../../foto/<?=$data['foto']?>" width="300px">
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>KETERANGAN</label>
        <textarea name="keterangan" cols="30" rows="3" class="form-control" required><?=$data['keterangan']?></textarea>
      </div>
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>