<?php 
include('../koneksi.php');
$q = "SELECT * FROM `about`";
$data = mysqli_query($koneksi, $q);
$user = mysqli_fetch_assoc($data);

$user = json_encode($user);
print $user;