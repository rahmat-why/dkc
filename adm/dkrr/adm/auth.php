<?php

$kwaran = $_SESSION['username'];

$query = "SELECT * FROM daftarkwaran WHERE nama = '$kwaran'";
$res   = mysqli_query($conn, $query);
$true = mysqli_num_rows($res);

if (!$true) {
	header('location: //localhost/dk/adm/dkrr/adm/log/logout.php');
	exit();
}

if (isset($_SESSION["LAST_ACTIVITY"]) && (time() - $_SESSION["LAST_ACTIVITY"] > 7200)) { 
        session_destroy();   
        session_unset();   
    } 

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp 

?>