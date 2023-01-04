<?php

require '../adm/dkc/adm/f/fungsi/fungsi.php';

?>

<!DOCTYPE html>
<html lang="en" >
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
    <?php foreach (potensitd__menu() as $key): ?>    
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
      	<div class="card-body">
            <h1><p class="card-title" style="font-size: 18px; text-align: center; font-family: 'Montserrat', sans-serif;">DATA POTENSI</p></h1>
        	<br>
        </div>
        
        <div class="row">
<?php foreach (select__potensicapen() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #ffff80">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Calon Penegak</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div id="capenpa" class="counter" data-count="<?= $key['SUM(capenpa + capenpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
<?php endforeach; ?>          


<?php foreach (select__potensipenban() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #ffff1a">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Penegak Bantara</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div id="penbanpa" class="counter" data-count="<?= $key['SUM(penbanpa + penbanpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
<?php endforeach; ?>          

<?php foreach (select__potensipenlak() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #ffdb4d">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Penegak Laksana</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div id="penlakpa" class="counter" data-count="<?= $key['SUM(penlakpa + penlakpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
<?php endforeach; ?>          

<?php foreach (select__potensipengar() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #ffcc00">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Penegak Garuda</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div id="pengarpa" class="counter" data-count="<?= $key['SUM(pengarpa + pengarpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
<?php endforeach; ?>          

<?php foreach (select__potensicapan() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #d9b18c">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Calon Pandega</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div class="counter" data-count="<?= $key['SUM(capanpa + capanpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
<?php endforeach; ?>                    

<?php foreach (select__potensipan() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #bf7d40">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Pandega</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div id="panpa" class="counter" data-count="<?= $key['SUM(panpa + panpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
<?php endforeach; ?>                    

<?php foreach (select__potensipangar() as $key): ?>
          <div class="col-md-3 col-xs-6 col-sm-6">
            <ul class="list-group list-group-flush">
	          <li class="list-group-item" style="background-color: #86582d">
	            <div class="row">
	              <div class="col-md-4 col-xs-12 col-sm-12" style="padding-top: 10px;">
	                <center>
	                	<b>Pandega Garuda</b>
	                </center>
	              </div>
	              <div class="col-md-8 col-xs-12 col-sm-12" style="padding-top: 10px;">
	              	<center>
		                <div id="pangarpa" class="counter" data-count="<?= $key['SUM(pangarpa + pangarpi)'] ?>">0</div>
		            </center>
	              </div>
	            </div>
	          </li>
	        </ul>
          </div>
		</div>
<?php endforeach; ?>                

		<br>
		<br>

      </div>
    </div>

  </div>
</div>

<!-- footer -->
<center id="footer">
  
</center>

<script src='<?= url() ?>assets/js/bootstrap.min.js'></script>

<script src="<?= url(); ?>assets/js/script.js"> </script>

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
