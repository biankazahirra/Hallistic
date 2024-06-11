<?php
// Mengambil koneksi ke database
include "koneksi.php";
// Inisialisasi pesan default
$pesan = "";

// Memeriksa apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai-nilai dari form
    $id_gedung = $_POST['id_gedung'];
    $nama_gedung = $_POST['nama_gedung'];
    $deskripsi_gedung = $_POST['deskripsi_gedung'];
    $status_gedung = $_POST['status_gedung'];
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);


    // Pindahkan file yang diunggah ke direktori tujuan
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Query untuk menambah data ke database
        $sql = "INSERT INTO daftar_gedung (id_gedung, nama_gedung, deskripsi_gedung, status_gedung, gambar_gedung)
            VALUES ('$id_gedung', '$nama_gedung', '$deskripsi_gedung', '$status_gedung', '$image')";

        if ($koneksi->query($sql) === TRUE) {
            $pesan = "sukses";
        } else {
            $pesan = "gagal";
        }
    } else {
        $pesan = "gagal";
    }
    $koneksi->close();
}
?>