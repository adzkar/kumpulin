<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content rounded col-centered col-lg-5">
					<h2 class="text-center content-header">Pilih Paket</h2>
					<!-- <form action="<?=$url."?halaman=proses"?>" method="post">	
					<?php  
						// $id = $_GET["id"];
						
						// $data = array(
						// 			'id_event' => $id
						// 		);
						// $read = $blog->read($souvenir, $data);
					?>
						<select name="souvenir" id="">
							<option value="">--PILIH SOUVENIR--</option>
					<?php
						// while ($r = $read->fetch(PDO::FETCH_LAZY)) {
						// 	echo "<option value='{$r['id_souvenir']}'>".$r['nama_souvenir']."</option>";
						// }
					?>
						</select>
						<input type="text" name="jumlah_souvenir" placeholder="Jumlah Souvenir"><br>
						<select name="tiket" id="">
							<option value="">--PILIH TIKET--</option>
					<?php
						// $a = array('id_event' => $id);
						// $read2 = $blog->read($tiket, $a);
						// while ($a = $read2->fetch(PDO::FETCH_LAZY)) {
						// 	echo "<option value='{$a['id_tiket']}'>".$a['nama_tiket']."</option>";
						// }
					?>
						</select>
						<input type="text" name="jumlah_tiket" placeholder="Jumlah Tiket"><br>
						<button type="submit">Lanjut</button>
					</form> -->
					<?php  
						// var_dump($_SESSION);
					?>
					<form action="<?=$url."?halaman=proses"?>" method="post">
						<?php  
						$id = $_GET["id"];
						
						$data = array(
									'id_event' => $id
								);
						$read = $blog->read($souvenir, $data);
					?>
					  <div class="form-group">
					  	<input type="hidden" name="id_event" value="<?=$id?>">
					    <label for="exampleFormControlSelect1">Pilih Souvenir</label>
					    <select class="form-control" name="souvenir" id="exampleFormControlSelect1">
					      <option value="">-- PILIH SOUVENIR --</option>
					      <?php
								while ($r = $read->fetch(PDO::FETCH_LAZY)) {
									echo "<option value='{$r['id_souvenir']}'>".$r['nama_souvenir']."</option>";
								}
							?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Jumlah Souvenir</label>
						<input type="text" name="jumlah_souvenir" placeholder="Jumlah Souvenir" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Tiket</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="tiket">
					      <option value="">-- PILIH TIKET --</option>
					      <?php
							$a = array('id_event' => $id);
							$read2 = $blog->read($tiket, $a);
							while ($a = $read2->fetch(PDO::FETCH_LAZY)) {
								echo "<option value='{$a['id_tiket']}'>".$a['nama_tiket']."</option>";
							}
						?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Jumlah Souvenir</label>
						<input type="text" name="jumlah_tiket" placeholder="Jumlah Tiket" class="form-control">
					  </div>
					  <div class="form-group">
					  	<button type="submit" class="btn-lanjut btn btn-primary">Lanjut</button>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>