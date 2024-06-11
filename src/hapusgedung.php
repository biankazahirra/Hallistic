<?php

include "koneksi.php";

$pesan = "";
$id = $_GET["id"];
$sql = "DELETE FROM daftar_gedung WHERE id_gedung='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    $pesan = 'sukses';
    header('Location: building.php');

} else {
    $pesan = 'gagal';
    header('Location: building.php');
}

?>