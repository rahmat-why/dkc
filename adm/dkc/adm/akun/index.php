<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['forgot'])) {
	forgot__password();
}

$menu = 'Akun';

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
      <p style="font-size: 19px;">Wilayah 1<b></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>

    <div class="row">
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
    			<th>Kwaran</th>
    		</tr>
<?php $i = 1; ?>    		
<?php foreach (select__akun1() as $key): ?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td><?= $key['nama'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-agenda<?= $key['id'] ?>">
                <button type="button" class="btn btn-info btn-sm agenda" data-toggle="tooltip" title="Sunting">
                  <i class="fa fa-edit"></i>
                </button>
            </div>

            <div class="modal fade" id="sunting-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">View <?= $menu ?></p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nama" value="<?= $key['nama'] ?>" hidden>
                      <p style="text-align: left;"><b>Username</b></p>
                      <input type="text" name="username" class="form-control" placeholder="Judul" value="<?= $key['username'] ?>"><br>
                      <p style="text-align: left;"><b>Password</b></p>
                      <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $key['upassword'] ?>"><br>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="forgot" class="btn btn-primary">Simpan</button>
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

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;">Wilayah 2<b></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>

    <div class="row">
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Kwaran</th>
        </tr>
<?php $i = 1; ?>        
<?php foreach (select__akun2() as $key): ?>       
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $key['nama'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-agenda<?= $key['id'] ?>">
                <button type="button" class="btn btn-info btn-sm agenda" data-toggle="tooltip" title="Sunting">
                  <i class="fa fa-edit"></i>
                </button>
            </div>

            <div class="modal fade" id="sunting-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">View <?= $menu ?></p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nama" value="<?= $key['nama'] ?>" hidden>
                      <p style="text-align: left;"><b>Username</b></p>
                      <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $key['username'] ?>"><br>
                      <p style="text-align: left;"><b>Password</b></p>
                      <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $key['upassword'] ?>"><br>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="forgot" class="btn btn-primary">Simpan</button>
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

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;">Wilayah 3<b></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>

    <div class="row">
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Kwaran</th>
        </tr>
<?php $i = 1; ?>        
<?php foreach (select__akun3() as $key): ?>       
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $key['nama'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-agenda<?= $key['id'] ?>">
                <button type="button" class="btn btn-info btn-sm agenda" data-toggle="tooltip" title="Sunting">
                  <i class="fa fa-edit"></i>
                </button>
            </div>

            <div class="modal fade" id="sunting-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">View <?= $menu ?></p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nama" value="<?= $key['nama'] ?>" hidden>
                      <p style="text-align: left;"><b>Username</b></p>
                      <input type="text" name="username" class="form-control" placeholder="Judul" value="<?= $key['username'] ?>"><br>
                      <p style="text-align: left;"><b>Password</b></p>
                      <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $key['upassword'] ?>"><br>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="forgot" class="btn btn-primary">Simpan</button>
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

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;">Wilayah 4<b></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>

    <div class="row">
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Kwaran</th>
        </tr>
<?php $i = 1; ?>        
<?php foreach (select__akun4() as $key): ?>       
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $key['nama'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-agenda<?= $key['id'] ?>">
                <button type="button" class="btn btn-info btn-sm agenda" data-toggle="tooltip" title="Sunting">
                  <i class="fa fa-edit"></i>
                </button>
            </div>

            <div class="modal fade" id="sunting-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">View <?= $menu ?></p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nama" value="<?= $key['nama'] ?>" hidden>
                      <p style="text-align: left;"><b>Username</b></p>
                      <input type="text" name="username" class="form-control" placeholder="Judul" value="<?= $key['username'] ?>"><br>
                      <p style="text-align: left;"><b>Password</b></p>
                      <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $key['upassword'] ?>"><br>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="forgot" class="btn btn-primary">Simpan</button>
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

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;">Wilayah 5<b></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>

    <div class="row">
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Kwaran</th>
        </tr>
<?php $i = 1; ?>        
<?php foreach (select__akun5() as $key): ?>       
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $key['nama'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-agenda<?= $key['id'] ?>">
                <button type="button" class="btn btn-info btn-sm agenda" data-toggle="tooltip" title="Sunting">
                  <i class="fa fa-edit"></i>
                </button>
            </div>

            <div class="modal fade" id="sunting-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">View <?= $menu ?></p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nama" value="<?= $key['nama'] ?>" hidden>
                      <p style="text-align: left;"><b>Username</b></p>
                      <input type="text" name="username" class="form-control" placeholder="Judul" value="<?= $key['username'] ?>"><br>
                      <p style="text-align: left;"><b>Password</b></p>
                      <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $key['upassword'] ?>"><br>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="forgot" class="btn btn-primary">Simpan</button>
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
  $('.layer').tooltip({ boundary: 'window' })
</script>

</body>
</html>
