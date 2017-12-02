<?php  
	include 'config/master.php';
	include 'config/web.php';
	session_start();
	session_destroy();
	header("location: {$url}");
	// var_dump($_SESSION);
?>