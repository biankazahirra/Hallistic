<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>


    <!-- Tailwind -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="../public/asset/admin.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="output.css">

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
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-8 flex items-center ">
            <a href="dashboard.html" class="text-black text-3xl font-semibold uppercase hover:text-gray-300">
                <img src="../public/asset/logo.png" alt="">
            </a>
        </div>
        <nav class="text-black text-base font-semibold pt-3">
            <a href="dashboard.html"
                class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="members.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Members
            </a>
            <a href="building.html"
                class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-building mr-3"></i>
                Building
            </a>
            <a href="payment.html" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-money-check mr-3"></i>
                Payment
            </a>
            <!-- <a href="tabs.html" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Tabbed Content
            </a>
            <a href="calendar.html" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Calendar
            </a> -->
        </nav>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden bg-customBeige">
        <!-- Desktop Header -->
        <header class="w-full items-center py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-green-700 hover:border-green-800 focus:border-green-500 focus:outline-none">
                    <img src="../public/asset/admin.ico">
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-14 z-10">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-slate-600 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="dashboard.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300"></a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="dashboard.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="members.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Members
                </a>
                <a href="building.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Building
                </a>
                <a href="payment.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Payment
                </a>
                <!-- <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tablet-alt mr-3"></i>
                    Tabbed Content
                </a>
                <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-calendar mr-3"></i>
                    Calendar
                </a> -->
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
                <button
                    class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
                </button>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Customer Information</h1>

                <!-- Input Pencarian -->
                <div class="mb-4 relative">
                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-xl">
                        <i class='bx bx-search opacity-50'></i>
                    </span>
                    <input type="text" id="searchInput" placeholder="Search for names..."
                        class="border pl-12 pr-2 py-3 rounded-lg w-full" onkeyup="searchTable()">
                </div>



                <!-- Content goes here! 😁 -->
                <div class="bg-white">
                    <div class="flex overflow-auto h-[490px] ">
                        <table id="customerTable" class="min-w-full table-auto bg-white border-collapse ">
                            <thead class="text-black">
                                <tr class="border-b border-collapse sticky top-0 bg-transparent backdrop-blur-sm">
                                    <th class="text-center px-3 py-5 w-25 font-bold text-lg">Customer ID</th>
                                    <th class="text-center px-3 py-5 font-bold text-lg">Customer Name</th>
                                    <th class="text-center px-3 py-5 font-bold text-lg">Email</th>
                                    <th class="text-center px-3 py-5 font-bold text-lg">Password</th>
                                    <th class="text-center px-3 py-5 font-bold text-lg">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";

                                $sql = "SELECT * FROM daftar_akun";
                                $rs = mysqli_query($koneksi, $sql);

                                // Periksa apakah ada data yang dikembalikan dari query
                                if (mysqli_num_rows($rs) > 0) {
                                    // Jika ada data, tampilkan tabel
                                    while ($row = mysqli_fetch_assoc($rs)):
                                        ?>
                                        <tr class="border-b" data-id="<?php echo $row['id_penyewa']; ?>">
                                            <td class="text-center py-5 px-3 w-25 font-semibold text-sm">
                                                <?php echo $row["id_penyewa"] ?>
                                            </td>
                                            <td class="text-center py-3 px-4 font-semibold text-sm">
                                                <?php echo $row["nama_penyewa"] ?>
                                            </td>
                                            <td class="text-center py-3 px-4 font-semibold text-sm">
                                                <?php echo $row["email_penyewa"] ?>
                                            </td>
                                            <td class="text-center py-3 px-4 font-semibold text-sm">
                                                <div class="flex justify-center w-full">
                                                    <input class="w-8 outline-none" type="password" value="ericprikitiw"
                                                        readonly>
                                                </div>
                                            </td>
                                            <td class="text-lg px-5">
                                                <div class="flex items-center justify-center gap-x-2.5">
                                                    <a href="#" class="edit-btn" data-id="<?php echo $row['id_penyewa']; ?>"><i
                                                            class="fas fa-edit text-blue-600"></i></a>
                                                    <a href="#" class="delete-btn"
                                                        data-id="<?php echo $row['id_penyewa']; ?>"><i
                                                            class="fas fa-trash text-red-600"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    endwhile;
                                } else {
                                    // Jika tidak ada data, tampilkan pesan "Data tidak ditemukan"
                                    ?>
                                    <tr>
                                        <td colspan="5" class="text-center py-5 px-3 font-semibold text-md"
                                            id="noDataMessage">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <!-- Elemen untuk menampilkan pesan jika data tidak ditemukan
                <div id="noDataMessage" class="hidden text-center font-semibold text-md">
                    Data tidak ditemukan.
                </div> -->






                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        let currentEditRow = null;
                                        let originalContent = null;

                                        function enableEditMode(row, id, nama, email, password) {
                                            originalContent = row.innerHTML;

                                            row.innerHTML = `
                <td class="text-center py-5 px-3 w-25 font-semibold text-sm">${id}</td>
                <td class="text-center py-3 px-4 font-semibold text-sm">
                    <input type="text" name="nama" value="${nama}" class="w-full px-2 py-2 border-2 rounded">
                </td>
                <td class="text-center py-3 px-4 font-semibold text-sm">
                    <input type="text" name="email" value="${email}" class="w-full px-2 py-2 border-2 rounded">
                </td>
                <td class="text-center py-3 px-4 font-semibold text-sm">
                    <input type="password" name="password" value="${password}" class="w-full px-2 py-2 border-2 rounded" readonly>
                </td>
                <td class="text-lg px-5">
                    <div class="flex items-center justify-center gap-x-2.5">
                        <button class="update-btn bg-green-500 text-white py-1 px-3 hover:bg-green-600 rounded-md">Update</button>
                        <button class="cancel-btn bg-red-500 text-white py-1 px-3 hover:bg-red-600 rounded-md">Batal</button>
                    </div>
                </td>
            `;

                                            row.querySelector(".update-btn").addEventListener("click", function () {
                                                const newNama = row.querySelector("input[name='nama']").value;
                                                const newEmail = row.querySelector("input[name='email']").value;
                                                const newPassword = row.querySelector("input[name='password']").value;

                                                // AJAX request
                                                const xhr = new XMLHttpRequest();
                                                xhr.open("POST", "update.php", true);
                                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                                xhr.onload = function () {
                                                    if (xhr.status === 200) {
                                                        Swal.fire({
                                                            title: 'Berhasil!',
                                                            text: 'Data berhasil diperbarui',
                                                            icon: 'success',
                                                            confirmButtonText: 'OK'
                                                        }).then(() => {
                                                            location.reload();
                                                        });
                                                    } else {
                                                        Swal.fire({
                                                            title: 'Gagal!',
                                                            text: 'Terjadi kesalahan saat memperbarui data',
                                                            icon: 'error',
                                                            confirmButtonText: 'OK'
                                                        });
                                                    }
                                                };
                                                xhr.send(`id=${id}&nama=${newNama}&email=${newEmail}&password=${newPassword}`);
                                            });

                                            row.querySelector(".cancel-btn").addEventListener("click", function () {
                                                row.innerHTML = originalContent;
                                                attachEditEvents();
                                            });
                                        }

                                        function attachEditEvents() {
                                            const editButtons = document.querySelectorAll(".edit-btn");

                                            editButtons.forEach(button => {
                                                button.addEventListener("click", function (event) {
                                                    event.preventDefault();
                                                    const row = this.closest("tr");
                                                    const id = this.getAttribute("data-id");

                                                    if (currentEditRow && currentEditRow !== row) {
                                                        currentEditRow.innerHTML = originalContent;
                                                        attachEditEvents();
                                                    }

                                                    currentEditRow = row;
                                                    const nama = row.children[1].textContent.trim();
                                                    const email = row.children[2].textContent.trim();
                                                    const password = row.children[3].querySelector("input").value.trim();

                                                    enableEditMode(row, id, nama, email, password);
                                                });
                                            });
                                        }

                                        attachEditEvents();
                                    });
                                </script>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        function attachDeleteEvents() {
                                            const deleteButtons = document.querySelectorAll(".delete-btn");

                                            deleteButtons.forEach(button => {
                                                button.addEventListener("click", function (event) {
                                                    event.preventDefault();
                                                    const id = this.getAttribute("data-id");
                                                    const row = this.closest("tr");

                                                    Swal.fire({
                                                        title: 'Apakah Anda yakin?',
                                                        text: "Tindakan ini tidak bisa dikembalikan lagi!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'OK',
                                                        cancelButtonText: 'Batal'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            //AJAX request untuk ke delete.php
                                                            const xhr = new XMLHttpRequest();
                                                            xhr.open("POST", "delete.php", true);
                                                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                                            xhr.onload = function () {
                                                                if (xhr.status === 200) {
                                                                    Swal.fire({
                                                                        title: 'Berhasil!',
                                                                        text: 'Data berhasil dihapus',
                                                                        icon: 'success',
                                                                        confirmButtonText: 'OK'
                                                                    }).then(() => {
                                                                        row.remove();
                                                                    });
                                                                } else {
                                                                    Swal.fire({
                                                                        title: 'Gagal!',
                                                                        text: 'Terjadi kesalahan saat menghapus data',
                                                                        icon: 'error',
                                                                        confirmButtonText: 'OK'
                                                                    });
                                                                }
                                                            };
                                                            xhr.send(`id=${id}`);
                                                        }
                                                    });
                                                });
                                            });
                                        }

                                        //panggil fungsi attachDeleteEvents setelah DOM kelar
                                        attachDeleteEvents();
                                    });
                                </script>
                    </div>

                    <!-- fungsi search -->
                    <script>
                        function searchTable() {
                            var input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("searchInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("customerTable");
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
                            var visibleRows = document.querySelectorAll("#customerTable tbody tr[style='']");
                            var tableHeight = visibleRows.length * 56; // Ganti dengan tinggi baris sesuai desain Anda

                            document.getElementById("customerTable").style.height = tableHeight + "px";
                        }
                    </script>

                    <!-- AlpineJS -->
                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                    <!-- Font Awesome -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
                        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
                        crossorigin="anonymous"></script>
</body>

</html>