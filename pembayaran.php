<?php  
	$harga_murni = null;
	$administrasi = null;

	// untuk id pembelian
	$baca = $blog->read_max("id_pembelian",$pembelian);
	$baca = $baca->fetch(PDO::FETCH_LAZY);
	$max =  $baca['max(id_pembelian)'];
	if (!isset($max)) {
		$_SESSION["id_pembelian"] = 1;
	} else {
		$_SESSION["id_pembelian"] = $max + 1;
	}

	print_r($_SESSION);

	if (isset($_SESSION["souvenir"])) {
		$id_souvenir = $_SESSION['souvenir'];
		$a = array('id_souvenir' => $id_souvenir);
		$baca = $blog->read($souvenir, $a);
		$r = $baca->fetch(PDO::FETCH_LAZY);
		$a = $r['harga']*$_SESSION['jumlah_souvenir'];
		$harga_murni = $harga_murni + $a;
		$administrasi = $harga_murni*5/100;
	}

	if (isset($_SESSION["tiket"])) {
		$id_tiket = $_SESSION["tiket"];
		$a = array('id_tiket' => $id_tiket);
		$baca = $blog->read($tiket, $a);
		$r = $baca->fetch(PDO::FETCH_LAZY);
		$b = $r['harga']*$_SESSION['jumlah_tiket'];
		$harga_murni = $harga_murni + $b;
		$administrasi = $harga_murni*5/100;
	}


	// if (isset($_POST['setuju'])) {
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$notelp = $_POST["notelp"];
		$alamat = $_POST["alamat"];
		$kota = $_POST["kota"];
		$kodepos = $_POST["kodepos"];
		$komentar = @$_POST["kodepos"];
		$bank = $_POST["bank"];

		$b = array(
				'id_pembelian' => $_SESSION['id_pembelian'],
				'id_user' => $_SESSION["id_user"],
				'id_souvenir' => @$_SESSION["souvenir"],
				'id_tiket' => @$_SESSION["tiket"],
				'jumlah_souvenir' => @$_SESSION["jumlah_souvenir"],
				'jumlah_tiket' => @@$_SESSION["jumlah_tiket"],
				'status' => 0,
				'harga_murni' => $harga_murni,
				'administrasi' => $administrasi,
				'nama' => $nama,
				'email' => $email,
				'notelp' => $alamat,
				'alamat' => $alamat,
				'kota' => $kota,
				'kodepos' => $kodepos,
				'komentar' => $komentar,
				'bank' => $bank
			);
		$pembeliannya = $blog->create($pembelian, $b);
	// } else {
	// 	echo "Anda harus mensetujui terlebih dahulu";
	// }

?>

<!-- mengharuskan user untuk login terlebih dahulu -->

<div class="page">
	<div class="container">
		<div class="col-lg-5 col-centered">
			<h1 class="page-header">Pembayaran</h1>
			<p>
				Nominal
				<?php  
					echo $blog->rupiah($harga_murni);
					echo "<br>";
					echo $blog->rupiah($administrasi);
				?>
			</p>

			<p>
				Total 
				<?php  
					echo $blog->rupiah($harga_murni+$administrasi);
				?>
			</p>

			<p>
				Jika anda telah melakukan pembaran diharapkan untuk melakukan konfirmasi pada link berikut 
				<a href="<?=$url."?halaman=konfirmasi&id=".$_SESSION['id_pembelian']?>">Klik Disini</a>
			</p>
		</div>
	</div>
</div>

