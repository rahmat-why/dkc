<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

$kwaran = $_GET['kwaran'];

?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Admin Pramuka Kab. Bogor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
<link rel="stylesheet" href="<?= url() ?>assets/css/bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
</head>
<body>

<div class="page-wrapper chiller-theme toggled">
  <div class="header">
    
  </div>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <a href="javascript:window.history.back()">
        <button type="button" class="btn btn-danger">
          <i class="fa fa-angle-left"></i>
        </button>
      </a>
      <br>
      <br>
      <p style="font-size: 19px;">Kwaran/<b><?= $kwaran ?></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>
    <div>
      <b>Struktur Organisasi</b>
      <table class="table table-bordered" style="color: black;">
        <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>Gambar</b></th>
            <th scope="col"><b>#</b></th>
          </tr>
        </thead>
        <tbody>
<?php $i = 1; ?>                
<?php foreach (select___strukturorganisasi() as $key): ?>
          <tr>
            <td scope="col"><?= $i++; ?></td>
            <td scope="col">
              <a href="<?= url() ?>adm/dkrr/adm/assets/file/strukturorganisasi/<?= $key['gambar'] ?>">
                <img src="<?= url() ?>adm/dkrr/adm/assets/file/strukturorganisasi/<?= $key['gambar'] ?>" style="width: 200px;">
              </a>
            </td>
            <td scope="col">
              <div data-toggle="modal" data-target="#isi-struktur">
                <button type="button" class="btn btn-default struktur" data-toggle="tooltip" title="View">
                  <i class="fa fa-eye"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="isi-struktur" tabindex="-1" role="dialog" aria-labelledby="isi-struktur" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <center>
                        <img src="<?= url() ?>adm/dkrr/adm/assets/file/strukturorganisasi/<?= $key['gambar'] ?>" style="width: 400px;">
                      </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>

              <div data-toggle="modal" data-target="#unduh-file">
                <button type="button" class="btn btn-success struktur" data-toggle="tooltip" title="Unduh">
                  <i class="fa fa-download"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="unduh-file" tabindex="-1" role="dialog" aria-labelledby="unduh-file" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="unduh-file<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Apakah anda ingin mengunduh?</p></b>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <a href="<?= url() ?>adm/dkrr/adm/assets/file/strukturorganisasi/<?= $key['gambar'] ?>" download>
                        <button type="button" class="btn btn-primary">Unduh</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
<?php endforeach; ?>                
        </tbody>
      </table> 

      <br>
      <br>
      <hr>
      <br>
      <br>

      <b>SK DKR</b>
      <table class="table table-bordered" style="color: black;">
        <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>File</b></th>
            <th scope="col"><b>#</b></th>
          </tr>
        </thead>
        <tbody>
<?php $i = 1; ?>                
<?php foreach (select___skdkr() as $key): ?>
          <tr>
            <td scope="col"><?= $i++; ?></td>
            <td scope="col">
                <?php
                      if ($key['ekstensi'] == 'pdf') {
                        echo '<img src="../assets/img/pdf.png" style="width:38px;">';
                      }else if($key['ekstensi'] == 'docx'){
                        echo '<img src="../assets/img/docx.png" style="width:50px;">';
                      }
                ?>    
              
            </td>
            <td scope="col">
              <div data-toggle="modal" data-target="#info-skdkr">
                <button type="button" class="btn btn-default skdkr" data-toggle="tooltip" title="Info">
                  <i class="fa fa-eye"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="info-skdkr" tabindex="-1" role="dialog" aria-labelledby="info-skdkr" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="info-skdkr" style="text-align: left; font-size: 18px;">Isi</p></b>
                    </div>
                    <div class="modal-body">

                     <embed src = "<?= url() ?>adm/dkrr/adm/assets/file/skdkr/<?= $key['file'] ?>" type = " application/pdf" width = "100%" height = "600px" /> 
                    </div>
                    <div class="modal-footer">
                      <a href="<?= url() ?>adm/dkrr/adm/assets/file/skdkr/<?= $key['file'] ?>">
                        <button type="button" class="btn btn-primary">Unduh</button>
                      </a>  
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>

              <div data-toggle="modal" data-target="#unduh-struktur">
                <button type="button" class="btn btn-success struktur" data-toggle="tooltip" title="Unduh">
                  <i class="fa fa-download"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="unduh-struktur" tabindex="-1" role="dialog" aria-labelledby="unduh-struktur" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="info-skdkr" style="text-align: left; font-size: 18px;">Apakah anda yakin?</p></b>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-footer">
                      <a href="<?= url() ?>adm/dkrr/adm/assets/file/skdkr/<?= $key['file'] ?>">
                        <button type="button" class="btn btn-primary">Unduh</button>
                      </a> 
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
<?php endforeach; ?>                
        </tbody>
      </table>   

      <br>
      <br>
      <hr>
      <br>
      <br>

      <b>Data Potensi</b>
        <table class="table table-bordered" style="color: black;">
        <thead>
          <tr>
            <th rowspan="2" scope="col"><b>#</b></th>
            <th rowspan="2" scope="col"><b>No. Gudep</b></th>
            <th rowspan="2" scope="col"><b>Sanggar Bakti</b></th>
            <th colspan="2" scope="col"><b>Calon Penegak</b></th>
            <th colspan="2" scope="col"><b>Penegak Bantara</b></th>
            <th colspan="2" scope="col"><b>Penegak Laksana</b></th>
            <th colspan="2" scope="col"><b>Penegak Garuda</b></th>
            <th colspan="2" scope="col"><b>Calon Pandega</b></th>
            <th colspan="2" scope="col"><b>Pandega</b></th>
            <th colspan="2" scope="col"><b>Pandega Garuda</b></th>
            <th colspan="2" scope="col"><b>Jumlah</b></th>
            <th rowspan="2" scope="col"><b>#</b></th>
          </tr>
          <tr>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
            <th scope="col"><b>PA</b></th>
            <th scope="col"><b>PI</b></th>
          </tr>
        </thead>
        <tbody>
<?php 

$i = 1;
foreach (select___gudep() as $key):

?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $key['nogudep'] ?></td>
            <td><?= $key['sanggarbakti'] ?></td>
            <td><?= $key['capenpa'] ?></td>
            <td><?= $key['capenpi'] ?></td>
            <td><?= $key['penbanpa'] ?></td>
            <td><?= $key['penbanpi'] ?></td>
            <td><?= $key['penlakpa'] ?></td>
            <td><?= $key['penlakpi'] ?></td>
            <td><?= $key['pengarpa'] ?></td>
            <td><?= $key['pengarpi'] ?></td>
            <td><?= $key['capanpa'] ?></td>
            <td><?= $key['capanpi'] ?></td>
            <td><?= $key['panpa'] ?></td>
            <td><?= $key['panpi'] ?></td>
            <td><?= $key['pangarpa'] ?></td>
            <td><?= $key['pangarpi'] ?></td>
            <td><?= $key['jumlahpa'] ?></td>
            <td><?= $key['jumlahpi'] ?></td>
            <td>
              <div data-toggle="modal" data-target="#info-gudep<?= $key['id'] ?>">
                  <button type="button" class="btn btn-default datapotensi" data-toggle="tooltip" title="Info">
                    <i class="fa fa-eye"></i>
                  </button>
                </div>

              <!-- Modal -->
              <div class="modal fade" id="info-gudep<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info-gudep<?= $key['id'] ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="info-gudep<?= $key['id'] ?>" style="text-align: left; font-size: 18px;">Informasi</p></b>
                    </div>
                    <div class="modal-body">
                      <p>Gugus Depan</p>
                      <b><p><?= $key['sanggarbakti'] ?></p></b>
                      <p>No. Gudep</p>
                      <b><p><?= $key['nogudep'] ?></p></b>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>
<?php endforeach; ?>
        </tbody>
      </table>   

      <br>
      <br>
      <hr>
      <br>
      <br>

       <b>Laporan 02 GP</b>
      <table class="table table-bordered" style="color: black;">
        <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>File</b></th>
            <th scope="col"><b>#</b></th>
          </tr>
        </thead>
        <tbody>
<?php $i = 1; ?>                
<?php foreach (select___laporan02gp() as $key): ?>
          <tr>
            <td scope="col"><?= $i++; ?></td>
            <td scope="col">
              <?php
                      if ($key['ekstensi'] == 'pdf') {
                        echo '<img src="../assets/img/pdf.png" style="width:38px;">';
                      }else if($key['ekstensi'] == 'docx'){
                        echo '<img src="../assets/img/docx.png" style="width:50px;">';
                      }
                ?>        
              
            </td>
            <td scope="col">
              <div data-toggle="modal"data-target="#info-laporan">
                <button type="button" class="btn btn-default laporan" data-toggle="tooltip" title="Info">
                  <i class="fa fa-eye"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="info-laporan" tabindex="-1" role="dialog" aria-labelledby="info-laporan" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="info-laporan" style="text-align: left; font-size: 18px;">Isi</p></b>
                    </div>
                    <div class="modal-body">
                      <embed src = "<?= url() ?>adm/dkrr/adm/assets/file/laporan02gp/<?= $key['file'] ?>" type = " application/pdf" width = "100%" height = "600px" />
                    </div>
                    <div class="modal-footer">
                      <a href="<?= url() ?>adm/dkrr/adm/assets/file/laporan02gp/<?= $key['file'] ?>">
                        <button type="button" class="btn btn-primary">Unduh</button>
                      </a>  
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>

              <div data-toggle="modal" data-target="#unduh-laporan">
                <button type="button" class="btn btn-success struktur" data-toggle="tooltip" title="Unduh">
                  <i class="fa fa-download"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="unduh-laporan" tabindex="-1" role="dialog" aria-labelledby="unduh-laporan" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="info-skdkr" style="text-align: left; font-size: 18px;">Apakah anda yakin?</p></b>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-footer">
                      <a href="<?= url() ?>adm/dkrr/adm/assets/file/laporan02gp/<?= $key['file'] ?>">
                        <button type="button" class="btn btn-primary">Unduh</button>
                      </a> 
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
<?php endforeach; ?>                
        </tbody>
      </table> 

      <br>
      <br>
      <hr>
      <br>
      <br>

      <b>Daftar Program Kerja</b>
        <table class="table table-bordered" style="color: black;">
          <thead>
            <tr>
              <th rowspan="2" scope="col"><b>#</b></th>
              <th rowspan="2" scope="col"><b>Kegiatan</b></th>
              <th colspan="12" scope="col"><center><b>Pelaksanaan Tahun 2019/2020</b></center></th>
              <th rowspan="2" scope="col"><b>#</b></th>
            </tr>
            <tr>
              <th scope="col">1</th>
              <th scope="col">2</th>
              <th scope="col">3</th>
              <th scope="col">4</th>
              <th scope="col">5</th>
              <th scope="col">6</th>
              <th scope="col">7</th>
              <th scope="col">8</th>
              <th scope="col">9</th>
              <th scope="col">10</th>
              <th scope="col">11</th>
              <th scope="col">12</th>
            </tr>
          </thead>
          <tbody>
<?php 

$i = 1;
foreach (select___programkerja() as $key):

?>        
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $key['kegiatan'] ?></td>
            <td <?= $key['bulan1'] ?>> </td>
            <td <?= $key['bulan2'] ?>> </td>
            <td <?= $key['bulan3'] ?>> </td>
            <td <?= $key['bulan4'] ?>> </td>
            <td <?= $key['bulan5'] ?>> </td>
            <td <?= $key['bulan6'] ?>> </td>
            <td <?= $key['bulan7'] ?>> </td>
            <td <?= $key['bulan8'] ?>> </td>
            <td <?= $key['bulan9'] ?>> </td>
            <td <?= $key['bulan10'] ?> ></td>
            <td <?= $key['bulan11'] ?> ></td>
            <td <?= $key['bulan12'] ?> ></td>
            <td>
              <div data-toggle="modal" data-target="#info-programkerja<?= $key['id'] ?>">
                <button type="button" class="btn btn-default programkerja" data-toggle="tooltip" title="View">
                  <i class="fa fa-eye"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="info-programkerja<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info-programkerja<?= $key['id'] ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <b><p class="modal-title" id="info-programkerja<?= $key['id'] ?>" style="text-align: left; font-size: 18px;">Informasi Kegiatan</p></b>
                    </div>
                    <div class="modal-body">
                      <p>Nama Kegiatan</p>
                      <b><p><?= $key['kegiatan'] ?></p></b>
                      <p>Bulan Pelaksanaan</p>
                      <b><p><?= $key['bulan_pelaksanaan'] ?></p></b>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
                
            </td>
          </tr>
<?php endforeach; ?>
        </tbody>
      </table>

      <br>
      <br>
      <hr>
      <br>
      <br>
    </div>
  </main>
</div>

<script src="<?= url() ?>assets/js/jquery.min.js"></script>
<script src="<?= url() ?>assets/js/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script> 
  $(function(){
    $(".header").load("<?= url() ?>adm/dkc/adm/assets/property/header.php"); 
  });
</script>

<script>
  $('.layer').tooltip({ boundary: 'window' })
</script>

</body>
</html>
