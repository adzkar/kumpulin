<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<h2 class="text-center">Daftar Souvenir</h2>
			<hr>
			<!-- tabelnya -->
			<div class="content table-responsive table-full-width">
		    <table class="table table-striped">
		        <thead>
		            <th>No</th>
		        	<th>Nama Souvenir</th>
		        	<th>Harga</th>
		        	<th>Judul Event</th>
		        	<th class="text-center">Action</th>
		        </thead>
		        <tbody>
		        	<?php  
		        		$baca = $blog->read($souvenir);
		        		if ($baca->rowCount() > 0) {
		        			$i = 1;
		        			while ($a = $baca->fetch(PDO::FETCH_LAZY)) {
		        	?>
		        		<tr>
			            	<td><?=$i?></td>
			            	<td><?=$a['nama_souvenir']?></td>
			            	<td><?=$blog->rupiah($a['harga'])?></td>
			            	<?php  
			            	// baca judul acaranya
			            	$z = array('id_event' => $a['id_event']);
			            	$d = $blog->read($event, $z);
			            	$r = $d->fetch(PDO::FETCH_LAZY);
			            	?>
			            	<td><?=$r['judul_event']?></td>
			            	<td class="text-center">
			            		<a href="<?="{$url}admin/dashboard/?halaman=edit_souvenir&id=$a[id_souvenir]"?>" class="btn">Edit</a>
			            		<a href="<?="{$url}admin/dashboard/?halaman=hapus_souvenir&id=$a[id_souvenir]"?>" class="btn btn-danger">Hapus</a>
			            	</td>
			            </tr>
		        	<?php
		        			$i++;
		        			} // end while
		        		} else {
		        	?>
		        		<tr>
		        			<td colspan="6" class="text-center">Anda belum menambahkan Souvenir</td>
		        		</tr>
		        	<?php
		        		}
		        	?>
		            
		        </tbody>
		    </table>

		</div>
		</div>
	</div>
</div>