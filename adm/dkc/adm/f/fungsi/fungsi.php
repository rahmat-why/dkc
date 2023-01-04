<?php

// koneksi --------------------------------------------------------------------------------------------------------------

$conn = mysqli_connect('localhost', 'root', '', 'dkc');

// layer --------------------------------------------------------------------------------------------------------------

function select__layer() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM layer ORDER BY id DESC");
}

function insert__layer() {
  error_reporting(0);
  global $conn; 

  $judul   = htmlspecialchars($_POST['judul']);
  $gambar = $_FILES['gambar']['name'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, "../assets/file/layer/".$nama_file_baru); 
                   $query  = "INSERT INTO layer VALUES('', '$nama_file_baru', '$judul', '$tstamp')";
                   $result = mysqli_query($conn, $query);
              } else {               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/layer.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url(s)."adm/dkc/adm/log/logout.php';</script>";
    }
}

function sunting__layer() {
  global $conn; 

  $id   = htmlspecialchars($_POST['id']);
  $judul   = htmlspecialchars($_POST['judul']);
  $gambar_lama   = htmlspecialchars($_POST['gambar_lama']);
  $gambar = $_FILES['gambar']['name'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/layer/'.$nama_file_baru); 
                    unlink("../assets/file/layer/$gambar_lama");
                    $query  = "UPDATE layer SET gambar = '$nama_file_baru', judul = '$judul', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/layer.php';</script>";
              }
    } else {
      $query  = "UPDATE layer SET judul = '$judul', tstamp = '$tstamp' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

function hapus__layer() {
  global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  unlink("../assets/file/layer/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM layer WHERE id = '$id'");
}

// menu --------------------------------------------------------------------------------------------------------------

function select__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu ORDER BY id DESC");
}

function insert__menu(){
  global $conn;

  $id = htmlspecialchars($_POST['id']);
  $gambar = $_FILES['gambar']['name'];
  $judul = htmlspecialchars($_POST['judul']);
  $deskripsi = htmlspecialchars($_POST['deskripsi']);

  // tstamps
    date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  // UNLINK
  $select = mysqli_query($conn, "SELECT * FROM menu WHERE id = '$id'");
  $r = mysqli_fetch_array($select);

  $hapus_foto = $r['gambar'];

  if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/menu/'.$nama_file_baru); 
                    unlink("../assets/file/menu/$hapus_foto");
                    $query  = "UPDATE menu SET gambar = '$nama_file_baru', judul = '$judul', deskripsi = '$deskripsi', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/menu/';</script>";
              }
    }else {
      $query  = "UPDATE menu SET judul = '$judul', deskripsi = '$deskripsi', tstamp = '$tstamp' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }


}

function visimisi__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'visimisi'");
}

function prestasi__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'prestasi'");
}

function potensitd__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'potensitd'");
}

function sambutan__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'sambutan'");
}

function struktur__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'struktur'");
}

function programkerja__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'programkerja'");
}

function korwil__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'korwil'");
}

function dkr__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'dkr'");
}

function uu__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'uu'");
}

function adart__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'adart'");
}

function juklak__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'juklak'");
}

function fasilitas__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'fasilitas'");
}

function hubungikami__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'hubungikami'");
}

function profil__menu() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM menu WHERE menu = 'profil'");
}

// berita --------------------------------------------------------------------------------------------------------------

function select__berita() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
}

function insert__berita() {
  global $conn; 

  $gambar  = $_FILES['gambar']['name'];
  $judul   = $_POST['judul'];
  $isi     = $_POST['isi'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/layer/'.$nama_file_baru); 
                  $query  = "INSERT INTO berita VALUES('', '$nama_file_baru', '$judul', '$isi', '$tstamp')";
                  $result = mysqli_query($conn, $query);

              } else {     
               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/berita.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url(s)."adm/dkc/adm/log/logout.php';</script>";
    }

}

function hapus__berita() {
  global $conn;
  $id = $_POST['id'];
  $gambar_lama = $_POST['gambar_lama'];
  unlink("../assets/file/berita/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM berita WHERE id = '$id'");
}

function sunting__berita() {
  global $conn; 

  $id      = $_POST['id'];
  $gambar  = $_FILES['gambar']['name'];
  $judul   = $_POST['judul'];
  $isi     = $_POST['isi'];
  $gambar_lama = $_POST['gambar_lama'];
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                 move_uploaded_file($file_tmp, '../../../assets/file/berita/'.$nama_file_baru); 
                    unlink("../../../assets/file/berita/$gambar_lama");
                    $query  = "UPDATE berita SET gambar = '$nama_file_baru', judul = '$judul', isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/berita.php';</script>";
              }
    } else {
      $query  = "UPDATE berita SET judul = '$judul', isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

// berita pilihan & lainnya -------------------------------------------------------------------------------------------------

function select__beritapilihan() {
  global $conn;
  $tentang = $_GET['tentang'];
  return mysqli_query($conn, "SELECT * FROM berita WHERE judul = '$tentang'");
}

function select__beritalainnya() {
  global $conn;
  $tentang = $_GET['tentang'];
  return mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
}


// agenda --------------------------------------------------------------------------------------------------------------

function select__agenda() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM agenda ORDER BY id DESC");
}

function sunting__agenda() {
  global $conn; 

  $id          = htmlspecialchars($_POST['id']);
  $judul       = htmlspecialchars($_POST['judul']);
  $isi         = htmlspecialchars($_POST['isi']);
  $gambar      = $_FILES['gambar']['name'];
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/agenda/'.$nama_file_baru); 
                    unlink("../assets/file/agenda/$gambar_lama");
                    $query  = "UPDATE agenda SET gambar = '$nama_file_baru', judul = '$judul', isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/agenda.php';</script>";
              }
    } else {
      $query  = "UPDATE agenda SET judul = '$judul', isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}


function insert__agenda() {
  global $conn; 

  $tanggal = htmlspecialchars($_POST['tanggal']);
  $tgl = explode("/", $tanggal);

  $judul   = htmlspecialchars($_POST['judul']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  return mysqli_query($conn, "INSERT INTO agenda VALUES('', '".$tgl[0]."', '".$tgl[1]."', '".$judul."', '".$tstamp."')");

}

function hapus__agenda() {
  global $conn;
  $id = htmlspecialchars($_POST['id']);
  $gambar_lama = $_POST['gambar_lama'];
  unlink("../assets/file/agenda/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM agenda WHERE id = '$id'");
}

// visi misi --------------------------------------------------------------------------------------------------------------

function select__visimisi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM visimisi WHERE kategori = 'VISI' OR kategori = 'MISI' ORDER BY kategori DESC");
}

function select__gambarvisimisi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM visimisi WHERE kategori = '1VISI1' OR kategori = '1MISI1' ORDER BY kategori DESC");
}

function select__gambarvisi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM visimisi WHERE kategori = '1VISI1' ORDER BY kategori DESC");
}

function select__gambarmisi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM visimisi WHERE kategori = '1MISI1' ORDER BY kategori DESC");
}

function insert__visimisi() {
  global $conn;

  $kategori = htmlspecialchars($_POST['kategori']);
  $isi = htmlspecialchars($_POST['isi']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  return mysqli_query($conn, "INSERT INTO visimisi VALUES(NULL, '$isi', '$kategori', '$tstamp')");
}

function sunting__visimisi() {
  global $conn;

  $id = $_POST['id'];
  $isi = htmlspecialchars($_POST['isi']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  return mysqli_query($conn, "UPDATE visimisi SET isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'");
}

function sunting__gambarvisimisi() {
  global $conn; 

  $id   = htmlspecialchars($_POST['id']);
  $kategori   = htmlspecialchars($_POST['kategori']);
  $gambar_lama   = htmlspecialchars($_POST['gambar_lama']);
  $gambar = $_FILES['gambar']['name'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/visimisi/'.$nama_file_baru); 
                    unlink("../assets/file/visimisi/$gambar_lama");
                    $query  = "UPDATE visimisi SET gambar = '$nama_file_baru', tstamp = '$tstamp' WHERE id = '$id' AND kategori = '$kategori'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/tentang/visimisi.php';</script>";
              }
    }
}

function hapus__visimisi() {
  global $conn;
  $id = $_POST['id'];
  return mysqli_query($conn, "DELETE FROM visimisi WHERE id = '$id'");
}

function select__visi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM visimisi WHERE kategori = 'visi'");
}

function select__misi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM visimisi WHERE kategori = 'misi'");
}

// prestasi --------------------------------------------------------------------------------------------------------------

function select__prestasi() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM prestasi ORDER BY id DESC");
}

function sunting__prestasi() {
  global $conn; 

  $id          = htmlspecialchars($_POST['id']);
  $judul       = htmlspecialchars($_POST['judul']);
  $isi         = $_POST['isi'];
  $gambar      = $_FILES['gambar']['name'];
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/prestasi/'.$nama_file_baru); 
                    unlink("../assets/file/prestasi/$gambar_lama");
                    $query  = "UPDATE prestasi SET gambar = '$nama_file_baru', judul = '$judul', isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/tentang/prestasi.php';</script>";
              }
    } else {
      $query  = "UPDATE prestasi SET judul = '$judul', isi = '$isi', tstamp = '$tstamp' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

function hapus__prestasi() {
  global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $gambar_lama = $_POST['gambar_lama'];
  unlink("../assets/file/prestasi/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM prestasi WHERE id = '$id'");
  return $hapus_gudep;
}

function insert__prestasi() {
  global $conn; 

  $judul   = htmlspecialchars($_POST['judul']);
  $isi   = htmlspecialchars($_POST['isi']);
  $gambar = $_FILES['gambar']['name'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/prestasi/'.$nama_file_baru); 
                    $query  = "INSERT INTO prestasi VALUES('', '$nama_file_baru', '$judul', '$isi', '$tstamp')";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/tentang/prestasi.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url(s)."adm/dkc/adm/log/logout.php';</script>";
    }
}

// potensitd --------------------------------------------------------------------------------------------------------------

function select__potensicapen() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(capenpa + capenpi) FROM gugusdepan");
}

function select__potensipenban() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(penbanpa + penbanpi) FROM gugusdepan");
}

function select__potensipenlak() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(penlakpa + penlakpi) FROM gugusdepan");
}

function select__potensipengar() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(pengarpa + pengarpi) FROM gugusdepan");
}

function select__potensicapan() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(capanpa + capanpi) FROM gugusdepan");
}

function select__potensipan() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(panpa + panpi) FROM gugusdepan");
}

function select__potensipangar() {
  global $conn;
  return mysqli_query($conn, "SELECT SUM(pangarpa + pangarpi) FROM gugusdepan");
}

// data potensi --------------------------------------------------------------------------------------------------------------

function select___datapotensi() {
  global $conn; 
  $kwaran = $_GET['kwaran'];
  return $query = mysqli_query($conn, "SELECT * FROM gugusdepan WHERE kwaran = '$kwaran'");
}

// fasilitas --------------------------------------------------------------------------------------------------------------

function select__fasilitas() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM fasilitas ORDER BY id DESC");
}

function insert__fasilitas() {
  global $conn; 

  $nama   = htmlspecialchars($_POST['nama']);
  $gambar = $_FILES['gambar']['name'];

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/fasilitas/'.$nama_file_baru); 
                    $query  = "INSERT INTO fasilitas VALUES('', '$nama_file_baru', '$nama', '$tstamp')";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/fasilitas/';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url(s)."adm/dkc/adm/log/logout.php';</script>";
    }
}

function sunting__fasilitas() {
  global $conn; 

  $id          = htmlspecialchars($_POST['id']);
  $nama        = htmlspecialchars($_POST['nama']);
  $gambar      = $_FILES['gambar']['name'];
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/fasilitas/'.$nama_file_baru); 
                    unlink("../assets/file/fasilitas/$gambar_lama");
                    $query  = "UPDATE fasilitas SET gambar = '$nama_file_baru', nama = '$nama', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/fasilitas/';</script>";
              }
    } else {
      $query  = "UPDATE fasilitas SET nama = '$nama', tstamp = '$tstamp' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

function hapus__fasilitas() {
  global $conn;
  $id = htmlspecialchars($_POST['id']);
  $gambar_lama = $_POST['gambar_lama'];
  unlink("../assets/file/fasilitas/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM fasilitas WHERE id = '$id'");
}

// aturan --------------------------------------------------------------------------------------------------------------

function select__aturan() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM aturan ORDER BY id DESC");
}

function sunting__aturan() {
  global $conn; 

  $id        = htmlspecialchars($_POST['id']);
  $file      = $_FILES['file']['name'];
  $file_lama = htmlspecialchars($_POST['file_lama']);
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($file != "") {
  $ekstensi_diperbolehkan = array('pdf', 'docx');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/aturan/'.$nama_file_baru); 
                    unlink("../assets/file/aturan/$file_lama");
                    $query  = "UPDATE aturan SET file = '$nama_file_baru', tstamp = '$tstamp', ekstensi = '$ekstensi' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya pdf atau docx.');
                        window.location='".url(s)."adm/dkc/adm/aturan/';</script>";
              }
    }
}

// aturan pilihan --------------------------------------------------------------------------------------------------------------

function select__aturangerakanpramuka() {
  global $conn;
  return mysqli_query($conn, "SELECT * FROM aturan WHERE kategori = 'aturan gerakan pramuka'"); 
}

function select__aturanjuklak() {
  global $conn;
  return mysqli_query($conn, "SELECT * FROM aturan WHERE kategori = 'juklak'"); 
}

function select__aturanadart() {
  global $conn;
  return mysqli_query($conn, "SELECT * FROM aturan WHERE kategori = 'ad art'"); 
}

// sambutan --------------------------------------------------------------------------------------------------------------

function select__sambutan() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM sambutan ORDER BY id DESC");
}

function insert__sambutan() {
  global $conn; 

  $gambar  = $_FILES['gambar']['name'];
  $nama_ketua   = htmlspecialchars($_POST['nama_ketua']);
  $isi     = $_POST['isi'];
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/sambutan/'.$nama_file_baru); 
                  $query = "UPDATE sambutan SET
                            gambar = '$nama_file_baru',
                            isi = '$isi',
                            nama_ketua = '$nama_ketua',
                            tstamp = '$tstamp'";
                    $result = mysqli_query($conn, $query);
                    header('location: ../../dkc/sambutan.php');
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/sambutan.php';</script>";
              }
    } else {
      $query  = "UPDATE sambutan SET nama_ketua = '$nama_ketua', isi = '$isi', tstamp = '$tstamp'";
      $result = mysqli_query($conn, $query);
    }

}

// profil bph ------------------------------------------------------------------------------------------------

function select__profilbph() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kat = 'bph' ORDER BY id ASC");
}

function select__profilketuabph() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kategori = 'profil ketua bph' ORDER BY id ASC");
}

function select__profilwakilbph() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kategori = 'profil wakil ketua bph' ORDER BY id ASC");
}

function select__profilsekre1bph() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kategori = 'profil sekretaris 1 bph' ORDER BY id ASC");
}

function select__profilsekre2bph() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kategori = 'profil sekretaris 2 bph' ORDER BY id ASC");
}

function select__profilbendahara1bph() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kategori = 'profil bendahara bph' ORDER BY id ASC");
}

function sunting__bph(){
   error_reporting(0);
  global $conn; 

  $id = htmlspecialchars($_POST['id']);
  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  $nta = htmlspecialchars($_POST['nta']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $twitter = htmlspecialchars($_POST['twitter']);
  $youtube = htmlspecialchars($_POST['youtube']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kategori = htmlspecialchars($_POST['kategori']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                    unlink("../../assets/file/profil/$gambar_lama");
                    $query = "UPDATE profil SET 
                              gambar = '$nama_file_baru',
                              kwartirranting = '$kwartirranting',
                              gugusdepan = '$gugusdepan',
                              tingkatsku = '$tingkatsku', 
                              namalengkap = '$namalengkap', 
                              nta = '$nta',
                              instagram = '$instagram',
                              facebook = '$facebook',
                              twitter = '$twitter',
                              youtube = '$youtube',
                              kategori = '$kategori',
                              tstamp = '$tstamp'

                              WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/profil/bk.php';</script>";
              }
    } else {
     $query = "UPDATE profil SET
            kwartirranting = '$kwartirranting',
            gugusdepan = '$gugusdepan', 
            tingkatsku = '$tingkatsku', 
            namalengkap = '$namalengkap', 
            nta = '$nta',
            instagram = '$instagram',
            facebook = '$facebook',
            twitter = '$twitter',
            youtube = '$youtube',
            kategori = '$kategori',
            tstamp = '$tstamp'

            WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

// profil bkk --------------------------------------------------------------------------------------

function select__profilbkk() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kat = 'bkk' ORDER BY id ASC");
}

function sunting__bkk(){
   error_reporting(0);
  global $conn; 

  $id = htmlspecialchars($_POST['id']);
  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  $nta = htmlspecialchars($_POST['nta']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $twitter = htmlspecialchars($_POST['twitter']);
  $youtube = htmlspecialchars($_POST['youtube']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kategori = htmlspecialchars($_POST['kategori']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                    unlink("../../assets/file/profil/$gambar_lama");
                    $query = "UPDATE profil SET 
                              gambar = '$nama_file_baru',
                              kwartirranting = '$kwartirranting',
                              gugusdepan = '$gugusdepan',
                              tingkatsku = '$tingkatsku', 
                              namalengkap = '$namalengkap', 
                              nta = '$nta',
                              instagram = '$instagram',
                              facebook = '$facebook',
                              twitter = '$twitter',
                              youtube = '$youtube',
                              kategori = '$kategori',
                              tstamp = '$tstamp'

                              WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/profil/bk.php';</script>";
              }
    } else {
     $query = "UPDATE profil SET
            kwartirranting = '$kwartirranting',
            gugusdepan = '$gugusdepan', 
            tingkatsku = '$tingkatsku', 
            namalengkap = '$namalengkap', 
            nta = '$nta',
            instagram = '$instagram',
            facebook = '$facebook',
            twitter = '$twitter',
            youtube = '$youtube',
            kategori = '$kategori',
            tstamp = '$tstamp'

            WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

function insert__bkk() {
  global $conn; 

  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  $nta = htmlspecialchars($_POST['nta']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kat = 'bkk';
  $kategori = htmlspecialchars($_POST['kategori']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                  $query  = "INSERT INTO profil VALUES('', '$nama_file_baru', '$tingkatsku', '$gugusdepan', '$kwartirranting', '$namalengkap', '$nta', '$kategori', '$kat', '$tstamp')";
                  $result = mysqli_query($conn, $query);

              } else {     
               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/berita.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url(s)."adm/dkc/adm/log/logout.php';</script>";
    }

}

function hapus__bkk() {
  global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  unlink("../../assets/file/profil/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM profil WHERE id = '$id'");
}

// profil bk --------------------------------------------------------------------------------------

function select__profilbk(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kat = 'bk' ORDER BY id DESC");

}

function sunting__bk(){
   error_reporting(0);
  global $conn; 

  $id = htmlspecialchars($_POST['id']);
  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  $nta = htmlspecialchars($_POST['nta']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $twitter = htmlspecialchars($_POST['twitter']);
  $youtube = htmlspecialchars($_POST['youtube']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kategori = htmlspecialchars($_POST['kategori']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                    unlink("../../assets/file/profil/$gambar_lama");
                    $query = "UPDATE profil SET 
                              gambar = '$nama_file_baru',
                              kwartirranting = '$kwartirranting',
                              gugusdepan = '$gugusdepan',
                              tingkatsku = '$tingkatsku', 
                              namalengkap = '$namalengkap', 
                              nta = '$nta',
                              instagram = '$instagram',
                              facebook = '$facebook',
                              twitter = '$twitter',
                              youtube = '$youtube',
                              kategori = '$kategori',
                              tstamp = '$tstamp'

                              WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/profil/bk.php';</script>";
              }
    } else {
     $query = "UPDATE profil SET
            kwartirranting = '$kwartirranting',
            gugusdepan = '$gugusdepan', 
            tingkatsku = '$tingkatsku', 
            namalengkap = '$namalengkap', 
            nta = '$nta',
            instagram = '$instagram',
            facebook = '$facebook',
            twitter = '$twitter',
            youtube = '$youtube',
            kategori = '$kategori',
            tstamp = '$tstamp'

            WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}


// Insert bk
function insert__bk() {
  global $conn; 

  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  var_dump($kwartirranting);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  
  $nta = htmlspecialchars($_POST['nta']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kat = 'bk';
  $kategori = htmlspecialchars($_POST['kategori']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                  $query  = "INSERT INTO profil VALUES('', '$nama_file_baru', '$tingkatsku', '$gugusdepan', '$kwartirranting', '$namalengkap', '$nta', '$kategori', '$kat', '$tstamp')";
                  $result = mysqli_query($conn, $query);


              } else {     
               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/berita.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url()."adm/dkc/adm/log/logout.php';</script>";
    }

}

// hapus bk
function hapus_bk()
{
    global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  unlink("../../assets/file/profil/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM profil WHERE id = '$id'");
}

// profil bpp --------------------------------------------------------------------------------------

function select__profilbpp(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kat = 'bpp' ORDER BY id ASC");
}

function sunting__bpp(){
   error_reporting(0);
  global $conn; 

  $id = htmlspecialchars($_POST['id']);
  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  $nta = htmlspecialchars($_POST['nta']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $twitter = htmlspecialchars($_POST['twitter']);
  $youtube = htmlspecialchars($_POST['youtube']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kategori = htmlspecialchars($_POST['kategori']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                    unlink("../../assets/file/profil/$gambar_lama");
                    $query = "UPDATE profil SET 
                              gambar = '$nama_file_baru',
                              kwartirranting = '$kwartirranting',
                              gugusdepan = '$gugusdepan',
                              tingkatsku = '$tingkatsku', 
                              namalengkap = '$namalengkap', 
                              nta = '$nta',
                              instagram = '$instagram',
                              facebook = '$facebook',
                              twitter = '$twitter',
                              youtube = '$youtube',
                              kategori = '$kategori',
                              tstamp = '$tstamp'

                              WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/profil/bk.php';</script>";
              }
    } else {
     $query = "UPDATE profil SET
            kwartirranting = '$kwartirranting',
            gugusdepan = '$gugusdepan', 
            tingkatsku = '$tingkatsku', 
            namalengkap = '$namalengkap', 
            nta = '$nta',
            instagram = '$instagram',
            facebook = '$facebook',
            twitter = '$twitter',
            youtube = '$youtube',
            kategori = '$kategori',
            tstamp = '$tstamp'

            WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

// insert bpp

function insert_bpp()
{
    global $conn; 

  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  var_dump($kwartirranting);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  
  $nta = htmlspecialchars($_POST['nta']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kat = 'bpp';
  $kategori = htmlspecialchars($_POST['kategori']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                  $query  = "INSERT INTO profil VALUES('', '$nama_file_baru', '$tingkatsku', '$gugusdepan', '$kwartirranting', '$namalengkap', '$nta', '$kategori', '$kat', '$tstamp')";
                  $result = mysqli_query($conn, $query);


              } else {     
               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/berita.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url()."adm/dkc/adm/log/logout.php';</script>";
    }
}

// hapus bpp

function hapus_bpp()
{
    global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  unlink("../../assets/file/profil/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM profil WHERE id = '$id'");
}

// profil bpe --------------------------------------------------------------------------------------

function select__profilbpe(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM profil WHERE kat = 'bpe' ORDER BY id ASC");
}

function sunting__bpe(){
   error_reporting(0);
  global $conn; 

  $id = htmlspecialchars($_POST['id']);
  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  $nta = htmlspecialchars($_POST['nta']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $twitter = htmlspecialchars($_POST['twitter']);
  $youtube = htmlspecialchars($_POST['youtube']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kategori = htmlspecialchars($_POST['kategori']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                    unlink("../../assets/file/profil/$gambar_lama");
                    $query = "UPDATE profil SET 
                              gambar = '$nama_file_baru',
                              kwartirranting = '$kwartirranting',
                              gugusdepan = '$gugusdepan',
                              tingkatsku = '$tingkatsku', 
                              namalengkap = '$namalengkap', 
                              nta = '$nta',
                              instagram = '$instagram',
                              facebook = '$facebook',
                              twitter = '$twitter',
                              youtube = '$youtube',
                              kategori = '$kategori',
                              tstamp = '$tstamp'

                              WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/profil/bk.php';</script>";
              }
    } else {
     $query = "UPDATE profil SET
            kwartirranting = '$kwartirranting',
            gugusdepan = '$gugusdepan', 
            tingkatsku = '$tingkatsku', 
            namalengkap = '$namalengkap', 
            nta = '$nta',
            instagram = '$instagram',
            facebook = '$facebook',
            twitter = '$twitter',
            youtube = '$youtube',
            kategori = '$kategori',
            tstamp = '$tstamp'

            WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
    }
}

function insert_bpe()
{
   global $conn; 

  $kwartirranting = htmlspecialchars($_POST['kwartirranting']);
  var_dump($kwartirranting);
  $gugusdepan = htmlspecialchars($_POST['gugusdepan']);
  
  $nta = htmlspecialchars($_POST['nta']);
  $tingkatsku = htmlspecialchars($_POST['tingkatsku']);
  $namalengkap = htmlspecialchars($_POST['namalengkap']);
  $gambar = $_FILES['gambar']['name'];

  $kat = 'bpe';
  $kategori = htmlspecialchars($_POST['kategori']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg','png','jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/file/profil/'.$nama_file_baru); 
                  $query  = "INSERT INTO profil VALUES('', '$nama_file_baru', '$tingkatsku', '$gugusdepan', '$kwartirranting', '$namalengkap', '$nta', '$kategori', '$kat', '$tstamp')";
                  $result = mysqli_query($conn, $query);


              } else {     
               
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/beranda/berita.php';</script>";
              }
    } else {
      echo "<script>alert('error');window.location='".url()."adm/dkc/adm/log/logout.php';</script>";
    }
}

// hapus bpe
function hapus_bpe()
{
    global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  unlink("../../assets/file/profil/$gambar_lama");
  return mysqli_query($conn, "DELETE FROM profil WHERE id = '$id'");
}

// struktur --------------------------------------------------------------------------------------------------------------

function select__struktur() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM struktur ORDER BY id DESC");
}

function sunting__struktur() {
  global $conn; 

  $id          = htmlspecialchars($_POST['id']);
  $gambar      = $_FILES['gambar']['name'];
  $gambar_lama = htmlspecialchars($_POST['gambar_lama']);
  
  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/struktur/'.$nama_file_baru); 
                    $query  = "UPDATE struktur SET gambar = '$nama_file_baru', tstamp = '$tstamp' WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/struktur.php';</script>";
              }
    }
}

// programkerja --------------------------------------------------------------------------------------------------------------

function select__programkerja() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM programkerja_dkc ORDER BY id DESC");
}

function sunting__programkerja() {
  global $conn;
  $kegiatan =  htmlspecialchars($_POST['kegiatan']);
  $tahun =  htmlspecialchars($_POST['tahun']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  return $result = mysqli_query($conn, "UPDATE programkerja SET kegiatan = '$kegiatan', tstamp = '$tstamp' WHERE tahun = '$tahun'");

}

function insert__programkerja() {
  global $conn; 

  $kegiatan = htmlspecialchars($_POST['kegiatan']);

  $tahun   = htmlspecialchars($_POST['tahun']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  return mysqli_query($conn, "INSERT INTO programkerja VALUES('', '".$kegiatan."', '".$tahun."', '".$tstamp."')");

}

function hapus__programkerja()
{
  global $conn;
  $id = htmlspecialchars($_POST['id']);

  return mysqli_query($conn, "DELETE FROM programkerja_dkc WHERE id='$id'");
}

// korwil --------------------------------------------------------------------------------------------------------------

function select__korwil() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM korwil ORDER BY id ASC");
}

function sunting__korwil() {
  global $conn; 

  $id   =  htmlspecialchars($_POST['id']);
  $nama   =  htmlspecialchars($_POST['nama']);
  $gambar_lama   =  htmlspecialchars($_POST['gambar_lama']);
  $gambar = $_FILES['gambar']['name'];
  $wilayah =  htmlspecialchars($_POST['wilayah']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');


if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../assets/file/korwil/'.$nama_file_baru); 
                    unlink("../assets/file/korwil/$gambar_lama");
                    $query  = "UPDATE korwil SET gambar = '$nama_file_baru', nama = '$nama', tstamp = '$tstamp' WHERE wilayah = '$wilayah'";
                    $result = mysqli_query($conn, $query);
              } else {     
                  echo "<script>alert('Silahkan Upload Gambar');
                        window.location='".url(s)."adm/dkc/adm/dkc/korwil.php';</script>";
              }
    } else {
      $query  = "UPDATE korwil SET nama = '$nama', tstamp = '$tstamp' WHERE wilayah = '$wilayah'";
      $result = mysqli_query($conn, $query);
    }
}

// kwaran wilayah --------------------------------------------------------------------------------------------------------------

function select__wilayah1() {
  global $conn; 
  return $query = mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 1'");
}

function select__wilayah2() {
  global $conn; 
  return $query = mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 2'");
}


function select__wilayah3() {
  global $conn; 
  return $query = mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 3'");
}


function select__wilayah4() {
  global $conn; 
  return $query = mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 4'");
}


function select__wilayah5() {
  global $conn; 
  return $query = mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 5'");
}

// pesan --------------------------------------------------------------------------------------------------------------

function select__pesan() {
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM pesan ORDER BY id DESC");
}

function hapus__pesan() {
  global $conn;
  $id          = htmlspecialchars($_POST['id']);
  $query = "DELETE FROM pesan WHERE id = '$id'";
  $hapus_gudep = mysqli_query($conn, $query);
}


function insert__pesan() {
  global $conn;

  $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
  $email_notelp = htmlspecialchars($_POST['email_notelp']);
  $isi = htmlspecialchars($_POST['isi']);

  date_default_timezone_set('Asia/Jakarta');
  $tstamp = date('d-m-Y H:i:s');

  $ip = $_SERVER['REMOTE_ADDR'];

  $query = "INSERT INTO pesan VALUES('', '$nama_lengkap', '$email_notelp', '$isi', '$tstamp', '$ip')";
  $res = mysqli_query($conn, $query);

  if ($res) {
    echo "<script>alert('Saran dan Masukkan anda sudah tersampaikan :)');
          window.location='".url()."hubungikami/';</script>";;
  }
}

//Kwaran-----------------------------------------------------------------------------------------

function select___strukturorganisasi() {
  global $conn; 
  $kwaran = $_GET['kwaran'];
  return $query = mysqli_query($conn, "SELECT * FROM strukturorganisasi WHERE kwaran = '$kwaran'");
}

function select___skdkr(){
  global $conn; 
   $kwaran = $_GET['kwaran'];
  return mysqli_query($conn, "SELECT * FROM skdkr WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

function select___laporan02gp() {
  global $conn; 
 $kwaran = $_GET['kwaran'];
  return mysqli_query($conn, "SELECT * FROM laporan02gp WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

function select___programkerja(){
  global $conn;
  $kwaran = $_GET['kwaran'];
   return mysqli_query($conn, "SELECT * FROM programkerja_dkr WHERE kwaran = '$kwaran' ORDER BY id DESC");
}
function select___gudep() {
  global $conn;
  
  $kwaran = $_GET['kwaran'];
  return mysqli_query($conn, "SELECT * FROM gugusdepan WHERE kwaran = '$kwaran' ORDER BY id DESC");
}

// Akun ----------------------------------------------------------------------------------------------------

function select__akun1(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 1' ORDER BY id ASC");
}

function select__akun2(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 2' ORDER BY id ASC");
}

function select__akun3(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 3' ORDER BY id ASC");
}

function select__akun4(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 4' ORDER BY id ASC");
}

function select__akun5(){
  global $conn; 
  return mysqli_query($conn, "SELECT * FROM daftarkwaran WHERE wilayah = 'wilayah 5' ORDER BY id ASC");
}

function forgot__password(){
  global $conn;
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $upassword = $_POST['password'];
  $password = md5($_POST['password']);

  $update = mysqli_query($conn, "UPDATE daftarkwaran SET username = '$username', upassword = '$upassword', password = '$password' WHERE nama = '$nama'");

  if ($update) {
    echo "<script>alert('Akun berhasil diupdate');
          window.location='".url()."adm/dkc/adm/akun/';</script>";
  }
}

function select__thn() {
  global $conn;
  return mysqli_query($conn, "SELECT * FROM thn");
}

function sunting__thn() {
  global $conn;

  $id = $_POST['id'];
  $thn1 = $_POST['thn1'];
  $thn2 = $_POST['thn2'];

  var_dump($id);
  $tstamp = date('d-m-Y H:i:s');

  return mysqli_query($conn, "UPDATE thn SET thn1 = '$thn1', thn2 = '$thn2', tstamp = '$tstamp' WHERE id = '$id'");

}

// ---------------------hapus berita------------------------------------------------------------------------------------

// url ----------------------------------------------------------------------------------------------------

function url(){
  return $url = 'http://localhost/dkkk/';
}


//compress



?>