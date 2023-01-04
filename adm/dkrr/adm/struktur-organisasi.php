<?php

session_start();

require 'f/fungsi/fungsi.php';

require 'auth.php';

if (isset($_POST['submit'])) {
  $data = mysqli_fetch_assoc(select__strukturorganisasi());
  if (empty($data)) {
    insert__strukturorganisasi();
  }else if ($data = 1){
    edit_strukturorganisasi();
  }

}

$menu = 'Struktur Organisasi';

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
    <h4 style="color: white">Kwartir Ranting <?= $_SESSION['username']; ?></h4>
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
                      <div class="col-md-8">
                        
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <div data-toggle="modal" data-target="#tambah-struktur">
                          <button type="button" class="btn btn-primary struktur" data-toggle="tooltip" title="Tambah">
                            <i class="fa fa-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <?php
                $gambar_lama = mysqli_fetch_assoc(select__strukturorganisasi());
                ?>

                <!-- Modal -->
                <div class="modal fade" id="tambah-struktur" tabindex="-1" role="dialog" aria-labelledby="tambah-struktur" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="" form name="myForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <b><p class="modal-title" id="tambah-struktur" style="text-align: center; font-size: 18px;">Tambah <?= $menu ?></p></b>
                        </div>
                        <div class="modal-body">
                          <input type="text" name="id" class="form-control" value="<?= $gambar_lama['id'] ?>" hidden>
                          <input type="text" name="gambar_lama" value="<?= $gambar_lama['gambar'] ?>" hidden>
                          <p style="text-align: left;"><b>Gambar</b></p>
                          <p><i style="color: red">JPG/PNG</i></p>
                          <input type="file" name="gambar" class="form-control" id="gambar">
                          <br>
                          <b><i><span id="message" style="color: red;"></span></i></b>
                          <!-- SCRIPT VALIDASI -->
                    <script>
                    function validateForm() {
                      var x = document.forms["myForm"]["gambar"].value;
                      var message = document.getElementById('message')
                      if (x == "" || x == null) {
                        message.textContent = 'Gambar tidak ditemukan!'
                        return false;
                      }
                    }
                    </script> 


                          <!-- END VALIDASI -->
                        </div>
                        <div class="modal-footer">
                          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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

          <div class="container-fluid">
            <table class="table table-bordered" style="color: black;">
              <thead>
                <tr>
                  <th scope="col"><b>#</b></th>
                  <th scope="col"><b>Gambar</b></th>
                  <th scope="col"><b>#</b></th>
                </tr>
              </thead>
              <tbody>
<?php $i = 1; foreach (select__strukturorganisasi() as $key): ?>                
                <tr>
                  <td scope="col"><?= $i++; ?></td>
                  <td scope="col">
                    <a href="assets/file/strukturorganisasi/<?= $key['gambar'] ?>">
                      <img src="assets/file/strukturorganisasi/<?= $key['gambar'] ?>" style="width: 200px;">
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
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <b><p class="modal-title" id="isi-struktur" style="text-align: center; font-size: 18px;">Isi <?= $menu ?></p></b>
                          </div>
                          <div class="modal-body">
                            <center>
                              <img src="assets/file/strukturorganisasi/<?= $key['gambar'] ?>" style="width: 400px;">
                            </center>
                          </div>
                          <div class="modal-footer">
                            <a href="assets/file/strukturorganisasi/<?= $key['gambar'] ?>" download>
                              <button type="button" class="btn btn-primary">Unduh</button>
                            </a>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <b><p class="modal-title" id="unduh-file<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Apakah anda ingin mengunduh?</p></b>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="assets/file/strukturorganisasi/<?= $key['gambar'] ?>" download>
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
              <tbody>
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
  $('.struktur').tooltip({ boundary: 'window' })
</script>  


</body>
</html>
