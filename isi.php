<?php  
	$halaman = @$_GET["halaman"];
	if (!isset($halaman)) {
		include 'home.php';
	} else if ($halaman == 'post') {
		include 'post.php';
	} else if ($halaman == 'login') {
		include 'login.php';
	} else if ($halaman == 'signup') {
		include 'signup.php';
	} elseif ($halaman == 'pilih2') {
		include 'pilih.php';
	} else if ($halaman == 'proses') {
		include 'proses.php';
	} else if ($halaman == 'pembayaran') {
		include 'pembayaran.php';
	} else if ($halaman == 'contoh') {
		include 'contoh.php';
	} else if ($halaman == 'postingan') {
		include 'postingan.php';
	} else if ($halaman == 'konfirmasi') {
		include 'konfirmasi.php';
	}
?>