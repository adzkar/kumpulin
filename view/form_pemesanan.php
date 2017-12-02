
<h2 class="content-header text-center">Alamat Pengiriman</h2>
<form action="<?=$url."?halaman=pembayaran"?>" method="post">
	<div class="form-group">
		<label for="exampleFormControlInput1">Nama Penerima</label>
		<input type="text" name="nama" class="form-control" required="">
	</div>
	<div class="form-group">
		<label for="adfs">Email : </label>
		<input type="email" name="email" class="form-control" required="">
	</div>
	<div class="form-group">
		<label for="asdf">No. Telp</label>
		<input type="text" name="notelp" class="form-control" required="">
	</div>
	<div class="form-group">
		<label for="sdfa">Alamat Pengiriman</label>
		<input type="text" name="alamat" class="form-control" required="">
	</div>
	<div class="form-group">
		<label for="sdfs">Kota</label>
		<input type="text" class="form-control" name="kota" required="">
	</div>
	<div class="form-group">
		<label for="ksjlf">Kode Pos</label>
		<input type="text" name="kodepos" class="form-control" required="">
	</div>
	<div class="form-group">
		<label for="Komentar ( Opsional )">Komentar ( Opsional )</label>
		<textarea name="komentar" class="form-control" id="" cols="30" rows="10"></textarea>
		<!-- <textarea type="text" name="komentar"></textarea> -->
	</div>
	<div class="form-group">
		<label for="pasdf">Pembayaran</label>
		<select name="bank" class="form-control">
			<option value="mandiri">ATM Mandiri</option>
			<option value="bni">ATM BNI</option>
			<option value="COD">COD ( Khusus Telkom University )</option>
		</select>
	</div>
	<div class="form-group">
		<label for=""></label>
		<input type="checkbox" class="form-check-input" name="setuju" required="">Saya Mempercayai / Mengenal Event ini dan setuju dengan syarat dan ketentuan di kumpul.in <br>
	</div>
	<input type="submit" value="Lanjut" name="tombol" class="btn btn-primary">
</form>