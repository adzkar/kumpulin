<?php  
	session_start();
	include '../../config/master.php';
	include '../../config/web.php';
	if ($_SESSION["sudah_masuk"] == "login") {
		include '../../view/admin/dashboard.php';
	} else {
		header("location: {$url}admin");
	}
?>