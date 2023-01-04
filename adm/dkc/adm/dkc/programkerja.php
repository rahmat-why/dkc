<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['sunting_programkerja'])) {
  sunting__programkerja();
}

if (isset($_POST['submit_program'])) {
  insert__programkerja();
}

if (isset($_POST['hapus_programkerja'])) {
  hapus__programkerja();
}


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
      <p style="font-size: 19px;">DKC/<b>Program Kerja</p></b>
      <div style="text-align: right;">
        <div data-toggle="modal" data-target="#tambah-layer">
          <button type="button" class="btn btn-primary layer" data-toggle="tooltip" title="Upload">
            <i class="fa fa-upload"></i>
          </button>
        </div>

        <div class="modal fade" id="tambah-layer" tabindex="-1" role="dialog" aria-labelledby="tambah-layer" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <b><p class="modal-title" id="tambah-layer" style="font-size: 18px;">Tambah Program Kerja</p></b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="POST">
                 <div class="modal-body">
                    <p style="text-align: left;"><b>Judul</b></p>
                      <input type="text" name="kegiatan" class="form-control" placeholder="Nama Kegiatan"><br>
                    <p style="text-align: left;"><b>Tahun</b></p>
                      <input type="text" name="tahun" class="form-control" placeholder="Tahun"><br>
               </div>
               <div class="modal-footer">
                  <button type="submit" name="submit_program" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>

    <div>
      <table class="table table-striped">
        <tr>
          <th>#</th>
          <th>Kegiatan</th>
          <th>Tahun</th>
          <th>#</th>
        </tr>
<?php 
$i = 1;
foreach (select__programkerja() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $key['kegiatan'] ?></td>
          <td><?= $key['tahun'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-programkerja<?= $key['id'] ?>">
              <button type="button" class="btn btn-info btn-sm sambutan" data-toggle="tooltip" title="Sunting Program Kerja">
                <i class="fa fa-edit"></i>
              </button>
            </div>

            <div class="modal fade" id="sunting-programkerja<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-programkerja<?= $key['id'] ?>" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <b><p class="modal-title" id="sunting-programkerja<?= $key['id'] ?>" style="font-size: 18px;">Sunting Program Kerja</p></b>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                        <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>
                        <p style="text-align: left;"><b>Kegiatan</b></p>
                        <input type="text" name="kegiatan" class="form-control" value="<?= $key['kegiatan'] ?>" placeholder="Kegiatan"><br>
                        <input type="text" name="tahun" class="form-control" value="<?= $key['tahun'] ?>" hidden>
                        <p style="text-align: left;"><b>Tahun</b></p>
                        <select name="tahun" class="form-control">
                          <option <?php if ($key['tahun'] == '2020') {
                            echo "selected";
                            } ?> value="2020">2020
                          </option>
                          <option <?php if ($key['tahun'] == '2021') {
                            echo "selected";
                            } ?> value="2021">2021
                          </option>
                          <option <?php if ($key['tahun'] == '2022') {
                            echo "selected";
                            } ?> value="2022">2022
                          </option>
                          <option <?php if ($key['tahun'] == '2023') {
                            echo "selected";
                            } ?> value="2023">2023
                          </option>
                          <option <?php if ($key['tahun'] == '2024') {
                            echo "selected";
                            } ?> value="2024">2024
                          </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="sunting_programkerja" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <br>

            <div data-toggle="modal" data-target="#hapus-programkerja<?= $key['id'] ?>">
              <button type="button" class="btn btn-danger btn-sm sambutan" data-toggle="tooltip" title="Hapus Program Kerja">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="modal fade" id="hapus-programkerja<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-programkerja<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="hapus-programkerja<?= $key['id'] ?>" style="font-size: 18px;">Hapus Program Kerja</p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                      <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" placeholder="id" hidden>
                      <input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" placeholder="Nama 
                      Gambar" hidden>
                      <p>
                        <b>Kegiatan :</b> <?= $key['kegiatan'] ?>
                      </p>

                      <p>
                        <b>Tahun :</b> <?= $key['tahun'] ?>
                      </p>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="hapus_programkerja" class="btn btn-danger">Hapus</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </td>
        </tr>
<?php endforeach; ?>        
      </table>
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
  $('.sambutan').tooltip({ boundary: 'window' })
</script>

</body>
</html>
