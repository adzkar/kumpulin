<?php  
	$id = @$_GET["id"];
	$data = array('id_pembelian' => $id);
	$baca = $blog->read($pembelian, $data);
	$baca = $baca->fetch(PDO::FETCH_LAZY);
	if (isset($_POST['tombol'])) {
		$gambar = $_FILES["bukti"]["name"];
    	$tmp = $_FILES["bukti"]["tmp_name"];
		// var_dump($_FILES);
   		// move_uploaded_file($tmp, "bukti_pembayaran/{$gambar}");
   		$a = array('bukti_pembayaran' => $gambar);
		$update = $blog->update($pembelian, $a, 'id_pembelian', $id);
		if ($update) {
			$pesan_sukses = "Sukses";
		} else {
			$pesan_error = "Gagal";
		}
	}
?>
<div class="main_content">
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="content col-centered col-lg-5">
					<div class="alert alert-warning">
					  <strong>Tolong !</strong> Bookmark Halaman ini Sebelum anda meninggal halaman
					</div>
					<h2 class="content-header text-center">Konfirmasi Pembayaran</h2>
					<?php  
						if (isset($pesan_sukses)) {
					?>
						<div class="alert alert-success">
						  <strong>Success!</strong> Mengupload Bukti Pembayaran
						</div>
					<?php
						}
					?>
					<?php  
						if (isset($pesan_error)) {
					?>
						<div class="alert alert-danger">
						  <strong>Gagal!</strong> Mengupload Bukti Pembayaran
						</div>
					<?php
						}
					?>
					<p class="text-justify">
						Pembelian atas nama <p class="text-primary text-center"> <?=$baca['nama']?></p> harap lakukan konfirmasi dengan mengupload bukti pembayaran pada form dibawah ini.
					</p>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="sdf">Upload Bukti Pembayaran</label>
							<input type="file" accept=".jpg, .jpeg, .png" placeholder="Upload File" name="bukti" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="submit" value="Upload" name="tombol" class="form-control" style="cursor: pointer">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>