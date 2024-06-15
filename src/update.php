<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

 
    // Update data di database
    $sql = "UPDATE daftar_akun SET nama_penyewa='$nama', email_penyewa='$email' WHERE id_penyewa=$id";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>