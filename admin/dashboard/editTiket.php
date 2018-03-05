<?php  
  if (isset($_POST["tombol"])) {
    $namatiket = $_POST["namatiket"];
    $harga = $_POST["harga"];
    $id = $_POST["id_tiket"];
    $id_event = $_POST["id_event"];
    $data = array(
    	'nama_tiket' => $namatiket,
    	'harga' => $harga,
        'id_event' => $id_event
    	);
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    $input_data = $blog->update($tiket, $data, "id_tiket", $id);
    if ($input_data) {
        $pesan_sukses = "Sukses Menambahkan Data";
        include '../../view/admin/updateTiket.php';
    }
  } else {
    include '../../view/admin/updateTiket.php';
  }
?>