<?php  
	include '../config/master.php';
	include '../config/web.php';
	session_start();
	if (@$_SESSION["sudah_masuk"] == "login") {
		header("location: {$url}admin/dashboard/?halaman=home");
	} else {
		if (isset($_POST["tombol"])) {
			$username = $_POST["username"];
			$password = md5($_POST["password"]);
			$data = array(
						'username' => $username,
						'password' => $password 
					);
			$baca = $blog->read($admin, $data);
			$jumlah = $baca->rowCount();
			session_start();
			if ($jumlah > 0) {
				$_SESSION["sudah_masuk"] = "login";
				header("location: {$url}admin/dashboard/?halaman=home");
			} else {
				header("location: {$url}admin");
			}
		} else {
			include '../view/admin/login.php';
		}
	}
?>