<?php
if (empty($_SESSION['username'])) {
  include('views/login.php');
} else {
  include("views/admin.php");
}