<?php  
	include '../../config/master.php';
	include '../../config/web.php';

	$id = $_GET['id'];
	$d = array('status' => 1);
	$update = $blog->update($pembelian, $d, 'id_pembelian', $id);
	// if ($update) {
	// 	echo "Sukses";
	// }
	header("location: {$url}admin/dashboard/?halaman=konfirmasi");
?>