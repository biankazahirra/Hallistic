<?php
session_start();
include "koneksi.php";
$pesan= "";

if (isset($_POST["submit"])) {
    $id = $_POST["id_gedung"];
    $nama = htmlspecialchars($_POST["nama_gedung"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi_gedung"]);
    $status = htmlspecialchars($_POST["status_gedung"]);

    // Cek apakah ada file gambar yang diunggah
    if ($_FILES["gambar_gedung"]["name"]) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar_gedung"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["gambar_gedung"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["gambar_gedung"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["gambar_gedung"]["name"])). " has been uploaded.";
                $gambar = basename($_FILES["gambar_gedung"]["name"]); // Ambil nama file yang diunggah
                // Update dengan gambar
                $sql = "UPDATE daftar_gedung SET nama_gedung='$nama', deskripsi_gedung='$deskripsi', status_gedung='$status', gambar_gedung='$gambar' WHERE id_gedung='$id'";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // Update tanpa mengubah gambar
        $sql = "UPDATE daftar_gedung SET nama_gedung='$nama', deskripsi_gedung='$deskripsi', status_gedung='$status' WHERE id_gedung='$id'";
    }

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $pesan="sukses";

        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data gedung berhasil diupdate!'
            }).then(function() {
                window.location = 'daftar_gedung.php';
            });
        </script>";
    } else {
        $pesan="gagal";
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Data gedung gagal diupdate.'
            });
        </script>";
    }
}
?>
