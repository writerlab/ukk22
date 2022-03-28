<?php
if ($_GET['menu'] == "home") {
  include("views/home.php");
} 
else if ($_GET['menu'] == 'about') {
  include("views/about.php");
} 
else if ($_GET['menu'] == 'project') {
  include("views/project.php");
}
else if ($_GET['menu'] == 'contact') {
  include("views/contact.php");
}
else if ($_GET['menu'] == 'tambah-project') {
  include("views/tambah-project.php");
}
else if ($_GET['menu'] == 'ubah-project') {
  include("views/ubah-project.php");
}
else if ($_GET['menu'] == 'logout') {
  session_destroy();
  header('Location: index.php');
}
