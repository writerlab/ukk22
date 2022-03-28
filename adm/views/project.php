<?php
if ($_GET['hapus']) {
  $id = $_GET['hapus'];
  $q = mysqli_query($koneksi, "delete from project where id=$id");

}
?>

<div class="row">
  <div class="col-md-12">
    <h1>
      Project
      <a href="?menu=tambah-project" class="btn btn-primary">Tambah</a>
    </h1>
    <table class="table table-striped" id="">
      <thead>
        <tr>
          <th width="5%">#</th>
          <th width="15%">FOTO</th>
          <th>NAMA</th>
          <th width="20%">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $q = mysqli_query($koneksi, "select * from project");
        while($data = mysqli_fetch_array($q)) {?>
        <tr>
          <td><?=$data['id']?></td>
          <td><img src="../foto/<?=$data['foto']?>" width="130px"></td>
          <td><?=$data['nama']?></td>
          <td>
            <a href="?menu=ubah-project&id=<?=$data['id']?>" class="btn btn-info">Ubah</a>
            <a href="#" data-toggle="modal" data-target="#modal-<?=$data['id']?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <div class="modal fade" id="modal-<?=$data['id']?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger text-white">
                YAKIN HAPUS?
              </div>
              <div class="modal-body">
                apakah yakin ingin menghapus ini?
              </div>
              <div class="modal-footer">
                <a href="?menu=project&hapus=<?=$data['id']?>" class="btn btn-danger">ya</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>