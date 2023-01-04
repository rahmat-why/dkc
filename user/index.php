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

<div style="margin-top: 20px;">
  <div class="row">

    <div class="col-md-6 col-xs-12 col-sm-12">

      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
        <div class="row">
          <div class="card-body">
            Login sebagai:<h1 class="card-title" style="font-size: 18px; text-align: center; font-family: 'Fredoka One';"><b> DKR</b></h1>
            <br>

          </div>

          <div class="col-md-3 col-xs-12 col-sm-12">
          </div>

          <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <img src="https://static.vecteezy.com/system/resources/thumbnails/000/643/462/small/vector60-7915-01.jpg" class="img-responsive" alt="">
              <div class="card-body">
                <br>
                <br>
                <div class="text-right">
                    <a href="<?= url(); ?>adm/dkrr/adm/log">
                        <button type="button" class="btn btn-primary">Login</button>
                    </a>
                </div>
                <br><br>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-12 col-sm-12">
          </div>

        </div>
      </div>

    </div>

    <div class="col-md-6 col-xs-12 col-sm-12">

      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
        <div class="row">
          <div class="card-body">
            Login sebagai:<h1 class="card-title" style="font-size: 18px; text-align: center; font-family: 'Fredoka One';"><b> DKC</b></h1>
            <br>

          </div>

          <div class="col-md-3 col-xs-12 col-sm-12">
          </div>

          <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="card mb-3">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAAZlBMVEX///8AAACMjIyXl5f19fXt7e1SUlL4+Pg6Ojrq6upiYmJNTU3h4eFtbW1JSUnW1tYUFBSFhYWmpqbLy8sZGRl6enpzc3NaWlqwsLBgYGAuLi5DQ0MpKSnGxsYLCwu9vb2cnJw7OzvN5ofjAAADpUlEQVR4nO3cC3LqMAwF0JhPA5SWbyFAW+j+N/kIGVrCCyBL8Uhi7lmBNIljy5aTZQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoC0fLubdzlF3vhjm2tG0rV9stuHCdlP0tWNqT17sQoNd8STPsbtsSq+07GrH1oL5rewqc+34hMaNL2ftRR1rxyjx4PG5f4hvlPxCeNOOkyl/p+UXwrvPz+mAml8IA+1YOcjP7/QMtaONN4rJL4SRdryxunH5heBszp/E5hfCRDvmKNP4BKfaMceIfkFLjl7SISe/EIbacZPNeAnOtOOm6vHyC6GnHTkRawSWDtqRE20fp9Jsqx05DWMOPPMxF3b4CXa0Yyf55Cf4qR07Rc7PLwQPheFCkuBCO3qCQpJgoR09AXMZU/GwmImsdOs81L1rSYJr7egJXiQJvmhHT/D0CT79K/r0H5kPSYIf2tETkA5cbvFwEPMlSfBLO3qCviRBFwf3kgS1YycRfGU8fGNEg9DDEDxWvDe7Kh5Zeqh3M0HB5KFYKjF37kNw03Cx4eW30Y6bjLkz6mNX9IQ1U/iYIyqsrUMnn9DKPj6/vXbMcVax+a20I44V0QZU8tcK1P+Oye/bRRlRF1U2Ocwvy8b0Z+hmCVOXE8fhwNUEUUP6lrr7fl4izIfO5r+6MWEXeO10AB7lxNl+5XQM7skdeVOPr2kvagt/5KXJ6dcksqFy6qgYLDH27z3s2v9ibTt52XLK2GegHk4/T155+YXwqh05DbvZ0Em7YdSFkGsOLoiI8nOQoegAu2R885DdzfzH9O0CUafhmeGOQ/apS53d+xMPL+zS7LTzuKWFAVgxOgzHbeVndZdNsIK5ZrI5XdThdM1g7STq//mfva3u6OOk+8xtlrb4halY+86IukSbGOscFVzIusXWik3UqN3M1AZGggdoq6uE+NuROIZ+UtJSFXHNTlXR2iq7zs6aO01+dvp/RW3o91jpjxXddbnHyD2YlpfZl2wsuVutk+psVE3so4jHTBxWsP9cQWHh4JfROUln4fC+9ULpkoGiiX9LgsLATYokhcQf/ZLikDbBg3Z+KUrdS/oTRdr89BfciYeg/iAU/ZqDQvv3HeIj60e0d4ATLkQryl+ZXtJpvrTUXY4m2m66pLv11ErXwX26O9wJi90z3aJX8A81Kt1/rSXZ0q7T3eD+SZ+g7r209Pkpr0afPsFZJzlHrdwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAL78Axi1LXHcYxbJAAAAAElFTkSuQmCC" class="img-responsive" alt="">
              <div class="card-body">
                <br>
                <br>
                <div class="text-right">
                    <a href="<?= url(); ?>adm/dkc/adm/log/login.php">
                        <button type="button" class="btn btn-primary">Login</button>
                    </a>
                </div>
                <br><br>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-12 col-sm-12">
          </div>

        </div>
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

</body>
</html>
