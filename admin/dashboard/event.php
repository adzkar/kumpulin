<?php
    include '../../config/web.php';  
  if (isset($_POST["tombol"])) {
    $judul = $_POST["judulEvent"];
    $dana = $_POST["dana"];
    $target = $_POST["target"];
    $deskripsi = $_POST["deskripsi"];
    $penyelenggara = $_POST["penyelenggara"];
    $link = $_POST["link"];
    $slogan = $_POST["slogan"];
    // untuk upload gambar
    $gambar = $_FILES["gambar"]["name"];
    $tmp = $_FILES["gambar"]["tmp_name"];
    move_uploaded_file($tmp, "../../uploaded_img/{$gambar}");
    $data = array(
    	'judul_event' => $judul,
    	'dana' => $dana,
    	'target' => $target,
    	'deskripsi' => $deskripsi,
        'penyelenggara' => $penyelenggara,
        'gambar' => $gambar,
        'link' => $link,
        'slogan' => $slogan
    	);
    
    $input_data = $blog->create($event, $data);
    if ($input_data) {
        $pesan_sukses = "Sukses Menambahkan Data";
    } else {
        echo "Gagal Menambahkan Data";
    }
  }
  include '../../view/admin/addEvent.php';
?>