<?php
session_start(); // Mulai sesi
include 'koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    // Siapkan query untuk menyimpan data
    $sql = "INSERT INTO daftar_pesan (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";

    // Jalankan query dan periksa apakah berhasil
    if ($koneksi->query($sql) === TRUE) {
        header("Location: contact1.html");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
