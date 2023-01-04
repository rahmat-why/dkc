<?php

require '../adm/dkc/adm/f/fungsi/fungsi.php';

$key = mysqli_fetch_assoc(select__profilketuabph());

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
      <?php foreach (profil__menu() as $key): ?>    
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
            <a class="nav-link active" id="BPH-tab" data-toggle="pill" href="#BPH" role="tab" aria-controls="BPH" aria-selected="true">Unsur Pimpinan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="BKK-tab" data-toggle="pill" href="#BKK" role="tab" aria-controls="BKK" aria-selected="false">Bid. Kajian Kepramukaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="BK-tab" data-toggle="pill" href="#BK" role="tab" aria-controls="BK" aria-selected="false">Bid. Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="BPP-tab" data-toggle="pill" href="#BPP" role="tab" aria-controls="BPP" aria-selected="false">Bid. Pembinaan dan Pengembangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="BPE-tab" data-toggle="pill" href="#BPE" role="tab" aria-controls="BPE" aria-selected="false">Bid. Penelitian dan Evaluasi</a>
          </li>
        </ul>

        <br>
        <br>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="BPH" role="tabpanel" aria-labelledby="BPH-tab">

            <div class="row">

			<div class="container">

<?php foreach(select__profilbph() as $key): ?>              				

				<div class="jumbotron" style="background-image: url('../assets/img/main.png'); background-color: white">
					<div class="row">
						<div class="col-md-5">
							<center>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" class="img-responsive" style="width: 250px; height: 300px">
							</center>
							<br>	
						</div>
						<div class="col-md-7">
							<p style="font-size: 17px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;"><?= $key['namalengkap'] ?></p>
							<p style="font-size: 15px; color: #dad6f3; font-family: Times New Roman, Times, serif;"><?= $key['nta'] ?></p>	
							<p style="font-size: 14px; color: #dad6f3; font-family: Arial, Helvetica, sans-serif;"><?= $key['tingkatsku'] ?> | <?= $key['gugusdepan'] ?> | <?= $key['kwartirranting'] ?></p>	

							<br>
							<br>
							<br>

							<a href="https://www.instagram.com/<?= $key['instagram'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/instagram.png" style="width: 18px;"> <?= $key['instagram'] ?>
								</p>
							</a>

							<a href="https://www.facebook.com/<?= $key['twitter'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/facebook.png" style="width: 18px;"> <?= $key['twitter'] ?>
								</p>
							</a>

							<a href="https://twitter.com/<?= $key['facebook'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin-left: -2px;">
									<img src="<?= url(); ?>assets/img/twitter.png" style="width: 20px;"> <?= $key['facebook'] ?>
								</p>
							</a>

							<a href="https://www.instagram.com/<?= $key['youtube'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/youtube.png" style="width: 18px;"> <?= $key['youtube'] ?>
								</p>
							</a>

						</div>
					</div>
				</div>

<?php endforeach; ?>

			</div>

            </div>

          </div>

          <div class="tab-pane fade" id="BKK" role="tabpanel" aria-labelledby="BKK-tab">

            <div class="row">

			<div class="container">

<?php foreach(select__profilbkk() as $key): ?>              				

				<div class="jumbotron" style="background-image: url('../assets/img/main.png'); background-color: white">
					<div class="row">
						<div class="col-md-5">
							<center>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" class="img-responsive" style="width: 250px; height: 300px">
							</center>
							<br>	
						</div>
						<div class="col-md-7">
							<p style="font-size: 17px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;"><?= $key['namalengkap'] ?></p>
							<p style="font-size: 15px; color: #dad6f3; font-family: Times New Roman, Times, serif;"><?= $key['nta'] ?></p>	
							<p style="font-size: 14px; color: #dad6f3; font-family: Arial, Helvetica, sans-serif;"><?= $key['tingkatsku'] ?> | <?= $key['gugusdepan'] ?> | <?= $key['kwartirranting'] ?></p>	

							<br>
							<br>
							<br>

							<a href="https://www.instagram.com/<?= $key['instagram'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/instagram.png" style="width: 18px;"> <?= $key['instagram'] ?>
								</p>
							</a>

							<a href="https://www.facebook.com/<?= $key['twitter'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/facebook.png" style="width: 18px;"> <?= $key['twitter'] ?>
								</p>
							</a>

							<a href="https://twitter.com/<?= $key['facebook'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin-left: -2px;">
									<img src="<?= url(); ?>assets/img/twitter.png" style="width: 20px;"> <?= $key['facebook'] ?>
								</p>
							</a>

							<a href="https://www.instagram.com/<?= $key['youtube'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/youtube.png" style="width: 18px;"> <?= $key['youtube'] ?>
								</p>
							</a>

						</div>
					</div>
				</div>

<?php endforeach; ?>

			</div>

            </div>

          </div>

          <div class="tab-pane fade" id="BK" role="tabpanel" aria-labelledby="BK-tab">

            <div class="row">

			<div class="container">

<?php foreach(select__profilbk() as $key): ?>              				

				<div class="jumbotron" style="background-image: url('../assets/img/main.png'); background-color: white">
					<div class="row">
						<div class="col-md-5">
							<center>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" class="img-responsive" style="width: 250px; height: 300px">
							</center>
							<br>	
						</div>
						<div class="col-md-7">
							<p style="font-size: 17px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;"><?= $key['namalengkap'] ?></p>
							<p style="font-size: 15px; color: #dad6f3; font-family: Times New Roman, Times, serif;"><?= $key['nta'] ?></p>	
							<p style="font-size: 14px; color: #dad6f3; font-family: Arial, Helvetica, sans-serif;"><?= $key['tingkatsku'] ?> | <?= $key['gugusdepan'] ?> | <?= $key['kwartirranting'] ?></p>	

							<br>
							<br>
							<br>

							<a href="https://www.instagram.com/<?= $key['instagram'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/instagram.png" style="width: 18px;"> <?= $key['instagram'] ?>
								</p>
							</a>

							<a href="https://www.facebook.com/<?= $key['twitter'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/facebook.png" style="width: 18px;"> <?= $key['twitter'] ?>
								</p>
							</a>

							<a href="https://twitter.com/<?= $key['facebook'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin-left: -2px;">
									<img src="<?= url(); ?>assets/img/twitter.png" style="width: 20px;"> <?= $key['facebook'] ?>
								</p>
							</a>

							<a href="https://www.instagram.com/<?= $key['youtube'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/youtube.png" style="width: 18px;"> <?= $key['youtube'] ?>
								</p>
							</a>

						</div>
					</div>
				</div>

<?php endforeach; ?>

			</div>

            </div>

          </div>

          <div class="tab-pane fade" id="BPP" role="tabpanel" aria-labelledby="BPP-tab">

            <div class="row">

			<div class="container">

<?php foreach(select__profilbpp() as $key): ?>              				

				<div class="jumbotron" style="background-image: url('../assets/img/main.png'); background-color: white">
					<div class="row">
						<div class="col-md-5">
							<center>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" class="img-responsive" style="width: 250px; height: 300px">
							</center>
							<br>	
						</div>
						<div class="col-md-7">
							<p style="font-size: 17px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;"><?= $key['namalengkap'] ?></p>
							<p style="font-size: 15px; color: #dad6f3; font-family: Times New Roman, Times, serif;"><?= $key['nta'] ?></p>	
							<p style="font-size: 14px; color: #dad6f3; font-family: Arial, Helvetica, sans-serif;"><?= $key['tingkatsku'] ?> | <?= $key['gugusdepan'] ?> | <?= $key['kwartirranting'] ?></p>	

							<br>
							<br>
							<br>

							<a href="https://www.instagram.com/<?= $key['instagram'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/instagram.png" style="width: 18px;"> <?= $key['instagram'] ?>
								</p>
							</a>

							<a href="https://www.facebook.com/<?= $key['twitter'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/facebook.png" style="width: 18px;"> <?= $key['twitter'] ?>
								</p>
							</a>

							<a href="https://twitter.com/<?= $key['facebook'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin-left: -2px;">
									<img src="<?= url(); ?>assets/img/twitter.png" style="width: 20px;"> <?= $key['facebook'] ?>
								</p>
							</a>

							<a href="https://www.instagram.com/<?= $key['youtube'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/youtube.png" style="width: 18px;"> <?= $key['youtube'] ?>
								</p>
							</a>

						</div>
					</div>
				</div>

<?php endforeach; ?>

			</div>

            </div>

          </div>

          <div class="tab-pane fade" id="BPE" role="tabpanel" aria-labelledby="BPE-tab">

            <div class="row">

			<div class="container">

<?php foreach(select__profilbpe() as $key): ?>              				

				<div class="jumbotron" style="background-image: url('../assets/img/main.png'); background-color: white">
					<div class="row">
						<div class="col-md-5">
							<center>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/profil/<?= $key['gambar'] ?>" class="img-responsive" style="width: 250px; height: 300px">
							</center>
							<br>	
						</div>
						<div class="col-md-7">
							<p style="font-size: 17px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;"><?= $key['namalengkap'] ?></p>
							<p style="font-size: 15px; color: #dad6f3; font-family: Times New Roman, Times, serif;"><?= $key['nta'] ?></p>	
							<p style="font-size: 14px; color: #dad6f3; font-family: Arial, Helvetica, sans-serif;"><?= $key['tingkatsku'] ?> | <?= $key['gugusdepan'] ?> | <?= $key['kwartirranting'] ?></p>	

							<br>
							<br>
							<br>

							<a href="https://www.instagram.com/<?= $key['instagram'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/instagram.png" style="width: 18px;"> <?= $key['instagram'] ?>
								</p>
							</a>

							<a href="https://www.facebook.com/<?= $key['twitter'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/facebook.png" style="width: 18px;"> <?= $key['twitter'] ?>
								</p>
							</a>

							<a href="https://twitter.com/<?= $key['facebook'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin-left: -2px;">
									<img src="<?= url(); ?>assets/img/twitter.png" style="width: 20px;"> <?= $key['facebook'] ?>
								</p>
							</a>

							<a href="https://www.instagram.com/<?= $key['youtube'] ?>">
								<p style="font-size: 13px; color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
									<img src="<?= url(); ?>assets/img/youtube.png" style="width: 18px;"> <?= $key['youtube'] ?>
								</p>
							</a>

						</div>
					</div>
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

