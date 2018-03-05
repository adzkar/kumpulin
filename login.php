<?php  
	// cek apakah sudah login atau belum
	// var_dump($_SESSION);
	if (isset($_SESSION["status_masuk"])) {
		echo "Anda Sudah Masuk";
		echo "<a href='logout.php'>Logout</a>";
	} else {
		if (isset($_POST["tombol"])) {
			$email = $_POST["email"];
			$password = md5($_POST["password"]);
			$data = array(
						'email' => $email,
						'password' => $password
						);
			$baca = $blog->read("dbuser", $data);
			$jumlah = $baca->rowCount();
			if ($jumlah = 1) {
				$r = $baca->fetch(PDO::FETCH_LAZY);
				$_SESSION["nama"] = $r['nama'];
				$_SESSION["email"] = $r['email'];
				$_SESSION["id_user"] = $r['id_user'];
				$_SESSION["status_masuk"] = "sudah masuk";
				header("location: {$url}");
			} else {
				echo "Username / Password Salah";
			}
		}
		include 'view/form_login.php';
	}
?>
</div>