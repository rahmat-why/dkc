<?php

require '../../f/fungsi/fungsi.php';

?>


<div class="top-bar">
  <i class="nav__toggle fa fa-bars" aria-hidden="true"></i>
  <img class="logo__icon" src="<?= url(); ?>assets/img/pramukakabbogor.png" style="width: 90px; height: 50px; padding-top: 10px;">
</div>
<div class="mobile-mask"></div>
<nav class="nav">
  <div class="m-logo">
    <img class="logo__icon" src="<?= url(); ?>assets/img/pramukakabbogor.png" style="width: 90px; height: 50px; padding-top: 10px;">
  </div>
  <div class="nav__item overview">
    <i class="fa fa-home" aria-hidden="true"></i>
    <span>Selamat Datang</span>
  </div>
  <a href="<?= url(); ?>adm/dkrr/adm/struktur-organisasi.php">
    <div class="nav__item">
      <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
      <span>Struktur Organisasi</span>
    </div>
  </a>
  <a href="<?= url(); ?>adm/dkrr/adm/sk-dkr.php">
    <div class="nav__item">
      <i class="fa fa-file-text" aria-hidden="true"></i>
      <span>SK DKR</span>
    </div>
  </a>
  <a href="<?= url(); ?>adm/dkrr/adm/index.php">
    <div class="nav__item">
      <i class="fa fa-folder-open" aria-hidden="true"></i>
      <span>Data Potensi</span>
    </div>
  </a>
  <a href="<?= url(); ?>adm/dkrr/adm/laporan-01-diklat.php">
    <div class="nav__item">
      <i class="fa fa-book" aria-hidden="true"></i>
      <span>Laporan 01 Diklat</span>
    </div>
  </a>
  <a href="<?= url(); ?>adm/dkrr/adm/laporan-02-gp.php">
    <div class="nav__item">
      <i class="fa fa-address-book" aria-hidden="true"></i>
      <span>Laporan 02 GP</span>
    </div>
  </a>
  <a href="<?= url(); ?>adm/dkrr/adm/program-kerja.php">
    <div class="nav__item">
      <i class="fa fa-cogs" aria-hidden="true"></i>
      <span>Program Kerja</span>
    </div>
  </a>
  <br><br><br>
  <a href="<?= url(); ?>adm/dkrr/adm/log/logout.php">
    <div class="nav__item">
      <i class="fa fa-power-off" aria-hidden="true"></i>
      <span>Logout</span>
    </div>
  </a>
  <a href="<?= url(); ?>adm/dkrr/adm/log/forgot.php">
    <div class="nav__item">
      <i class="fa fa-key" aria-hidden="true"></i>
      <span>Ubah Password</span>
    </div>
  </a>
</nav>
<div class="nav-footer">
  <i class="fa fa-angle-left" aria-hidden="true"></i>
</div>

<script src="assets/js/script.js"></script>