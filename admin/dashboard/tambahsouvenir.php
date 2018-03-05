<?php  
  if (isset($_POST["tombol"])) {
    $nama_souvenir = $_POST["nama_souvenir"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $id_event = $_POST["id_event"];
    // untuk upload gambar
    $gambar = $_FILES["gambar"]["name"];
    $tmp = $_FILES["gambar"]["tmp_name"];
    move_uploaded_file($tmp, "../../uploaded_img/{$gambar}");
    $data = array(
    	'nama_souvenir' => $nama_souvenir,
    	'harga' => $harga,
    	'deskripsi' => $deskripsi,
        'foto' => $gambar,
        'id_event' => $id_event
    	);
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    $input_data = $blog->create($souvenir, $data);
    if ($input_data) {
        $pesan_sukses = "Sukses Menambahkan Data";
        include '../../view/admin/addSouvenir.php';
    }
  } else {
    include '../../view/admin/addSouvenir.php';
  }
?>