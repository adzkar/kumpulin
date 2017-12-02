<!-- <form action="" method="post">
	<input type="text" name="nama" placeholder="Nama Lengkap">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" value="Daftar" name="tombol">
</form> -->
<div class="main_content container-fluid">

<div class="daftar-form rounded col-lg-4">
		<img class="logo" src="asset/img/Logo.png">
		<p class="text">Daftar akun baru sekarang</p>
		<?php  
			if (isset($pesan_sukses)) {
		?>
		<div class="alert alert-success">
		  <strong>Success!</strong> Sukses Membuat Akun
		</div>
		<?php
			}
			if (isset($pesan_error)) {
		?>
		<div class="alert alert-danger">
		  <strong>Gagal!</strong> Gagal Membuat Akun
		</div>
		<?php
			}
		?>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required="">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" id="pass" placeholder="Email" required="">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" id="pass" placeholder="Password" required="">
			</div>
			<div class="text-center">
				<p class="text2">
					Dengan  klik daftar, kamu telah menyetujui 
					<a class="text2-link btn-link btn" style="margin-bottom: 0px">Aturan Penggunaan
					</a> dan 
					<a class="text2-link btn-link btn" style="margin-top: 0px">Kebijakan Privasi
					</a>  dari Kumpulin
				</p>
			</div>
			<button type="submit" class="btn-daftar btn btn-primary" name="tombol">Daftar</button>		
			<div class="text-center">
				<p class="text2">
					Sudah punya akun?
					<button class="text2-link btn btn-link"> Silahkan login</button>

				</p>
			</div>	
		</form>

	</div>

</div>
<!-- akhir main-content -->