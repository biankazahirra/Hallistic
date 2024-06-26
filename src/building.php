<?php
include "koneksi.php";

$query = "SELECT * FROM daftar_gedung";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building</title>

    <!-- Tailwind -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
        <header x-data="{ isOpen: false }" class="w-full bg-slate-500 py-5 px-6 sm:hidden">
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
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
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

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col mt-2 ">
            <main class="w-full flex-grow p-6">
                <div class="flex items-center justify-between text-dla ">
                    <h1 class="text-3xl font-semibold mb-5 flex items-center">Building</h1>
                    <div class="relative">
                        <a href="#" id="adminButton" class="text-2xl font-semibold ">Admin</a>
                        <div id="dropdownMenu"
                            class="hidden absolute right-0 mt-2 w-52 bg-white rounded-xl shadow-lg py-2 z-10">
                            <a href="#" onclick="logout()"
                                class="block px-4 py-2 text-lg font-semibold text-dla hover:bg-dla hover:rounded-xl hover:mx-2 hover:text-white">Log-Out</a>
                        </div>
                    </div>
                </div>

                <!-- Input Pencarian -->
                <div class="my-4 relative">
                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-xl">
                        <i class='bx bx-search opacity-50'></i>
                    </span>
                    <input type="text" id="searchInput" placeholder="Search for names..."
                        class="border pl-12 pr-2 py-3 rounded-lg w-full" onkeyup="searchTable()">
                </div>

                <!-- add building -->
                <div class="flex my-10 items-center">
                    <a href="add_building.php">
                        <div class="bg-green-700 hover:bg-green-900 px-2 w-40 py-2 rounded-md flex items-center justify-center text-white">
                            <i class='bx bx-plus mr-2 text-lg'></i>
                            Add A Building
                        </div>
                    </a>
                </div>


                <!-- view building -->
                <div class="w-full mt-3 overflow-auto">
                    <div class="max-h-[200rem] mx-2">
                        <table class="w-full bg-white " id="building_table ">
                            <thead class="bg-white text-black w-full ">
                                <tr class="border-b border-collapse sticky top-0 bg-transparent backdrop-blur-sm  ">
                                    <th class="text-center px-3 py-2 w-25 font-bold text-lg">Building ID
                                    </th>
                                    <th class="text-center px-3 py-2 font-bold text-lg">Building Name</th>
                                    <th class="text-center px-3 py-3 font-bold text-lg">Description</th>
                                    <th class="text-center px-3 py-3 font-bold text-lg">Harga</th> <!-- New column -->
                                    <th class="text-center px-3 py-3 font-bold text-lg">Kota</th>
                                    <th class="text-center px-3 py-3 font-bold text-lg">Status</th>
                                    <th class="text-center px-3 py-3 font-bold text-lg">Image</th>
                                    <th class="text-center px-3 py-3 font-bold text-lg">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr class="border-b  ">
                                        <td
                                            class="break-words  text-center py-3 w-1 max-w-2 uppercase font-semibold text-sm">
                                            <?php echo $row['id_gedung'] ?>
                                        </td>
                                        <td class="text-center py-3 max-w-1.5 uppercase font-semibold text-sm">
                                            <?php echo $row['nama_gedung'] ?>
                                        </td>
                                        <td class="break-words max-w-2.5 text-center py-3 uppercase font-semibold text-sm">
                                            <?php echo $row['deskripsi_gedung'] ?>
                                        </td>
                                        <td class="text-center py-3 uppercase font-semibold text-sm">
                                            <?php echo $row['harga_sewa'] ?> <!-- Value for Harga column -->
                                        </td>
                                        <td class="text-center py-3 uppercase font-semibold text-sm">
                                            <?php echo $row['kota_gedung'] ?> <!-- Value for Kota column -->
                                        </td>
                                        <td class="text-center py-3 uppercase font-semibold text-sm">
                                            <?php echo $row['status_gedung'] ?>
                                        </td>
                                        </td>
                                        <td class="flex items-center justify-center mx-auto my-7">
                                            <img class="w-44 h-44" src="uploads/<?php echo $row['gambar_gedung']; ?>">
                                        </td>
                                        <td class="text-lg py-14 px-4 w-2">
                                            <div class="flex items-center justify-center gap-x-2.5">
                                                <a href="edit_gedung.php?id=<?= $row['id_gedung'] ?> "><i
                                                        class="fas fa-edit text-blue-600"></i></a>
                                                <a href="javascript:void(0)"
                                                    onclick="confirmDelete(<?= $row['id_gedung'] ?>)">
                                                    <i class="fas fa-trash text-red-600"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script>
        // fungsi delete confirm
        function confirmDelete(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data sudah terhapus!.",
                        icon: "success"
                    });
                    setTimeout(function () {
                        window.location.href = 'hapusgedung.php?id=' + id;
                    }, 3000);
                }
            });
        }
    </script>

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