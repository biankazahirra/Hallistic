<?php

include "koneksi.php";

$id = $_GET["id_gedung"];
$sql = "DELETE FROM daftar_gedung WHERE id_gedung='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("Location: building.php");
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}

?>