<?php  
	$tombol = @$_POST["tombol"];
	if (isset($tombol)) {
		$email = $_POST["email"];
		$password = md5($_POST["password"]);
		$nama = $_POST["nama"];
		// input data
		$data = array(
			'email' => $email,
			'password' => $password,
			'nama' => $nama
			);
		$input = $blog->create($user, $data);
		if ($input) {
			$pesan_sukses = "Sukses Mendaftar";
		} else {
			$pesan_error = "Gagal Mendaftar";
		}
	}
	include 'view/form_signup.php';
?>