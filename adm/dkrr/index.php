<?php

session_start();
if(!isset($_SESSION["username"])){
header("Location: adm/log/logout.php");
exit(); 
}else if (isset($_SESSION['username'])) {
	header("Location: adm/index.php");
}