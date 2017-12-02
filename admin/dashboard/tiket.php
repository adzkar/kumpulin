<?php  
  if (isset($_POST["tombol"])) {
    $namatiket = $_POST["namatiket"];
    $harga = $_POST["harga"];
    $id = $_POST["id_event"];
    $data = array(
    	'nama_tiket' => $namatiket,
    	'harga' => $harga,
        'id_event' => $id
    	);
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    $input_data = $blog->create($tiket, $data);
    if ($input_data) {
        $pesan_sukses = "Sukses Menambahkan Data";
        include '../../view/admin/addTiket.php';
    }
  } else {
    include '../../view/admin/addTiket.php';
  }
?>