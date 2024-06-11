<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["verifikasi"]) && isset($_POST["id_pembayaran"])) {
        $id_pembayaran = $_POST["id_pembayaran"];
        $sql = "UPDATE daftar_pembayaran SET status_pembayaran='Terverifikasi' WHERE id_pembayaran='$id_pembayaran'";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            echo "<script>alert('Gagal verifikasi pembayaran');</script>";
        }
    } else {
        echo "<script>alert('Aksi tidak valid. Data tidak lengkap');</script>";
    }
} else {
    echo "<script>alert('Aksi tidak valid. Metode bukan POST');</script>";
}
?>