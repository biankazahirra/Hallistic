<?php
session_start(); // Mulai sesi
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Persiapkan statement SQL untuk menghindari SQL injection
    $stmt = $koneksi->prepare("SELECT email_penyewa, password_penyewa, nama_penyewa FROM daftar_akun WHERE email_penyewa = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Jika email ditemukan
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($stored_email, $stored_password, $stored_nama);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $stored_password)) {
            $_SESSION['email_penyewa'] = $stored_email;
            $_SESSION['nama_penyewa'] = $stored_nama; // Simpan nama pengguna ke dalam sesi
            header("Location: home1.php"); // Redirect ke halaman beranda
            exit();
        }
    }

    // Redirect ke halaman login dengan parameter error
    header("Location: login1.html?error=1");
    exit();
} else {
    // Jika bukan metode POST, redirect ke halaman login
    header("Location: login.html");
    exit();
}
?>
