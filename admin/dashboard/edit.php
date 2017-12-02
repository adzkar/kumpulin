<?php  
	// baca data
	$id = @$_GET["id"];
	$data = array('id_event' => $id);
	$baca = $blog->read($event, $data);
	$r = $baca->fetch(PDO::FETCH_LAZY);

    if (isset($_POST["tombol"])) {
    	$id = $_POST["id"];
	    $judul = $_POST["judulEvent"];
	    $dana = $_POST["dana"];
	    $target = $_POST["target"];
	    $deskripsi = $_POST["deskripsi"];
	    $penyelenggara = $_POST["penyelenggara"];
	    // untuk upload gambar
	    $gambar = $_FILES["gambar"]["name"];
	    $tmp = $_FILES["gambar"]["tmp_name"];
	    if (isset($gambar)) {
	    	# code...
		    move_uploaded_file($tmp, "../../uploaded_img/{$gambar}");
		    $data = array(
		    	'judul_event' => $judul,
		    	'dana' => $dana,
		    	'target' => $target,
		    	'deskripsi' => $deskripsi,
		        'penyelenggara' => $penyelenggara,
		        'gambar' => $gambar
		    	);
	    } else {
	    	$data = array(
		    	'judul_event' => $judul,
		    	'dana' => $dana,
		    	'target' => $target,
		    	'deskripsi' => $deskripsi,
		        'penyelenggara' => $penyelenggara,
		    	);
	    }
	    // echo "<pre>";
	    // var_dump($_FILES);
	    // echo "</pre>";
	    $input_data = $blog->update($event, $data, "id_event", $id);
	    if ($input_data) {
	        $pesan_sukses = "Sukses Menambahkan Data";
	        // include '../../view/admin/editEvent.php';
	    }
  	}
	include '../../view/admin/editEvent.php';
?>