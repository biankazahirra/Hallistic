<?php
include "koneksi.php";


$query = "SELECT COUNT(*) AS total_user FROM daftar_akun";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Ambil hasil query
    $row = mysqli_fetch_assoc($result);
    $total_user = $row['total_user'];
} else {
    // Jika terjadi kesalahan, atur total user menjadi 0 atau tampilkan pesan kesalahan
    $total_user = 0;
    // Tampilkan pesan error jika diperlukan
    // echo "Error: " . mysqli_error($conn);
}


$query2 = "SELECT COUNT(*) AS total_gedung FROM daftar_gedung";
$result2 = mysqli_query($koneksi, $query2);

// Periksa apakah query berhasil dieksekusi
if ($result2) {
    // Ambil hasil query
    $row2 = mysqli_fetch_assoc($result2);
    $total_gedung = $row2['total_gedung'];
} else {
    // Jika terjadi kesalahan, atur total user menjadi 0 atau tampilkan pesan kesalahan
    $total_gedung = 0;
    // Tampilkan pesan error jika diperlukan
    // echo "Error: " . mysqli_error($conn);
}

$query3 = "SELECT COUNT(*) AS total_pembayaran FROM daftar_pembayaran";
$result3 = mysqli_query($koneksi, $query3);

// Periksa apakah query berhasil dieksekusi
if ($result3) {
    // Ambil hasil query
    $row3 = mysqli_fetch_assoc($result3);
    $total_pembayaran = $row3['total_pembayaran'];
} else {
    // Jika terjadi kesalahan, atur total user menjadi 0 atau tampilkan pesan kesalahan
    $total_pemabayaran = 0;
    // Tampilkan pesan error jika diperlukan
    // echo "Error: " . mysqli_error($conn);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Tailwind -->
    <link href="/tailwind.config.js" rel="stylesheet">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: Karla;
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
</head>

<body class="bg-beige-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-8 flex items-center ">
            <a href="dashboard.php" class="text-black text-3xl font-semibold uppercase hover:text-gray-300">
                <img src="../public/asset/logo.png" alt="">
            </a>
        </div>

        <nav class="text-dla text-base font-semibold pt-3">
            <a href="dashboard.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="members.php" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Members
            </a>
            <a href="building.php" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
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

        </nav>`
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden bg-customBeige">
        <!-- Desktop Header -->
        <!-- <header class="w-full items-center py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-green-700  focus:border-green-500 focus:outline-none">
                    <img src="../public/asset/admin.ico" alt="">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default">
                </button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-14">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header> -->

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="dashboard.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300"></a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>


            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="dashboard.html" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="members.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Members
                </a>
                <a href="building.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-building mr-3"></i>
                    Building
                </a>
                <a href="payment.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-money-check mr-3"></i>
                    Payment
                </a>
                <a href="#" onclick="logout()"
                    class="items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Log-Out
                </a>
            </nav>

            </nav>
        </header>

        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <!-- ChartJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
            integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

        <!-- thismycodde -->
        <!-- Main Content -->
        <div class="mx-16 mt-8 overflow-auto  ">
            <div class="flex items-center justify-between text-dla">
                <h1 class="text-3xl font-semibold">Dashboard</h1>
                <div class="relative">
                    <a href="#" id="adminButton" class="text-2xl font-semibold">Admin</a>
                    <div id="dropdownMenu"
                        class="hidden absolute right-0 mt-2 w-52 bg-white rounded-xl shadow-lg py-2 z-10">
                        <a href="#" onclick="logout()"
                            class="block px-4 py-2 text-lg font-semibold text-dla hover:bg-dla hover:rounded-xl hover:mx-2 hover:text-white">Log-Out</a>
                    </div>
                </div>
            </div>
            <div
                class="bg-white mb-8 mt-10 py-10 rounded-3xl shadow-md flex flex-wrap lg:flex-nowrap items-center px-10 ">
                <!-- card -->
                <div class="flex flex-col lg:flex-row items-center gap-x-60  w-full lg:w-auto">
                    <!-- simpan di div biar gampang ngasih jarak -->
                    <div>
                        <a href="members.php" class="flex items-center">
                            <div class="bg-green-100 rounded-full p-4 hover:bg-green-200">
                                <img src="../public/asset/profil2.svg" alt="">
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-semibold">Member</p>
                                <p class="text-3xl font-bold"><?php echo $total_user; ?></p>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="building.html" class="flex items-center">
                            <div class="bg-green-100 rounded-full p-4 hover:bg-green-200">
                                <img src="../public/asset/building.svg" alt="">
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-semibold">Building</p>
                                <p class="text-3xl font-bold"><?php echo $total_gedung; ?></p>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href=" payment.html" class="flex items-center">
                            <div class="bg-green-100 rounded-full p-4 hover:bg-green-200">
                                <img src="../public/asset/payment.svg" alt="">
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-semibold">Payment</p>
                                <p class="text-3xl font-bold"><?php echo $total_pembayaran ?> </p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold mb-4">Statistics</h2>
                <canvas id="revenueSalesChart" height="60"></canvas>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
        <script>
            const ctx = document.getElementById('revenueSalesChart').getContext('2d');
            const revenueSalesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: 'Revenue',
                        data: [500, 700, 400, 800, 900, 600, 700, 1100, 1200, 800, 900, 1000],
                        borderColor: 'green',
                        fill: true,
                        backgroundColor: 'rgba(0, 119, 255, 0.1)'
                    },
                    {
                        label: 'Sales',
                        data: [300, 500, 600, 700, 800, 500, 600, 900, 1000, 700, 800, 900],
                        borderColor: 'red',
                        fill: true,
                        backgroundColor: 'rgba(255, 205 , 0, 0.1)'
                    }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
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
                        window.location.href = 'logout.php';
                    }
                });
            });
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
                        window.location.href = 'logout.php';
                    }
                });
            }
        </script>




</body>

</html>