<?php

$username = $_SESSION['username'];

$query = "SELECT * FROM userkec WHERE username = '$username'";
$res   = mysqli_query($conn, $query);
$true = mysqli_num_rows($res);

if (!$true) {
	header('location: ../../adm/log/logout.php');
	exit();
}

if (isset($_SESSION["LAST_ACTIVITY"]) && (time() - $_SESSION["LAST_ACTIVITY"] > 7200)) { 
        session_destroy();   
        session_unset();   
    } 

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp 

?>