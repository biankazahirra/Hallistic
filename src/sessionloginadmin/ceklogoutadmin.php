<?php
//Cek admin sudah login
session_start();
if (isset($_SESSION['email'])) {
    //kalo sudah login,maka sistem akan arahkan ke halaman utama
    header("Location: dashboard.php");
    exit();
}
?>