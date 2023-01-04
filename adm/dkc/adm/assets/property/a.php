<?php

session_start();

require '../../f/fungsi/fungsi.php';

if (isset($_POST['thn'])) {
  sunting__thn();
  header('location:../../beranda/index.php');
}

?>  
