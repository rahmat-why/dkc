<?php

session_start();

require '../f/fungsi/fungsi.php';
require '../auth.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
<style>

body{
    background-color: #e6f2ff;
}

.box{
    width: 350px;
    /*meletakkan form ke tengah*/
    margin: 80px auto;
    padding: 30px 20px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    background-color: white;
    border-radius: 5%;
}

.judul{
    color: white;
    font-size: 24px;
    font-family: cursive;
}

.form_login1{
    /*membuat lebar form penuh*/
    margin-bottom: 23px;
    margin-top: 20px;
    width: 270px; 
    border: none; 
    background-color: white; 
    border: 1px solid #c2c2d6;
    border-left: none;
    margin-right: 0px;
    border-radius:0 50px 0 0;
    height: 38px;
}

.form_login{
    /*membuat lebar form penuh*/
    margin-top: 2px;
    width: 220px; 
    border: none; 
    background-color: white; 
    border: 1px solid #c2c2d6;
    border-left: none;
    border-right: none;
    margin-right: 0px;
    border-radius:0 0 0 0;
    height: 38px;
}

.logo{
    width: 80px;
    margin-top: 10px;
    background-color: white;
    border-radius: 5px 5px 5px 5px;
    padding: 10px;
}

.button{
    background-color: white;
    width: 50%;
    height: 35px;
    border: 1px solid #c2c2d6;
    border-radius: 20px;
}

.icon{
    margin-bottom: 20px;
    padding: 7px;
    border: 1px solid #c2c2d6;
    border-right: none;
    margin-right: -5px;
    border-radius:50px 0 0 0;
    height: 38px;
    padding-top: 11px;
    padding-left: 9px;
    background-color: white;
}

.toggle-password{
    margin-bottom: 20px;
    padding: 7px;
    border: 1px solid #c2c2d6;
    border-left: none;
    margin-left: -5px;
    border-radius:0 70% 0 0;
    height: 38px;
    width: 50px;
    padding-top: 11px;
    padding-left: 9px;
    background-color: white;
}

.head{
    background-color: black;
    border-radius: 0 0 50px 50px;
    margin-left: -20px;
    margin-right: -20px;
    margin-top: -40px;
    height: 200px;
}

.head2{
    background-color: white;
    border-radius: 60px 60px 60px 60px;
    margin-left: -20px;
    margin-right: -20px;
    margin-top: -90px;
}

.pass
{
    content: "&";
}
</style>
</head>
<body class="bg-light">
<body class="bg-light">

<center>
    <section>
        <div class="box">
            <form action="cekfor.php" method="POST">
<?php foreach (select__forgot() as $key): ?>
               <div class="head"><br>
                    <img src="<?= url() ?>assets/img/logo.png" class="logo"><br><br>
                    <p class="judul">Welcome<span> </span> !</p><br>
                </div><br><br><br><br>
                <div class="head2">
                    <br>
                    <div>
                      <div class="text-left container">
                          <label style="text-align: left;">Username</label><br>
                      </div>    
                      <i class="fa fa-user icon"></i>
                      <input type="text" placeholder="username" name="username" class="form_login1" value="<?= $key['username']; ?>" style="margin-top: -20px;">
                    </div>

                    <div>
                      <div class="text-left container">
                          <label style="text-align: left;">Password Lama</label><br>
                      </div>  
                      <i class="fa fa-lock icon"></i>   
                      <input type="text" name="passwordlama" placeholder="password" id="passwordlama" class="form_login pass" id="password-field">
                      <i toggle="#password-field" onclick="myFunction()" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                    </div><br><br>

                    <div>
                      <div class="text-left container">
                          <label style="text-align: left;">Password Baru</label><br>
                      </div>  
                      <i class="fa fa-lock icon"></i>   
                      <input type="password" name="passwordbaru" placeholder="Password Baru" id="myInput" class="form_login pass">
                      <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i><br>
                    </div>

                    <div>
                      <div class="text-left container">
                          <label style="text-align: left;">Konfirmasi Password Baru</label><br>
                      </div>  
                      <i class="fa fa-lock icon"></i>   
                      <input type="password" name="upasswordbaru" placeholder="Konfirmasi Password Baru" id="myInput" class="form_login pass">
                      <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                    </div>
                </div>

                <div class="head3">
                    <br><br><br><br>
                    <b><button type="submit" name="login" class="button">Sign in</button></b>
                </div>
<?php endforeach ?>
            </form>
        </div>
    </section>
</center>
</body>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("passwordlama");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
</body>
</html>