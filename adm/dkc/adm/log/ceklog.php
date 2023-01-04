<?php

session_start();

require '../f/fungsi/fungsi.php';

  	global $conn2;

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM userkec WHERE username = '$username' AND password = '$password'";
    $res   = mysqli_query($conn, $query);

    $key = mysqli_fetch_assoc($res);

    $true  = mysqli_num_rows($res);

    if ($true) {
        $_SESSION['username'] = $username;
        header('location:../index.php');
    }else{
        echo "<Script>
                alert('username/password tidak sesuai');
                window.location='login.php';
              </Script>
             ";
    }
?>