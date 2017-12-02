<?php  
	// include 'config/master.php';
	// include 'config/web.php';
	$baca = $blog->read_max("id_pembelian",$pembelian);
	$baca = $baca->fetch(PDO::FETCH_LAZY);
?>
<pre>
	<?php 
		print_r($baca);
		$max =  $baca['max(id_pembelian)'];
		echo $max;
	?>
</pre>
<?php  
	if (!isset($max)) {
		echo "Belum ada";
	}
?>