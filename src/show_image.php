<?php
include 'koneksi.php';

if (isset($_GET['id_gedung'])) {
    $id_gedung = $_GET['id_gedung'];
    $query = "SELECT gambar_gedung FROM daftar_gedung WHERE id_gedung = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id_gedung);
    $stmt->execute();
    $stmt->bind_result($gambar_gedung);
    $stmt->fetch();
    $stmt->close();
    $koneksi->close();

    // Atur tipe konten sebagai gambar JPEG
    header("Content-Type: image/jpeg");
    
    // Outputkan gambar
    echo $gambar_gedung;
} else {
    echo "No image ID provided.";
}
?>
