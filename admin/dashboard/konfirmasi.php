<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<h2 class="text-center">Daftar Pembayaran</h2>
			<hr>
			<!-- tabelnya -->
			<div class="content table-responsive table-full-width">
		    <table class="table table-striped">
		        <thead>
		            <th>No</th>
		        	<th>Atas Nama</th>
		        	<th>Status</th>
		        	<th>Bukti</th>
		        	<th class="text-center">Action</th>
		        </thead>
		        <tbody>
		        	<?php  
		        		$baca = $blog->read($pembelian);
		        		if ($baca->rowCount() > 0) {
		        			$i = 1;
		        			while ($a = $baca->fetch(PDO::FETCH_LAZY)) {
		        	?>
		        		<tr>
			            	<td><?=$i?></td>
			            	<td><?=$a['nama']?></td>
			            	<!-- ceking status -->
			            	<?php  
			            		if ($a['status'] == 0) {
			            			$status = 'Belum <br>Melakukan <br>Pembayaran';
			            		} else {
			            			$status = 'Sudah<br> Melakukan <br>Pembayaran';
			            		}
			            	?>
			            	<td><?=$status?></td>
			            	<?php
			            		$bukti = 'Belum <br> Mengirimkan <br> Bukti Pembayaran';
			            		if ($a['bukti_pembayaran'] != '') {
			            			$bukti = "<a href='{$url}bukti_pembayaran/{$a['bukti_pembayaran']}' target='_blank'>Link</a>";
			            		}
			            	?>
			            	<td><?=$bukti?></td>
			            	<td class="text-center">
			            		<?php  
				            		if ($a['status'] == 0) {
				            	?>
			            			<a href="<?="{$url}admin/dashboard/aktivasi.php?id={$a['id_pembelian']}"?>"  class="btn">Aktivasi</a>
				            	<?php
				            		} else {
				            	?>
				            		<a class="btn" style="cursor: default;">Sudah Di Aktivasi</a>
				            	<?php
				            		}
				            	?>
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