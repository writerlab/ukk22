<?php
// REMOVE MESSAGE
if($_GET['del']) {
  $id = $_GET['del'];
  $delete = mysqli_query($koneksi, 
  "delete from contact where id=$id");

  if($delete) $pesan = "<div class='alert alert-success'>Pesan telah dihapus!</div>";
}
?>
<div class="row">
  <div class="col-md-12">
    <h1>contact</h1>
    <?=$pesan?>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th width="5%">NO.</th>
            <th>NAME</th>
            <th>MESSAGE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $q = mysqli_query($koneksi, "select * from contact");
        $count = mysqli_num_rows($q);
        if($count > 0) {
          $i = 0;
          while($data=mysqli_fetch_array($q)) { $i++?>
            <tr>
              <td><?=$i?>.</td>
              <td><?=$data['nama']?></td>
              <td><?=$data['pesan']?></td>
              <td>
                <a data-toggle="modal" data-target="#del-<?=$data['id']?>" class="btn btn-danger">DELETE</a>
              </td>
            </tr>
            <div class="modal fade" id="del-<?=$data['id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                    <h3>HAPUS PESAN INI?</h3>
                  </div>
                  <div class="modal-body h5 pt-4 pb-4">
                    Apakah kamu yakin akan menghapus pesan ini?
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-dark btn-lg">TIDAK</button>
                    <a href="?menu=contact&del=<?=$data['id']?>" class="btn btn-outline-danger btn-lg">ya</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } // end.loop
        } // end.if.ada data 
        else { ?>
          <tr>
            <td colspan="4" class="text-center"><em>Tidak ada pesan</em></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>