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

	// print_r($_SESSION);

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
				'id_event' => $_SESSION['id_event'],
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

<div class="col-lg-7 col-centered content-box">
	<div class="container-fluid">
		<div class="alert alert-warning">
		  Jika anda telah melakukan pembaran diharapkan untuk melakukan konfirmasi pada link berikut 
			<a href="<?=$url."?halaman=konfirmasi&id=".$_SESSION['id_pembelian']?>">Klik Disini</a>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<p class="text1">Nominal</p>
				<p class="text2">Administrasi</p>
			</div>
			<div class="col-lg-8">
				<p class="text3"><?=$blog->rupiah($harga_murni)?></p>
				<p class="text4"><?=$blog->rupiah($administrasi)?></p>
			</div>
		</div>
		<div class="row box-total">
				<div class="col-lg-4">
					<p class="text5">Total</p>
				</div>
				<div class="col-lg-8">
					<p class="text6"><?=$blog->rupiah($harga_murni+$administrasi)?></p>
				</div>
			</div>
			<div class="row box-pembayaran">
				<div class="col-lg-5">
					<p class="text7">Silahkan transfer ke</p>
					<img src="asset/img/Mandiri_logo.png">
				</div>
				<div class="col-lg-7">
					<p class="text8">167 000 110 8314</p>
					<p class="text9">Atas nama: Kumpul.in</p>
					<p class="text9">Cabang: Bandung</p>
					<p class="text9">Bank Mandiri</p>
				</div>
				<p class="text10 text-justify text-center">
					Kamu dapat transfer menggunakan channel apapun (ATM, mobile banking, SMS banking atau teller) selama tujuan transfer sesuai dengan bank yang dipilih.
				</p>
			</div>
			
			
		<!-- <div class="col-lg-5">
			<h1 class="page-header">Pembayaran</h1>
			<p> -->
				<!-- Nominal -->
				<?php  
					// echo $blog->rupiah($harga_murni);
					// echo "<br>";
					// echo $blog->rupiah($administrasi);
				?>
			<!-- </p>

			<p> -->
				<!-- Total  -->
				<?php  
					// echo $blog->rupiah($harga_murni+$administrasi);
				?>
			<!-- </p>

			<p> -->
				
			</p>
		</div>
	</div>
</div>


