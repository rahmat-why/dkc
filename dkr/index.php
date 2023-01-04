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
      <?php foreach (dkr__menu() as $key): ?>    
        <div class="swiper-slide"> <img src="<?= url() ?>adm/dkc/adm/assets/file/menu/<?= $key['gambar'] ?>"> </div>
      <?php endforeach ?>
    </div>
  </div>

  <br>
  <br>

  <div class="container">
    <center>
      <p style="font-family: 'Fredoka One'; font-size: 20px;"><?= $key['judul'] ?></p>
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

      	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="Wilayah1-tab" data-toggle="pill" href="#Wilayah1" role="tab" aria-controls="Wilayah1" aria-selected="true">Wilayah 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Wilayah2-tab" data-toggle="pill" href="#Wilayah2" role="tab" aria-controls="Wilayah2" aria-selected="false">Wilayah 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Wilayah3-tab" data-toggle="pill" href="#Wilayah3" role="tab" aria-controls="Wilayah3" aria-selected="false">Wilayah 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Wilayah4-tab" data-toggle="pill" href="#Wilayah4" role="tab" aria-controls="Wilayah4" aria-selected="false">Wilayah 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Wilayah5-tab" data-toggle="pill" href="#Wilayah5" role="tab" aria-controls="Wilayah5" aria-selected="false">Wilayah 5</a>
          </li>
        </ul>

        <br>
        <br>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="Wilayah1" role="tabpanel" aria-labelledby="Wilayah1-tab">

			<div class="container">

			<div class="card-body">
	        </div>
	        <div class="row">
<?php foreach (select__wilayah1() as $key): ?>
	          <div class="col-md-3 col-sm-6 col-xs-6">
	            <ul class="list-group list-group-flush">
	              <li class="list-group-item">
	                <div class="row">
	                  <div class="col-md-12 col-xs-8" style="padding-top: 5px;">
	                    <a href="kwaran.php?kwaran=<?= $key['nama'] ?>"><?= $key['nama'] ?> <i class="fa fa-arrow-circle-o-right"></i></a>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </div>
<?php endforeach; ?>
	        </div>

            </div>

          </div>

          <div class="tab-pane fade" id="Wilayah2" role="tabpanel" aria-labelledby="Wilayah2-tab">

			<div class="container">

			<div class="card-body">
	        </div>
	        <div class="row">
<?php foreach (select__wilayah2() as $key): ?>
	          <div class="col-md-3 col-sm-6 col-xs-6">
	            <ul class="list-group list-group-flush">
	              <li class="list-group-item">
	                <div class="row">
	                  <div class="col-md-12 col-xs-8" style="padding-top: 5px;">
	                    <a href="kwaran.php?kwaran=<?= $key['nama'] ?>"><?= $key['nama'] ?> <i class="fa fa-arrow-circle-o-right"></i></a>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </div>
<?php endforeach; ?>
	        </div>

            </div>

          </div>

          <div class="tab-pane fade" id="Wilayah3" role="tabpanel" aria-labelledby="Wilayah3-tab">

			<div class="container">

			<div class="card-body">
	        </div>
	        <div class="row">
<?php foreach (select__wilayah3() as $key): ?>
	          <div class="col-md-3 col-sm-6 col-xs-6">
	            <ul class="list-group list-group-flush">
	              <li class="list-group-item">
	                <div class="row">
	                  <div class="col-md-12 col-xs-8" style="padding-top: 5px;">
	                    <a href="kwaran.php?kwaran=<?= $key['nama'] ?>"><?= $key['nama'] ?> <i class="fa fa-arrow-circle-o-right"></i></a>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </div>
<?php endforeach; ?>
	        </div>

            </div>

          </div>

          <div class="tab-pane fade" id="Wilayah4" role="tabpanel" aria-labelledby="Wilayah4-tab">

			<div class="container">

			<div class="card-body">
	        </div>
	        <div class="row">
<?php foreach (select__wilayah4() as $key): ?>
	          <div class="col-md-3 col-sm-6 col-xs-6">
	            <ul class="list-group list-group-flush">
	              <li class="list-group-item">
	                <div class="row">
	                  <div class="col-md-12 col-xs-8" style="padding-top: 5px;">
	                    <a href="kwaran.php?kwaran=<?= $key['nama'] ?>"><?= $key['nama'] ?> <i class="fa fa-arrow-circle-o-right"></i></a>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </div>
<?php endforeach; ?>
	        </div>

            </div>

          </div>

          <div class="tab-pane fade" id="Wilayah5" role="tabpanel" aria-labelledby="Wilayah5-tab">

			<div class="container">

			<div class="card-body">
	        </div>
	        <div class="row">
<?php foreach (select__wilayah5() as $key): ?>
	          <div class="col-md-3 col-sm-6 col-xs-6">
	            <ul class="list-group list-group-flush">
	              <li class="list-group-item">
	                <div class="row">
	                  <div class="col-md-12 col-xs-8" style="padding-top: 5px;">
	                    <a href="kwaran.php?kwaran=<?= $key['nama'] ?>"><?= $key['nama'] ?> <i class="fa fa-arrow-circle-o-right"></i></a>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </div>
<?php endforeach; ?>
	        </div>

            </div>

          </div>

        </div>  

      </div>
    </div>

  </div>
</div>

<!-- footer -->
<center id="footer">
  
</center>

<script src='<?= url() ?>assets/js/bootstrap.min.js'></script>

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
