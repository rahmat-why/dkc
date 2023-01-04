<?php

require '../adm/dkc/adm/f/fungsi/fungsi.php';

?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
  <title>DKC Kab. Bogor</title>
  <link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
  <link rel='stylesheet' href='<?= url() ?>assets/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="<?= url() ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
  <script src="<?= url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= url() ?>assets/js/popper.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

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

</head>
<body>
<!-- partial:index.partial.html -->

<div id="header">
  
</div>

<div class="swiper-container">
  <div class="swiper-wrapper">  
    <?php foreach (select__layer() as $key): ?>    
      <div class="swiper-slide"> <img src="<?= url() ?>adm/dkc/adm/assets/file/layer/<?= $key['gambar'] ?>"> </div>
    <?php endforeach ?>
  </div>
</div>

<div style="margin-top: 20px;">
  <div class="row">

    <div class="col-md-9 col-xs-12 col-sm-12">
      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
        <div class="row">
          <div class="card-body">
            <h1 class="card-title" style="font-size: 18px; text-align: center; font-family: 'Fredoka One';"><b>BERITA</b></h1>
            <br>
            
          </div>
<?php foreach (select__berita() as $key): ?>
          <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <img src="<?= url() ?>adm/dkc/adm/assets/file/berita/<?= $key['gambar'] ?>" class="img-responsive" alt="<?= $key['judul'] ?> Kab. Bogor">
              <div class="card-body">
                <br>
                <p class="card-title" style="font-size: 17px;"><b><?= $key['judul'] ?></b></p>
                <p class="card-text">
                  <?= substr($key['isi'], 0, 350) ?>
                  <a href="berita/berita-terkini.php?tentang=<?= $key['judul'] ?>" hidden>...[selengkapnya]</a>
                  <a href="<?= url() ?>berita.php?tentang=<?= $key['judul'] ?>">...[selengkapnya]</a>
                </p>
                <br><br>
              </div>
            </div>
          </div>
<?php endforeach; ?>
        </div>
      </div>
      <br><br>

      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
        <div class="row">
          <div class="card-body">
            <h1 class="card-title" style="font-size: 18px; text-align: center; font-family: 'Fredoka One';"><b>MARKETPLACE</b></h1>
            <br>

          </div>

          <div class="col-md-4 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <img src="https://www.teknovidia.com/wp-content/uploads/2022/04/Logo-Shopee.jpg.webp" class="img-responsive" alt="">
              <div class="card-body">
                <br>
                <p class="card-title" style="font-size: 17px;"><b>Nama Produk</b></p>
                <p class="card-text">
                  <a href="">Checkout!</a>
                </p>
                <br><br>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <img src="https://www.teknovidia.com/wp-content/uploads/2022/04/Logo-Shopee.jpg.webp" class="img-responsive" alt="">
              <div class="card-body">
                <br>
                <p class="card-title" style="font-size: 17px;"><b>Nama Produk</b></p>
                <p class="card-text">
                  <a href="">Checkout!</a>
                </p>
                <br><br>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <img src="https://www.teknovidia.com/wp-content/uploads/2022/04/Logo-Shopee.jpg.webp" class="img-responsive" alt="">
              <div class="card-body">
                <br>
                <p class="card-title" style="font-size: 17px;"><b>Nama Produk</b></p>
                <p class="card-text">
                  <a href="">Checkout!</a>
                </p>
                <br><br>
              </div>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-md-12 text-right">
              <button type="button" class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>

        </div>
      </div>

    </div>


    <div class="col-md-3 col-xs-12 col-sm-12">
      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
        <div class="card-body">
          <b><p class="card-title" style="font-size: 18px; text-align: center; font-family: 'Fredoka One';"><i class="fa fa-calendar"></i>
 AGENDA</p></b>
          <br>
        </div>
<?php foreach (select__agenda() as $key): ?>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
              <div class="col-md-3 col-xs-3" style="border: 1px solid black; text-align: center; padding: 10px;">
                <p><?= $key['tanggal'] ?></p>
                <strong><?= substr($key['bulan'], 0, 3) ?></strong>
              </div>
              <div class="col-md-9 col-xs-9" style="padding-top: 10px;">
                <p><?= $key['judul'] ?></p>
              </div>
            </div>
          </li>
        </ul>
<?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<center id="footer">
  
</center>

<script src="<?= url() ?>assets/js/bootstrap.min.js"></script>

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

<script type="text/javascript">
var mySwiper = new Swiper('.swiper-container',{speed: 400,
    spaceBetween: 0,
    grabCursor:true,
                                            autoplay:{
    autoplay:true,
    delay:2000,                             disableOnInteraction:false         
               }                       
                                      });
</script>

</body>
</html>
