<?php

session_start();

require 'f/fungsi/fungsi.php';

require 'auth.php';

if (isset($_POST['submit'])) {
  insert__programkerja();
}

if (isset($_POST['edit_programkerja'])) {
  edit__programkerja();
}

if (isset($_POST['hapus_programkerja'])) {
  hapus__programkerja();
}

$menu = 'Program Kerja';

$thn = mysqli_fetch_assoc(select__thn());

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Pramuka Kab. Bogor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
  <link rel="stylesheet" href="<?= url() ?>adm/dkrr/adm/assets/css/style.css">
  <link rel='stylesheet' href='<?= url() ?>assets/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="<?= url() ?>assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= url() ?>assets/css/normalize.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="header">
  
</div>
<main class="main">
  
  <div class="title-bar container-fluid">
    <h4 style="color: white">Kwaran <?= $_SESSION['username']; ?></h4>
  </div>
  
  <br>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45); background-color: white;">
        <div class="row">
          <div class="card-body">
            <div class="row">
              <div style="text-align: right;" class="container-fluid">

                <div class="row">
                  <div class="col-md-9 col-xs-7">

                  </div>
                  <div class="col-md-3 col-xs-5">
                    <div class="row">
                      <div class="col-md-4">
                        
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <div data-toggle="modal" data-target="#tambah-programkerja">
                          <button type="button" class="btn btn-primary programkerja" data-toggle="tooltip" title="Program">
                            <i class="fa fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <div data-toggle="modal" data-target="#export">
                          <button type="button" class="btn btn-warning programkerja" data-toggle="tooltip" title="Export">
                            <span class="fa fa-print"></span>
                          </button>
                        </div>
                      </div>                        
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="tambah-programkerja" tabindex="-1" role="dialog" aria-labelledby="tambah-programkerja" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="" method="POST">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <b><p class="modal-title" id="tambah-programkerja" style="text-align: center; font-size: 18px;">Tambah <?= $menu ?></p></b>
                        </div>
                        <div class="modal-body">
                          <p style="text-align: left;"><b>Kegiatan</b></p>
                          <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Kegiatan"><br>
                          <p style="text-align: left;"><b>Bulan Pelaksanaan</b></p>
                          <select id="bulan" class="form-control" name="bulan">
                            <option value="--Bulan--">--Bulan--</option>
                            <option value="bulan1">1</option>
                            <option value="bulan2">2</option>
                            <option value="bulan3">3</option>
                            <option value="bulan4">4</option>
                            <option value="bulan5">5</option>
                            <option value="bulan6">6</option>
                            <option value="bulan7">7</option>
                            <option value="bulan8">8</option>
                            <option value="bulan9">9</option>
                            <option value="bulan10">10</option>
                            <option value="bulan11">11</option>
                            <option value="bulan12">12</option>
                          </select>
                          <br>
                          <b><i><span id="message" style="color: red;"></span></i></b>
                        </div>
                        <!-- START SCRIPT -->
                          <script type="text/javascript">
                
                    var kegiatan = document.getElementById('kegiatan')
                  
                    var message = document.getElementById('message')

                    kegiatan.addEventListener('keyup', function(){
                      if(kegiatan.value == ""){
                        message.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('akhir').disabled = true;
                      }else if (kegiatan.value) {
                        message.textContent = ''
                        document.getElementById('akhir').disabled = false;
                      }
                    })

                  
                  </script>
                        <!-- END SCRIPT -->
                        <div class="modal-footer">
                          <button type="submit" id="akhir" name="submit" class="btn btn-primary">Simpan</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="export" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="" method="POST">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <b><p class="modal-title" id="export" style="text-align: center; font-size: 18px;">Export</p></b>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <center>
                              <div class="col-md-6">
                                <p>Export Docs</p>
                                <a href="f/export/docx/programkerja.php">
                                  <button type="button" class="btn btn-info btn-xs">Export</button>
                                </a>
                              </div>
                              <div class="col-md-6">
                                <p>Export PDF</p>
                                <a href="f/export/pdf/programkerja.php">
                                  <button type="button" class="btn btn-danger btn-xs">Export</button>
                                </a>
                              </div>
                            </center>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
              <b><p class="card-title" style="font-size: 20px; text-align: center; color: black;">Daftar <?= $menu ?></p></b>
              <hr style="margin-top: 5px; border: 1px solid black; width: 150px;">
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered" style="color: black;">
              <thead>
                <tr>
                  <th rowspan="2" scope="col"><b>#</b></th>
                  <th rowspan="2" scope="col"><b>Kegiatan</b></th>
                  <th colspan="12" scope="col"><center><b>Pelaksanaan Tahun <?= $thn['thn1'] ?>/<?= $thn['thn2'] ?></b></center></th>
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
foreach (select__programkerja() as $key):

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
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <b><p class="modal-title" id="info-programkerja<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Informasi Kegiatan</p></b>
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

              <div data-toggle="modal" data-target="#edit-programkerja<?= $key['id'] ?>">
                <button type="button" class="btn btn-info programkerja" data-toggle="tooltip" title="Edit">
                  <i class="fa fa-edit"></i>
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="edit-programkerja<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit-programkerja<?= $key['id'] ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <b><p class="modal-title" id="edit-programkerja<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Sunting Kegiatan</p></b>
                    </div>
                    <form action="" method="POST">
                      <div class="modal-body">
                        <input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
                        <p><b>Nama Kegiatan</b></p>
                        <input type="text" name="kegiatan" id="kegiatan2" class="form-control" value="<?= $key['kegiatan'] ?>" placeholder="Kegiatan"><br>
                        <p><b>Bulan Pelaksanaan</b></p>
                        <select class="form-control" name="bulan_lama" id="bulan2">
                          <option>--Bulan--</option>
                          <option value="bulan1" 
                          
                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Januari') {
                            echo "selected";
                          } 
                          ?>

                          >1
                          </option>
                          <option value="bulan2"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Februari') {
                            echo "selected";
                          } 
                          ?>

                          >2</option>
                          <option value="bulan3"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Maret') {
                            echo "selected";
                          } 
                          ?>

                          >3</option>
                          <option value="bulan4"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'April') {
                            echo "selected";
                          } 
                          ?>

                          >4</option>
                          <option value="bulan5"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Mei') {
                            echo "selected";
                          } 
                          ?>

                          >5</option>
                          <option value="bulan6"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Juni') {
                            echo "selected";
                          } 
                          ?>

                          >6</option>
                          <option value="bulan7"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Juli') {
                            echo "selected";
                          } 
                          ?>

                          >7</option>
                          <option value="bulan8"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Agustus') {
                            echo "selected";
                          } 
                          ?>

                          >8</option>
                          <option value="bulan9"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'September') {
                            echo "selected";
                          } 
                          ?>

                          >9</option>
                          <option value="bulan10"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Oktober') {
                            echo "selected";
                          } 
                          ?>

                          >10</option>
                          <option value="bulan11"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'November') {
                            echo "selected";
                          } 
                          ?>

                          >11</option>
                          <option value="bulan12"

                          <?php 
                          if ($key['bulan_pelaksanaan'] == 'Desember') {
                            echo "selected";
                          } 
                          ?>

                          >12</option>
                        </select><br>
                        <b><p id="message2" style="color: red; text-align: right;"></p></b> 
                      </div><br>
                      
                    <script>
                         var kegiatan2 = document.getElementById('kegiatan2')
                         var message2 = document.getElementById('message2')
                    

                    kegiatan2.addEventListener('keyup', function(){
                      if(kegiatan2.value == ""){
                        message2.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (kegiatan2.value) {
                        message2.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })

                      </script>
                      <div class="modal-footer">
                        <button type="submit" name="edit_programkerja" id="endButton" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div data-toggle="modal" data-target="#hapus-programkerja<?= $key['id'] ?>">
                <button type="button" class="btn btn-danger programkerja" data-toggle="tooltip" title="Hapus">
                  <i class="fa fa-trash"></i>
                </button>
              </div>

              <!-- Modal -->
              <form action="" method="POST">
                <div class="modal fade" id="hapus-programkerja<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-programkerja<?= $key['id'] ?>" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <b>
                          <p class="modal-title" id="hapus-programkerja<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Apakah anda ingin yakin?</p></b>
                      </div>
                      <div class="modal-body">
                        <p>Nama Kegiatan</p>
                        <b><p><?= $key['kegiatan'] ?></p></b>
                        <p>Bulan Pelaksanaan</p>
                        <b><p><?= $key['bulan_pelaksanaan'] ?></p></b>
                        <input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="hapus_programkerja" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
                
            </td>
          </tr>
<?php endforeach; ?>
        </tbody>
      </table>
      </div>  
        </div>
      </div>
    </div>

</main>
 
  <script src="<?= url() ?>adm/dkrr/adm/assets/js/script.js"></script>

  <script> 
      $(function(){
        $("#header").load("<?= url() ?>adm/dkrr/adm/assets/property/header.php"); 
      });
  </script>

<script>
  $('.programkerja').tooltip({ boundary: 'window' })
</script>  

</body>
</html>
