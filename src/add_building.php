<?php
// Mengambil koneksi ke database
include "koneksi.php";
// Inisialisasi pesan default
$pesan = "";

// Memeriksa apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai-nilai dari form
    $id_gedung = $_POST['id_gedung'];
    $nama_gedung = $_POST['nama_gedung'];
    $deskripsi_gedung = $_POST['deskripsi_gedung'];
    $status_gedung = $_POST['status_gedung'];
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    $kota_gedung = $_POST['kota_gedung'];
    $status_gedung = $_POST['status_gedung'];
    $harga_sewa = $_POST['harga'];

    // Pindahkan file yang diunggah ke direktori tujuan
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Query untuk menambah data ke database
        $sql = "INSERT INTO daftar_gedung (id_gedung, nama_gedung, deskripsi_gedung, status_gedung, gambar_gedung,kota_gedung,harga_sewa)
            VALUES ('$id_gedung', '$nama_gedung', '$deskripsi_gedung', '$status_gedung', '$image','$kota_gedung','$harga_sewa')";

        if ($koneksi->query($sql) === TRUE) {
            $pesan = "sukses";
        } else {
            $pesan = "gagal";
        }
    } else {
        $pesan = "gagal";
    }
    $koneksi->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Building</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="add_building.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <!-- Tailwind -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #F5F3E7;
        }

        .cta-btn {
            color: #008000;
        }

        .upgrade-btn {
            background: #008000;
        }

        .upgrade-btn:hover {
            background: #006400;
        }

        .active-nav-link {
            background: #008000;
        }

        .nav-item:hover {
            background: #006400;
        }

        .account-link:hover {
            background: #008000;
        }

        .bg-customBeige {
            background: #F3ECDC;
        }
    </style>
    <link rel="shortcut icon" href="../public/asset/admin.ico" type="image/x-icon">
    <link rel="stylesheet" href="output.css">
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-8 flex items-center ">
            <a href="dashboard.html" class="text-black text-3xl font-semibold uppercase hover:text-gray-300">
                <img src="../public/asset/logo.png" alt="">
            </a>
        </div>
        <nav class="text-black text-base font-semibold pt-3">
            <a href="dashboard.php"
                class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="members.php" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Members
            </a>
            <a href="building.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-building mr-3"></i>
                Building
            </a>
            <a href="payment.php" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-money-check mr-3"></i>
                Payment
            </a>
            <a href="#" id="logoutButton"
                class="flex items-center mt-[15rem] text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Log-Out
            </a>

        </nav>
    </aside>
    <div class="relative w-full flex flex-col h-screen overflow-y-hidden bg-customBeige">
        <!-- Desktop Header -->
        <!-- <header class="w-full items-center py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header> -->

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="dashboard.php"
                    class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="dashboard.php"
                    class="flex items-center text-white opacity-1    hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="members.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Members
                </a>
                <a href="building.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-building mr-3"></i>
                    Building
                </a>
                <a href="payment.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-money-check mr-3"></i>
                    Payment
                </a>
                <a href="#" onclick="logout()"
                    class=" items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Log-Out
                </a>
            </nav>
        </header>

        <div class="w-full border flex flex-col overflow-auto">
            <main class="w-full flex-grow p-6">
                <div class="flex items-center justify-between text-dla mt-3 mx-2">
                    <h3 class="text-2xl font-semibold flex items-center">Building Information</h3>
                    <div class="relative">
                        <a href="#" id="adminButton" class="text-2xl font-semibold ">Admin</a>
                        <div id="dropdownMenu"
                            class="hidden absolute right-0 mt-2 w-52 bg-white rounded-xl shadow-lg py-2 z-10">
                            <a href="#" onclick="logout()"
                                class="block px-4 py-2 text-lg font-semibold text-dla hover:bg-dla hover:rounded-xl hover:mx-2 hover:text-white">Log-Out</a>
                        </div>
                    </div>
                </div>

                <a href="building.php">
                    <div
                        class="inline-flex items-center mt-4 text-xl bg-green-800 py-2 px-2 w-24 rounded-lg font-semibold text-white hover:bg-green-900 ml-3">
                        Kembali
                    </div>
                </a>

                <div class="flex items-center mt-2 text-3xl font-semibold text-dla ml-3">
                    Add A Building
                </div>

                <section class="u-clearfix u-section-1 mt-2" id="sec-12fd">
                    <div class="container mx-auto px-4">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <h4 class="text-lg font-semibold text-gray-800 py-4 px-6">Tambah Data Gedung</h4>
                            <form method="post" enctype="multipart/form-data" class="p-6">
                                <div class="mb-4">
                                    <label for="id_gedung" class="block text-gray-700 font-semibold mb-2">ID</label>
                                    <input type="text" id="id_gedung" name="id_gedung" placeholder="Masukkan ID gedung"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700">
                                </div>
                                <div class="mb-4">
                                    <label for="nama_gedung" class="block text-gray-700 font-semibold mb-2">Nama</label>
                                    <input type="text" id="nama_gedung" name="nama_gedung"
                                        placeholder="Masukkan nama gedung"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="deskripsi_gedung"
                                        class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                                    <textarea id="deskripsi_gedung" name="deskripsi_gedung" rows="4"
                                        placeholder="Masukkan deskripsi gedung"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700"
                                        required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="harga" class="block text-gray-700 font-semibold mb-2">Harga</label>
                                    <input type="number" id="harga" name="harga" placeholder="Masukkan harga gedung"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="kota" class="block text-gray-700 font-semibold mb-2">Kota</label>
                                    <select id="kota" name="kota_gedung"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700"
                                        required>
                                        <option value="" disabled selected>Pilih Kota</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Bandar Lampung">Bandar Lampung</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Medan">Medan</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="status_gedung"
                                        class="block text-gray-700 font-semibold mb-2">Status</label>
                                    <select id="status_gedung" name="status_gedung"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700"
                                        required>
                                        <option value="Available">Available</option>
                                        <option value="Unavailable">Unavailable</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="image" class="block text-gray-700 font-semibold mb-2">Unggah
                                        Foto</label>
                                    <input type="file" id="image" name="image"
                                        class="w-full border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-700"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <button type="submit"
                                        class="bg-green-800 hover:bg-green-900 text-white font-semibold py-2 px-4 rounded-md">
                                        Tambah Gedung
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- Skrip JavaScript untuk Menampilkan SweetAlert2 -->
    <?php if (isset($pesan) && $pesan === "sukses"): ?>
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: 'Gedung berhasil ditambahkan.',
                icon: 'success',
                confirmButtonText: 'OK'
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

    <script>
        //fungsi dropdown admin
        document.getElementById('adminButton').addEventListener('click', function (event) {
            event.preventDefault();
            var dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            var isClickInside = document.getElementById('adminButton').contains(event.target) || document
                .getElementById('dropdownMenu').contains(event.target);
            if (!isClickInside) {
                document.getElementById('dropdownMenu').classList.add('hidden');
            }
        });

        document.getElementById('logoutButton').addEventListener('click', function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin ingin keluar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, keluar!',
                confirmButtonColor: 'red',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Arahkan ke halaman logout atau lakukan aksi logout di sini
                    window.location.href = 'logoutadmin.php';
                }
            });
        });
    </script>

    <!-- fungsi search -->
    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("building_table");
            tr = table.getElementsByTagName("tr");

            var found = false; // Menandakan apakah ada data yang ditemukan

            for (i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        found = true; // Setel ke true jika ada data yang ditemukan
                    }
                }
            }

            // Memperbarui tinggi tabel setelah hasil pencarian
            adjustTableHeight();
        }

        function adjustTableHeight() {
            var visibleRows = document.querySelectorAll("#building_table tbody tr[style='']");
            var tableHeight = visibleRows.length * 56; // Ganti dengan tinggi baris sesuai desain Anda

            document.getElementById("building_table").style.height = tableHeight + "px";
        }
    </script>

    <script>
        function logout() {
            Swal.fire({
                title: 'Apakah Anda yakin ingin keluar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, keluar!',
                confirmButtonColor: 'red',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Arahkan ke halaman logout atau lakukan aksi logout di sini
                    window.location.href = 'logoutadmin.php';
                }
            });
        }
    </script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>