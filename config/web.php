<?php  
	date_default_timezone_set("Asia/Jakarta");
	include_once 'master.php';
	// Konfigurasi untuk DataBase
	$db = "mysql";
	$host = "localhost";
	$table = "dbKumpulin";
	$user = "root";
	$pass = "";
	$blog = new tool_mantap($db, $host, $table, $user, $pass);
	$url = "http://localhost/kumpulin/";
	// list tabel pada database yang digunakan
	// tabel admin
	$admin = "dbadmin";
	$event = "dbevent";
	$tiket = "dbtiket";
	$souvenir = "dbsouvenir";
	$user = "dbuser";
	$detail = "dbdetail";
	$pembelian = "dbpembelian";
?>