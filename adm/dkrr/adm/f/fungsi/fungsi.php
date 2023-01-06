<?php

require "koneksi.php";

// data potensi

function select__gudep() {
  global $conn;  
  $kwaran   = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM gugusdepan WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

function hapus__gudep() {
  global $conn;
  $id = htmlspecialchars($_POST['id']);
  return mysqli_query($conn, "DELETE FROM gugusdepan WHERE id = '$id'");
}


function insert__gudep() {
  global $conn;	
  $no_gudep = htmlspecialchars($_POST['nogudep']);
  $sanggar_bakti = htmlspecialchars($_POST['sanggarbakti']);

  $kwaran   = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  mysqli_query($conn, "INSERT INTO `gugusdepan`(`nogudep`,`sanggarbakti`,`capenpa`,`capenpi`,`penbanpa`,`penbanpi`,`penlakpa`,`penlakpi`,`pengarpa`,`pengarpi`,`capanpa`,`capanpi`,`panpa`,`panpi`,`pangarpa`,`pangarpi`,`jumlahpa`,`jumlahpi`,`tstamp`,`kwaran`) VALUES 
  ('$no_gudep','$sanggar_bakti',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'$tstamp','$kwaran')");

  // ('','$no_gudep','$sanggar_bakti',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'$tstamp','$kwaran')
}

function edit__gudep() {
  global $conn;
  $id 		   = htmlspecialchars($_POST['id']);
  $capenpa   =  htmlspecialchars($_POST['capenpa']);
  $capenpi   =  htmlspecialchars($_POST['capenpi']);
  $penbanpa  =  htmlspecialchars($_POST['penbanpa']);
  $penbanpi  =  htmlspecialchars($_POST['penbanpi']);
  $penlakpa  =  htmlspecialchars($_POST['penlakpa']);
  $penlakpi  =  htmlspecialchars($_POST['penlakpi']);
  $pengarpa  =  htmlspecialchars($_POST['pengarpa']);
  $pengarpi  =  htmlspecialchars($_POST['pengarpi']);
  $capanpa   =  htmlspecialchars($_POST['capanpa']);
  $capanpi   =  htmlspecialchars($_POST['capanpi']);
  $panpa     =  htmlspecialchars($_POST['panpa']);
  $panpi     =  htmlspecialchars($_POST['panpi']);
  $pangarpa  =  htmlspecialchars($_POST['pangarpa']);
  $pangarpi  =  htmlspecialchars($_POST['pangarpi']);
  $jumlahpa  = $capenpa + $penbanpa + $penlakpa + $pengarpa + $capanpa + $panpa + $pangarpa;
  $jumlahpi  = $capenpi + $penbanpa + $penlakpi + $pengarpi + $capanpi + $panpi + $pangarpi;

  $kwaran   = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  return mysqli_query($conn, "UPDATE gugusdepan SET
                        capenpa   = '$capenpa',
                        capenpi   = '$capenpi',
                        penbanpa  = '$penbanpa',
                        penbanpi  = '$penbanpi',
                        penlakpi  = '$penlakpi',
                        penlakpa  = '$penlakpa',
                        pengarpa  = '$pengarpa',
                        pengarpi  = '$pengarpi',
                        capanpa   = '$capanpa',
                        capanpi   = '$capanpi',
                        panpa     = '$panpa',
                        panpi     = '$panpi',
                        pangarpa  = '$pangarpa',
                        pangarpi  = '$pangarpi',
                        jumlahpa  = '$jumlahpa',
                        jumlahpi  = '$jumlahpi',
                        tstamp  = '$tstamp'
                      WHERE id    = '$id'
                      ");
}

// laporan 02 gp

function select__laporan02gp() {
  global $conn; 
  $kwaran   = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM laporan02gp WHERE kwaran = '$kwaran' ORDER BY id DESC");
}


function edit__laporan02gp() {
  global $conn; 

  $file        = $_FILES['file']['name'];
  $file_lama   = htmlspecialchars($_POST['file_lama']);
  $kwaran      = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');


if($file != "") {
  $ekstensi_diperbolehkan = array('doc', 'docx', 'pdf');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/laporan02gp/'.$nama_file_baru);
                  unlink("assets/file/laporan02gp/$file_lama");
                   return mysqli_query($conn, "UPDATE laporan02gp SET file = '$nama_file_baru', ekstensi = '$ekstensi', tstamp = '$tstamp' WHERE kwaran = '$kwaran'");

              }
    }
}

function insert__laporan02gp() {
  global  $conn;


  $file        = $_FILES['file']['name'];
  $file_lama   = htmlspecialchars($_POST['file_lama']);
  $kwaran      = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  if($file != "") {
  $ekstensi_diperbolehkan = array('doc', 'docx', 'pdf');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/laporan02gp/'.$nama_file_baru);
                   return mysqli_query($conn, "INSERT INTO laporan02gp SET file = '$nama_file_baru', ekstensi = '$ekstensi', tstamp = '$tstamp', kwaran = '$kwaran'");

              }
    }

}

// laporan 02 gp

function select__laporan01diklat() {
  global $conn; 
  $kwaran   = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM laporan01diklat WHERE kwaran = '$kwaran' ORDER BY id DESC");
}


function edit__laporan01diklat() {
  global $conn; 

  $file        = $_FILES['file']['name'];
  $file_lama   = htmlspecialchars($_POST['file_lama']);
  $kwaran      = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');


if($file != "") {
  $ekstensi_diperbolehkan = array('doc', 'docx', 'pdf');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/laporan01diklat/'.$nama_file_baru);
                  unlink("assets/file/laporan01diklat/$file_lama");
                   return mysqli_query($conn, "UPDATE laporan01diklat SET file = '$nama_file_baru', ekstensi = '$ekstensi', tstamp = '$tstamp' WHERE kwaran = '$kwaran'");

              }
    }
}

function insert__laporan01diklat() {
  global  $conn;


  $file        = $_FILES['file']['name'];
  $file_lama   = htmlspecialchars($_POST['file_lama']);
  $kwaran      = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  if($file != "") {
  $ekstensi_diperbolehkan = array('doc', 'docx', 'pdf');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/laporan01diklat/'.$nama_file_baru);
                   return mysqli_query($conn, "INSERT INTO laporan01diklat SET file = '$nama_file_baru', ekstensi = '$ekstensi', tstamp = '$tstamp', kwaran = '$kwaran'");

              }
    }

}

// program kerja

function insert__programkerja() {
  global $conn;
  $kegiatan = htmlspecialchars($_POST['kegiatan']);
  $bulan    = htmlspecialchars($_POST['bulan']);
  $text     = 'style="background-color:#ffff66"';
  $kwaran   = $_SESSION['username'];
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  if ($bulan == 'bulan1') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '$text', '', '', '', '', '', '', '', '', '', '', '', 'Januari', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan2') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '$text', '', '', '', '', '', '', '', '', '', '', 'Februari', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan3') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '$text', '', '', '', '', '', '', '', '', '', 'Maret', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan4') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '$text', '', '', '', '', '', '', '', '', 'April', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan5') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '$text', '', '', '', '', '', '', '', 'Mei', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan6') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '$text', '', '', '', '', '', '', 'Juni', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan7') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '', '$text', '', '', '', '', '', 'Juli', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan8') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '', '', '$text', '', '', '', '', 'Agustus', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan9') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '', '', '', '$text', '', '', '', 'September', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan10') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '', '', '', '', '$text', '', '', 'Oktober', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan11') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '', '', '', '', '', '$text', '', 'November', '$tstamp', '$kwaran')");
  }
  elseif ($bulan == 'bulan12') {
    mysqli_query($conn, "INSERT INTO `programkerja_dkr`(`kegiatan`,`bulan1`,`bulan2`,`bulan3`,`bulan4`,`bulan5`,`bulan6`,`bulan7`,`bulan8`,`bulan9`,`bulan10`,`bulan11`,`bulan12`,`bulan_pelaksanaan`,`tstamp`,`kwaran`) VALUES 
    ('$kegiatan', '', '', '', '', '', '', '', '', '', '', '', '$text', 'Desember', '$tstamp', '$kwaran')");
  }
}

function edit__programkerja() {
  global $conn;
  $id         = htmlspecialchars($_POST['id']);
  $kegiatan   = htmlspecialchars($_POST['kegiatan']);
  $bulan_lama = htmlspecialchars($_POST['bulan_lama']);
  $kwaran     = $_SESSION['username'];
  $text       = 'style="background-color:#ffff66"';

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  if ($bulan_lama == 'bulan1') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '$text',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan2') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '$text',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan3') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '$text',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan4') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '$text',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan5') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '$text',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan6') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '$text',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan7') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '$text',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan8') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '$text',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan9') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '$text',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan10') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '$text',
              bulan11   = '',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan11') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '$text',
              bulan12   = '',
              tstamp = '$tstamp'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
  if ($bulan_lama == 'bulan12') {
    $query = "UPDATE programkerja_dkr SET
              kegiatan = '$kegiatan',
              bulan1   = '',
              bulan2   = '',
              bulan3   = '',
              bulan4   = '',
              bulan5   = '',
              bulan6   = '',
              bulan7   = '',
              bulan8   = '',
              bulan9   = '',
              bulan10   = '',
              bulan11   = '',
              bulan12   = '$te,
              tstamp = '$tstamp'xt'
              WHERE id = '$id' AND kwaran = '$kwaran'
             ";
    mysqli_query($conn, $query);
  }
}

function select__programkerja() {
  global $conn; 
  $kwaran = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM programkerja_dkr WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

function hapus__programkerja() {
  global $conn;
  $id = htmlspecialchars($_POST['id']);
  return mysqli_query($conn, "DELETE FROM programkerja_dkr WHERE id = '$id'");
}

// struktur organisasi

function edit_strukturorganisasi() {
  global $conn; 

  $gambar        = $_FILES['gambar']['name'];
  $gambar_lama     = htmlspecialchars($_POST['gambar_lama']);
  $kwaran        = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/strukturorganisasi/'.$nama_file_baru);
                  $result = mysqli_query($conn, "UPDATE strukturorganisasi SET gambar = '$nama_file_baru', tstamp = '$tstamp' WHERE kwaran = '$kwaran'");
                  if ($result) {
                    unlink("assets/file/strukturorganisasi/$gambar_lama");
                  }else{
                    echo "";
                  }
              }
    }
}

function insert__strukturorganisasi() {
  global $conn;

  $gambar = $_FILES['gambar']['name'];
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  $kwaran = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('jpg', 'png');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_file_baru = $angka_acak.'-'.$gambar;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'assets/file/strukturorganisasi/'.$nama_file_baru);
      $result = mysqli_query($conn, "INSERT INTO strukturorganisasi SET gambar='$nama_file_baru', tstamp='$tstamp', kwaran='$kwaran'");
    }


  }
}

function select__strukturorganisasi() {
  global $conn; 
  $kwaran   = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM strukturorganisasi WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

// sk dkr

function select__skdkr() {
  global $conn; 
  $kwaran   = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM skdkr WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

function edit__skdkr() {
  global $conn; 

  error_reporting(0);

  $file        = $_FILES['file']['name'];
  $file_lama   = htmlspecialchars($_POST['file_lama']);

  $kwaran   = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');


if($file != "") {
  $ekstensi_diperbolehkan = array('docx', 'pdf');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/skdkr/'.$nama_file_baru);
                  unlink("assets/file/skdkr/$file_lama");
                  mysqli_query($conn, "UPDATE skdkr SET file = '$nama_file_baru', ekstensi = '$ekstensi', tstamp = '$tstamp' WHERE kwaran = '$kwaran'");

              }
    }
}

function insert__skdkr(){
  global $conn;

  $file        = $_FILES['file']['name'];
  $file_lama   = htmlspecialchars($_POST['file_lama']);

  $kwaran   = $_SESSION['username'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('H:i:s d-m-Y');

  if($file != "") {
  $ekstensi_diperbolehkan = array('docx', 'pdf');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'assets/file/skdkr/'.$nama_file_baru);
                  mysqli_query($conn, "INSERT INTO skdkr SET file = '$nama_file_baru', ekstensi = '$ekstensi', tstamp = '$tstamp', kwaran = '$kwaran'");

              }
    }
}

// daftar kwaran

function select__kwaran() {
  global $conn; 
  $wilayah = htmlspecialchars($_POST['wilayah']);
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = '$wilayah' ORDER BY id ASC");
}

function select__forgot() {
  global $conn;
  $kwaran   = $_SESSION['username'];
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE username = '$kwaran'");
}

function select__thn() {
  global $conn;
  return mysqli_query($conn, "SELECT * FROM thn");
}

?>