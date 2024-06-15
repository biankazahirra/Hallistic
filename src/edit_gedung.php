<?php

// Koneksi ke database
include 'koneksi.php';

//query untuk mengecek id gedung yg bertujuan untuk dapat dipanggil
$id = $_GET["id"];
$query = "SELECT * FROM daftar_gedung WHERE id_gedung='$id'";
$data = mysqli_query($koneksi, $query);

$pesan = "";

if (isset($_POST["submit"])) {
    $id = $_POST["id_gedung"];
    $nama = htmlspecialchars($_POST["nama_gedung"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi_gedung"]);
    $status = htmlspecialchars($_POST["status_gedung"]);
    $kota = htmlspecialchars($_POST["kota"]);
    $harga = htmlspecialchars($_POST["harga"]);


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

        // // Check if file already exists
        // if (file_exists($target_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["gambar_gedung"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["gambar_gedung"]["name"])) . " has been uploaded.";
                $gambar = basename($_FILES["gambar_gedung"]["name"]); // Ambil nama file yang diunggah
                // Update dengan gambar
                $sql = "UPDATE daftar_gedung SET nama_gedung='$nama', deskripsi_gedung='$deskripsi', status_gedung='$status', gambar_gedung='$gambar', kota_gedung= '$kota', harga_sewa = '$harga' WHERE id_gedung='$id'";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // Update tanpa mengubah gambar
        $sql = "UPDATE daftar_gedung SET nama_gedung='$nama', deskripsi_gedung='$deskripsi', status_gedung='$status', kota_gedung= '$kota', harga_sewa = '$harga'  WHERE id_gedung='$id'";
    }

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $pesan = "sukses";
    } else {
        $pesan = "gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gedung</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="../public/asset/admin.ico" type="image/x-icon">
</head>

<style>
    .bgedit {
        background-image: url(../public/asset/back.jpeg);
        background-repeat: round;
        object-fit: cover;
    }
</style>

<body>
<section class="bgedit container h-svh flex justify-center items-center">
    <div class="mx-10 backdrop-blur-sm w-full relative z-10">
        <div class="w-full bg-white bg-opacity-50 px-10 py-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-dla">Edit Gedung</h2>
            <?php while ($d = mysqli_fetch_array($data)): ?>
                <form method="post" class="space-y-4" enctype="multipart/form-data">
                    <input type="hidden" name="id_gedung" value="<?php echo $d['id_gedung'] ?>">
                    <div class="mb-4">
                        <label for="nama_gedung" class="block text-black font-semibold">Nama Gedung</label>
                        <input type="text" id="nama_gedung" name="nama_gedung" value="<?php echo $d['nama_gedung'] ?>"
                            class="mt-1 p-2 w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi_gedung" class="block text-black font-semibold">Deskripsi Gedung</label>
                        <textarea id="deskripsi_gedung" name="deskripsi_gedung"
                            class="mt-1 p-2 w-full min-h-4 border rounded-md"
                            required><?php echo $d['deskripsi_gedung'] ?></textarea>
                    </div>
                    <div class="mb-4 flex space-x-4">
                        <div class="w-1/2">
                            <label for="status_gedung" class="block text-black font-semibold">Status Gedung</label>
                            <select id="status_gedung" name="status_gedung" class="mt-1 p-2 w-full border rounded-md" required>
                                <option value="Available" <?php echo ($d['status_gedung'] == 'Available') ? 'selected' : ''; ?>>Available</option>
                                <option value="Unavailable" <?php echo ($d['status_gedung'] == 'Unavailable') ? 'selected' : ''; ?>>Unavailable</option>
                            </select>
                        </div>
                        <div class="w-1/2">
                            <label for="kota" class="block text-black font-semibold">Kota</label>
                            <select id="kota" name="kota" class="mt-1 p-2 w-full border rounded-md" required>
                                <option value="Jakarta" <?php echo ($d['kota_gedung'] == 'Jakarta') ? 'selected' : ''; ?>>Jakarta</option>
                                <option value="Bandung" <?php echo ($d['kota_gedung'] == 'Bandung') ? 'selected' : ''; ?>>Bandung</option>
                                <option value="Surabaya" <?php echo ($d['kota_gedung'] == 'Surabaya') ? 'selected' : ''; ?>>Surabaya</option>
                                <option value="Bandar Lampung" <?php echo ($d['kota_gedung'] == 'Bandar Lampung') ? 'selected' : ''; ?>>Bandar Lampung</option>
                                <option value="Bali" <?php echo ($d['kota_gedung'] == 'Bali') ? 'selected' : ''; ?>>Bali</option>
                                <option value="Medan" <?php echo ($d['kota_gedung'] == 'Medan') ? 'selected' : ''; ?>>Medan</option>
                                <option value="Riau" <?php echo ($d['kota_gedung'] == 'Riau') ? 'selected' : ''; ?>>Riau</option>
                                <option value="Palembang" <?php echo ($d['kota_gedung'] == 'Palembang') ? 'selected' : ''; ?>>Palembang</option>
                                <option value="Jawa Timur" <?php echo ($d['kota_gedung'] == 'Jawa Timur') ? 'selected' : ''; ?>>Jawa Timur</option>
                                <option value="Papua" <?php echo ($d['kota_gedung'] == 'Papua') ? 'selected' : ''; ?>>Papua</option>
                                <option value="Kalimantan Timur" <?php echo ($d['kota_gedung'] == 'Kalimantan Timur') ? 'selected' : ''; ?>>Kalimantan Timur</option>
                                <option value="Kalimantan Barat" <?php echo ($d['kota_gedung'] == 'Kalimantan Barat') ? 'selected' : ''; ?>>Kalimantan Barat</option>
                                <option value="Sulawesi Utara" <?php echo ($d['kota_gedung'] == 'Sulawesi Utara') ? 'selected' : ''; ?>>Sulawesi Utara</option>
                                <option value="Sulawesi Selatan" <?php echo ($d['kota_gedung'] == 'Sulawesi Selatan') ? 'selected' : ''; ?>>Sulawesi Selatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 flex space-x-4">
                        <div class="w-1/2">
                            <label for="gambar_gedung" class="block text-black font-semibold">Gambar Gedung</label>
                            <img class="w-40 h-30 object-cover flex" src="uploads/<?php echo $d['gambar_gedung']; ?>"
                                alt="<?php echo $d['nama_gedung']; ?>">
                            <input type="file" id="gambar_gedung" name="gambar_gedung" accept="image/*"
                                class="mt-1 p-2 w-full border rounded-md">
                        </div>
                        <div class="w-1/2">
                            <label for="harga" class="block text-black font-semibold">Harga</label>
                            <input type="number" id="harga" name="harga" value="<?php echo $d['harga_sewa'] ?>" class="mt-1 p-2 w-full border rounded-md" required>
                        </div>
                    </div>
                    <button type="submit" name="submit"
                        class="bg-green-800 text-white py-2 px-4 rounded-md hover:bg-green-900">Update</button>
                </form>
            <?php endwhile; ?>
        </div>
    </div>
</section>



    <?php if (isset($pesan) && $pesan === 'sukses'): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data gedung berhasil diupdate!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'building.php';
                }
            });
        </script>
    <?php elseif (isset($pesan) && $pesan === "gagal"): ?>
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Gagal menambahkan gedung.',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'add_building.php';
                }
            });
        </script>
    <?php endif; ?>
</body>



</html>