<?php  
	// print_r($_SESSION);
?>
<div class="page">
	<div class="container">
		<div class="col-lg-5 col-centered">
			<div class="content">
			<?php  
				$id_event       = $_POST['id_event'];
				$_SESSION['id_event'] = $id_event;
				$souvenir_input = @$_POST["souvenir"];
				$jumlah_souvenir = @$_POST["jumlah_souvenir"];
				$tiket_input = @$_POST["tiket"];
				$jumlah_tiket = @$_POST["jumlah_tiket"];

				if (isset($souvenir_input)) {
					$_SESSION["souvenir"] = @$souvenir_input;
					$_SESSION["jumlah_souvenir"] = @$jumlah_souvenir;
				}

				if (isset($tiket_input)) {
					$_SESSION["tiket"] = @$tiket_input;
					$_SESSION["jumlah_tiket"] = @$jumlah_tiket;
				}
				

				// echo $souvenir_input." ".$jumlah_souvenir." ".$tiket_input." ".$jumlah_tiket;
				if (!isset($_SESSION["id_user"])) {
					echo "Login Terlebih Dahulu ";
					echo "<a href='{$url}?halaman=login'>Klik Disini</a>";
				} else {
					include 'view/form_pemesanan.php';
				}
			?>	
			</div>
		</div>
	</div>
</div>