<?php
function save_contact() {
  if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $simpan = mysqli_query($koneksi, "insert into contact values (
      NULL, '$email', '$nama', '$pesan'
      )");
  }
  return $simpan;
}