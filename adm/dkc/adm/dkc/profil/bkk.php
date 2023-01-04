<?php

session_start();

require '../../f/fungsi/fungsi.php';

require '../../../auth.php';

if (isset($_POST['submit_bkk'])) {
  insert__bkk();
}

if (isset($_POST['hapus_bkk'])) {
  hapus__bkk();
}

if (isset($_POST['submit'])) {
  sunting__bkk();
}

$menu = 'Profil BKK';

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

<link rel="stylesheet" href="<?= url() ?>assets/css/jquery-ui.css">
<script src="<?= url() ?>assets/css/jquery-1.12.4.js"></script>
<script src="<?= url() ?>assets/css/jquery-ui.js"></script>
  <script type="text/javascript">
      $(function(){
      $(".date").datepicker({
       dateFormat:"dd-mm-yy",
      });
    });
  </script>

</head>
<!-- partial:index.partial.html -->
<body>
<div class="page-wrapper chiller-theme toggled">
  <div class="header">
    
  </div>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;">DKC/<b><?= $menu; ?></p></b>
      <div style="text-align: right;">

      </div>
      <hr>
    </div>

      <div style="text-align: right;">
        <div data-toggle="modal" data-target="#tambah-agenda">
          <?php $jumlahbkk = mysqli_num_rows(select__profilbkk()) ?>
          <button type="button" class="btn btn-primary agenda" data-toggle="tooltip" title="Upload">
            <i class="fa fa-upload"></i>
          </button>
        </div>

        <div class="modal fade" id="tambah-agenda" tabindex="-1" role="dialog" aria-labelledby="tambah-agenda" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <b><p class="modal-title" id="tambah-agenda" style="font-size: 18px;">Tambah <?= $menu ?></p></b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                          
                  <p style="text-align: left;">Foto</p>
                  <input type="file" name="gambar" class="form-control">
                  <br>

                  <p style="text-align: left;">Kwartir Ranting</p>
                  <input type="text" name="kwartirranting" class="form-control" placeholder="Kwartir Ranting" id="kwartir">
                  <br>

                  <p style="text-align: left;">Gugus Depan</p>
                  <input type="text" name="gugusdepan" class="form-control" placeholder="Gugus Depan" id="gugusdepan">
                  <br>

                  <p style="text-align: left;">Tingkat SKU</p>

                  <select class="form-control" name="tingkatsku">
                    <option value="Penegak Bantara">
                              Penegak Bantara
                    </option>
                    <option value="Penegak Laksana">
                              Penegak Laksana
                    </option>
                    <option value="Penegak Garuda">
                              Penegak Garuda
                    </option>
                    <option value="Calon Pandega">
                              Calon Pandega
                    </option>
                    <option value="Pandega">
                              Pandega
                    </option>
                    <option value="Pandega Garuda">
                              Pandega Garuda
                    </option>
                  </select><br>

                  <p style="text-align: left;">Nama Lengkap</p>
                  <input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="Nama Lengkap"><br>

                  <p style="text-align: left;">NTA</p>
                  <input type="text" name="nta" class="form-control" placeholder="NTA" id="nta">
                  <br>

                  <p style="text-align: left;">Jabatan</p>
                  <input type="text" name="kategori" class="form-control" placeholder="Jabatan" id="jabatan">
                  <br>
                  <span id="messsage" style="color: red;"></span>
                  <script>
                    var kwartir = document.getElementById('kwartir')
                    var gugusdepan = document.getElementById('gugusdepan')
                    var namalengkap = document.getElementById('namalengkap')
                    var nta = document.getElementById('nta')
                    var jabatan = document.getElementById('jabatan')
                    var messsage = document.getElementById('messsage')


                    kwartir.addEventListener('keyup', function(){
                      if(kwartir.value == ""){
                        messsage.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (kwartir.value) {
                        messsage.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })

                     gugusdepan.addEventListener('keyup', function(){
                      if(gugusdepan.value == ""){
                        messsage.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (gugusdepan.value) {
                        messsage.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })

                     namalengkap.addEventListener('keyup', function(){
                      if(namalengkap.value == ""){
                        messsage.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (namalengkap.value) {
                        messsage.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })

                     nta.addEventListener('keyup', function(){
                      if(nta.value == ""){
                        messsage.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (nta.value) {
                        messsage.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })

                  jabatan.addEventListener('keyup', function(){
                      if(jabatan.value == ""){
                        messsage.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (jabatan.value) {
                        messsage.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })


                  </script>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="submit_bkk" id="endButton" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>

<?php foreach (select__profilbkk() as $key): ?>    
    <b style="text-transform: uppercase;">
        <br>
    </b>    

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th colspan="2">Data Keorganisasian
                <div data-toggle="modal" data-target="#sunting-datakeorganisasian<?= $key['id'] ?>" style="text-align: right;">
                  <button type="button" class="btn btn-info btn-sm profil" data-toggle="tooltip" title="Sunting Data Keorganisasian">
                    <i class="fa fa-edit"></i>
                  </button>
                </div>

                <br>

                <div class="modal fade" id="sunting-datakeorganisasian<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-datakeorganisasian<?= $key['id'] ?>" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <p class="modal-title" id="sunting-datakeorganisasian<?= $key['id'] ?>" style="font-size: 18px;">Sunting (Data Keorganisasian)</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                          
                          <p style="text-align: left;">Foto</p>
                          <input type="file" name="gambar" class="form-control"><br>
                          <img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" style="width: 100px;">
                          <br>
                          <br>

                          <p style="text-align: left;">Kwartir Ranting</p>
                          <input type="text" name="kwartirranting" class="form-control" placeholder="Kwartir Ranting" value="<?= $key['kwartirranting'] ?>"><br>

                          <p style="text-align: left;">Gugus Depan</p>
                          <input type="text" name="gugusdepan" class="form-control" placeholder="Gugus Depan" value="<?= $key['gugusdepan'] ?>"><br>

                          <p style="text-align: left;">Tingkat SKU</p>
                          <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>

                          <select class="form-control" name="tingkatsku">
                            <option value="Penegak Bantara" <?php if ($key['tingkatsku'] == 'Penegak Bantara') {echo "selected";} ?>>
                              Penegak Bantara
                            </option>
                            <option value="Penegak Laksana" <?php if ($key['tingkatsku'] == 'Penegak Laksana') {echo "selected";} ?>>
                              Penegak Laksana
                            </option>
                            <option value="Penegak Garuda" <?php if ($key['tingkatsku'] == 'Penegak Garuda') {echo "selected";} ?>>
                              Penegak Garuda
                            </option>
                            <option value="Calon Pandega" <?php if ($key['tingkatsku'] == 'Calon Pandega') {echo "selected";} ?>>
                              Calon Pandega
                            </option>
                            <option value="Pandega" <?php if ($key['tingkatsku'] == 'Pandega') {echo "selected";} ?>>
                              Pandega
                            </option>
                            <option value="Pandega Garuda" <?php if ($key['tingkatsku'] == 'Pandega Garuda') {echo "selected";} ?>>
                              Pandega Garuda
                            </option>
                          </select><br>

                          <input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" hidden>
                          <input type="text" name="namalengkap" class="form-control" value="<?= $key['namalengkap'] ?>" hidden>
                          <input type="text" name="nta" class="form-control" value="<?= $key['nta'] ?>" hidden>
                          <input type="text" name="jabatan" class="form-control" value="<?= $key['jabatan'] ?>" hidden>
                          <input type="text" name="instagram" class="form-control" value="<?= $key['instagram'] ?>" hidden>
                          <input type="text" name="facebook" class="form-control" value="<?= $key['facebook'] ?>" hidden>
                          <input type="text" name="twitter" class="form-control" value="<?= $key['twitter'] ?>" hidden>
                          <input type="text" name="youtube" class="form-control" value="<?= $key['youtube'] ?>" hidden>

                          <input type="text" name="kategori" class="form-control" value="<?= $key['kategori'] ?>" hidden>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div data-toggle="modal" data-target="#hapus-datakeorganisasian<?= $key['id'] ?>" style="text-align: right;">
                  <button type="button" class="btn btn-danger btn-sm profil" data-toggle="tooltip" title="hapus Data Keorganisasian">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>

                <div class="modal fade" id="hapus-datakeorganisasian<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-datakeorganisasian<?= $key['id'] ?>" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <p class="modal-title" id="hapus-datakeorganisasian<?= $key['id'] ?>" style="font-size: 18px;">Apakah anda yakin?</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?= $key['id'] ?>" hidden>
                        <input type="text" name="gambar_lama" value="<?= $key['gambar'] ?>" hidden>
                        <div class="modal-footer">
                          <button type="submit" name="hapus_bkk" class="btn btn-danger">Hapus</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </th>
            </tr>
            <tr>
              <td>Foto</td>
              <td>
                <a href="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>">
                  <img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" style="width: 200px;">    
                </a>
              </td>
            </tr>
            <tr>
              <td>Kwartir Ranting</td>
              <td><?= $key['kwartirranting'] ?></td>
            </tr>
            <tr>
              <td>Gugus Depan</td>
              <td><?= $key['gugusdepan'] ?></td>
            </tr>
            <tr>
              <td>Tingkat SKU</td>
              <td><?= $key['tingkatsku'] ?></td>
            </tr>
          </tbody>
        </table>
        
        <br>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th colspan="2">Data Diri
                <div data-toggle="modal" data-target="#sunting-datadiri<?= $key['id'] ?>" style="text-align: right;">
                  <button type="button" class="btn btn-info btn-sm profil" data-toggle="tooltip" title="Sunting Data Diri">
                    <i class="fa fa-edit"></i>
                  </button>
                </div>

                <div class="modal fade" id="sunting-datadiri<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-datadiri<?= $key['id'] ?>" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <p class="modal-title" id="sunting-datadiri<?= $key['id'] ?>" style="font-size: 18px;">Sunting (Data Diri)</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="" method="POST">
                        <div class="modal-body">
                        <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>
                        <input type="text" name="tingkatsku" class="form-control" value="<?= $key['tingkatsku'] ?>" hidden>
                        <input type="text" name="ambalan" class="form-control" value="<?= $key['ambalan'] ?>" hidden>
                        <input type="text" name="gugusdepan" class="form-control" value="<?= $key['gugusdepan'] ?>" hidden>
                        <input type="text" name="kwartirranting" class="form-control" value="<?= $key['kwartirranting'] ?>" hidden>
                        <input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" hidden>
                        
                        <p style="text-align: left;">Nama Lengkap</p>
                        <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap" value="<?= $key['namalengkap'] ?>">
                        <br>
                        
                        <p style="text-align: left;">NTA</p>
                        <input type="text" name="nta" class="form-control" placeholder="NTA" value="<?= $key['nta'] ?>"><br>

                        <p style="text-align: left;">Instagram</p>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" name="instagram" class="form-control" placeholder="instagram" value="<?= $key['instagram'] ?>"><br>
                        </div>

                        <br>

                        <p style="text-align: left;">Facebook</p>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" name="facebook" class="form-control" placeholder="facebook" value="<?= $key['facebook'] ?>"><br>
                        </div>

                        <br>

                        <p style="text-align: left;">Twitter</p>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" name="twitter" class="form-control" placeholder="twitter" value="<?= $key['twitter'] ?>"><br>
                        </div>

                        <br>

                        <p style="text-align: left;">Youtube</p>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" name="youtube" class="form-control" placeholder="youtube" value="<?= $key['youtube'] ?>"><br>
                        </div>

                        <input type="hidden" name="kategori" class="form-control" value="<?= $key['kat'] ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </th>
            </tr>
            <tr>
              <td>Nama Lengkap</td>
              <td><?= $key['namalengkap'] ?></td>
            </tr>
            <tr>
              <td>NTA</td>
              <td><?= $key['nta'] ?></td>
            </tr>
            <tr>
              <td>Instagram</td>
              <td>@<?=$key['instagram']?></td>
            </tr>
            <tr>
              <td>Facebook</td>
              <td>@<?=$key['facebook']?></td>
            </tr>
            <tr>
              <td>Twitter</td>
              <td>@<?=$key['twitter']?></td>
            </tr>
            <tr>
              <td>Youtube</td>
              <td>@<?=$key['youtube']?></td>
            </tr>
          </tbody>
        </table>

        <br>
        <br>

<?php endforeach; ?>  

    </div>
  </main>
  <!-- page-content" -->
</div>
<script src="<?= url() ?>assets/js/jquery.min.js"></script>
<script src="<?= url() ?>assets/js/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script> 
  $(function(){
    $(".header").load("<?= url() ?>adm/dkc/adm/assets/property/header.php"); 
  });
</script>

<script>
  $('.profil').tooltip({ boundary: 'window' })
</script>

</body>
</html>
