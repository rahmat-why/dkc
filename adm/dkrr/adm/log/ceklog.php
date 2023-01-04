<?php

session_start();

require '../f/fungsi/fungsi.php';

  	global $conn;

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $code = uniqid();

    $nama = $_POST['nama'];
    $wilayah = $_POST['wilayah'];

    $query = "SELECT * FROM daftarkwaran WHERE username = '$username' AND password = '$password' AND nama = '$nama' AND wilayah = '$wilayah'";
    $res   = mysqli_query($conn, $query);
    $true  = mysqli_num_rows($res);

    if ($true) {
        $_SESSION['username'] = $username;
        
        header('location:../index.php');
    }else{
        echo "<Script>
                alert('username/password tidak sesuai');
                window.location='index.php';
              </Script>
             ";
    }
?>