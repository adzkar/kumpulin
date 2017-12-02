<?php  
	$halaman = @$_GET["halaman"];
	if ($halaman == 'logout') {
		session_destroy();
		echo "<script type='text/javascript'>";
		echo "window.location='{$url}admin'";
		echo "</script>";
	} else if ($halaman == 'event') {
		include 'event.php';
	} else if ($halaman == 'home') {
		include 'home.php';
	} else if ($halaman == 'edit') {
		include 'edit.php';
	} else if ($halaman == 'hapus') {
		$id = $_GET["id"];
		$blog->delete($event, "id_event", $id);
		$blog->delete($tiket, "id_event", $id);
		$blog->delete($souvenir, "id_event", $id);
		include 'home.php';
	} else if ($halaman == 'barang') {
		include 'barang.php';
	} else if ($halaman == 'tiket') {
		include 'tiket.php';
	} else if ($halaman == 'daftartiket') {
		include 'daftartiket.php';
	} else if ($halaman == 'hapus_tiket') {
		$id = $_GET["id"];
		$blog->delete($tiket, "id_tiket", $id);	
		include 'daftartiket.php';
	} else if ($halaman == 'edit_tiket') {
		include 'editTiket.php';
	} else if ($halaman == 'daftarsouvenir') {
		include 'daftarsouvenir.php';
	} else if ($halaman == 'tambahsouvenir') {
		include 'tambahsouvenir.php';
	} else if ($halaman == 'hapus_souvenir') {
		$id = $_GET["id"];
		$blog->delete($souvenir, "id_souvenir", $id);
		include 'daftarsouvenir.php';
	} else if ($halaman == 'edit_souvenir') {
		include 'edit_souvenir.php';
	}
?>