<?php

require '../adm/dkc/adm/f/fungsi/fungsi.php';

?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
  <title>DKC Kab. Bogor</title>
  <link rel="icon" type="image/png" href="<?= url(); ?>assets/img/logo.png"> 
  <link rel='stylesheet' href='<?= url(); ?>assets/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="<?= url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
  <script src="<?= url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= url() ?>assets/js/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <style>
    
      #me{
        display:block;
        text-align:center;
        text-align:center;
        padding:5px;
        font-size:1.2em;
      }

      .swiper-container{
        width:100%;
        overflow:hidden;
        height:100vh;
      }

      .swiper-slide{
        
        overflow:hidden;
        width:100%;
      }
      img{
        width:100%;
      }

      @media (max-width:576px){
        
       
        .swiper-container{
         height:100%;
        }
      }

  </style>  

<div id="header">
    
</div>

  <div class="swiper-container">
    <div class="swiper-wrapper">  
      <?php foreach (fasilitas__menu() as $key): ?>    
        <div class="swiper-slide"> <img src="<?= url() ?>adm/dkc/adm/assets/file/menu/<?= $key['gambar'] ?>"> </div>
      <?php endforeach ?>
    </div>
  </div>

<br>
<br>

<div class="container">
  <center>
    <p style="font-family: 'Montserrat', sans-serif; font-size: 20px;"><?= $key['judul'] ?></p>
    <p>
      <?= $key['deskripsi'] ?>
    </p>
  </center>
</div>

<br>  

<div style="margin-top: 20px;">
  <div class="row">

    <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
        <div class="row">
          <div class="card-body">
            <h1><b><p class="card-title" style="font-size: 18px; text-align: center; font-family: 'Montserrat', sans-serif;">Fasilitas</p></b></h1>
            <br>
          </div>
<?php foreach (select__fasilitas() as $key): ?>          
          <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <center>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <b>
                      <p class="card-text" style="text-align: left; font-size: 17px; margin-left: -10px;"><?= $key['nama'] ?></p>
                    </b>    
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <p style="text-align: right;" data-toggle="modal" data-target="#fasilitas<?= $key['id'] ?>"><i class="fa fa-eye"></i></p>
                  </div>
                </div>
                <a href="<?= url(); ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>">
                  <img src="<?= url(); ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>" class="img-responsive" style="width: 400px; height: 250px;">
                </a>
                <br>
                
              </center>

              <div class="card-body"><br>
                <div class="row">

                  <!-- Modal -->
                  <div class="modal fade" id="fasilitas<?= $key['id'] ?>" role="dialog">
                    <div class="modal-dialog">
                    
                    <center>
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <b><p class="modal-title"><?= $key['nama'] ?></p></b>
                        </div>
                        <div class="modal-body">
                          <img src="<?= url(); ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>" class="img-responsive">
                        </div>
                      </div>
                    </center>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<center id="footer">
  
</center>

<script> 
    $(function(){
      $("#header").load("<?= url(); ?>assets/property/header.php"); 
    });
</script>

<script> 
    $(function(){
      $("#footer").load("<?= url(); ?>assets/property/footer.html"); 
    });
</script>

</body>
</html>
