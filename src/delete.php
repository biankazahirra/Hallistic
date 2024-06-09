<?php
include "koneksi.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM daftar_akun WHERE id_penyewa = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
}
?>