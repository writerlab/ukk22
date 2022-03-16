<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "personalsite";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if($koneksi) print "KONEK";
else print ('GA KONEK!');
