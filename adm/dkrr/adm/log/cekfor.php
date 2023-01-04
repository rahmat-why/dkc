<?php

session_start();

require '../f/fungsi/fungsi.php';

  	global $conn2;

    $username = $_POST['username'];
    $passwordlama = md5($_POST['passwordlama']);
    $passwordbaru = md5($_POST['passwordbaru']);
    $upassword = $_POST['upasswordbaru'];
    $upasswordbaru = md5($_POST['upasswordbaru']);


	if ($passwordbaru != $upasswordbaru) {
            echo "<Script>
                alert('Password tidak terkonfirmasi');
                window.location='forgot.php';
              </Script>
             ";
        }else{

        	$query = "SELECT * FROM daftarkwaran WHERE username = '$username' AND password = '$passwordlama'";
		    $res   = mysqli_query($conn2, $query);
		    $true  = mysqli_num_rows($res);

		    if (!$true) {
		    	echo "<Script>
		                alert('username/password tidak sesuai');
		                window.location='forgot.php';
		              </Script>
		             ";
		    }else{
	        	$update = mysqli_query($conn2, "UPDATE daftarkwaran SET upassword = '$upassword', password = '$passwordbaru' WHERE username = '$username'");

	        	if ($update) {
	        		echo "<Script>
			                alert('Ubah password berhasil');
			                window.location='../index.php';
			              </Script>
			             ";
			        $_SESSION['username'] = $username;     
	        	}
		    }
        }
?>