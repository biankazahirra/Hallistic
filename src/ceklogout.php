<?php
//Cek pengguna sudah login
session_start();
if (isset($_SESSION['email_penyewa'])) {
    //kalo sudah login,maka sistem akan arahkan ke halaman utama
    header("Location: home1.php");
    exit();
}
?>