<?php  
    if (isset($_POST["tombol"])) {
        $id_souvenir = $_POST["id_souvenir"];
        $nama = $_POST["nama_souvenir"];
        $harga = $_POST["harga"];
        $id_event = $_POST["id_event"];
        $deskripsi = $_POST["deskripsi"];
        // untuk gambar
        $gambar = $_FILES["gambar"]["name"];
        $tmp = $_FILES["gambar"]["tmp_name"];
        if ($gambar != '') {
            move_uploaded_file($tmp, "../../uploaded_img/{$gambar}");
            $data = array(
                'id_event' => $id_event,
                'harga' => $harga,
                'deskripsi' => $deskripsi,
                'nama_souvenir' => $nama,
                'foto' => $gambar
                );
        } else {
            $data = array(
                'id_event' => $id_event,
                'harga' => $harga,
                'deskripsi' => $deskripsi,
                'nama_souvenir' => $nama
                );
        }
        $perbarui = $blog->update($souvenir, $data, "id_souvenir", $id_souvenir);
        if ($perbarui) {
            $pesan_sukses = "Sukses.. Memperbarui Data";
        }
    }
    include '../../view/admin/updateSouvenir.php';
?>