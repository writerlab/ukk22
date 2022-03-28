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
            <a href="#" class="btn btn-info">Ubah</a>
            <a href="#" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>