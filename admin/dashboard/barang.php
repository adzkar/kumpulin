<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<h2 class="text-center">Daftar Souvenir</h2>
			<hr>
			<!-- tabelnya -->
			<div class="content table-responsive table-full-width">
		    <table class="table table-striped">
		        <thead>
		            <th>ID</th>
		        	<th>Judul Event</th>
		        	<th>Penyelenggara</th>
		        	<th>Dana ( Goals )</th>
		        	<th>Target</th>
		        	<th class="text-center">Action</th>
		        </thead>
		        <tbody>
		        	<?php  
		        		$baca = $blog->read($event);
		        		if ($baca->rowCount() > 0) {
		        			$i = 1;
		        			while ($a = $baca->fetch(PDO::FETCH_LAZY)) {
		        	?>
		        		<tr>
			            	<td><?=$i?></td>
			            	<td><?=$a['judul_event']?></td>
			            	<td><?=$a['penyelenggara']?></td>
			            	<td><?=$blog->rupiah($a['dana'])?></td>
			            	<td><?=$a['target']." Bulan"?></td>
			            	<td class="text-center">
			            		<a href="<?="{$url}admin/dashboard/?halaman=tiket&id=$a[id_event]"?>" class="btn btn-primary">Tambah Tiket</a>
			            		<a href="<?="{$url}admin/dashboard/?halaman=tambahsouvenir&id=$a[id_event]"?>" class="btn btn-info">Tambah Souvenir</a>
			            	</td>
			            </tr>
		        	<?php
		        			$i++;
		        			} // end while
		        		} else {
		        	?>
		        		<tr>
		        			<td colspan="6" class="text-center">Anda belum menambahkan Event</td>
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