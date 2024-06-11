<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building</title>
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

        <div class="w-full border flex flex-col">
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

                <div class="flex items-center mt-14 text-3xl font-semibold text-dla ml-3">
                    Add A Building
                </div>



                <section class="u-clearfix u-section-1" id="sec-12fd">
                    <div class="u-clearfix u-sheet u-sheet-1 overflow-auto">
                        <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h4 class="u-text u-text-default u-text-1">Tambah Data Gedung<span
                                        style="font-weight: 700;"></span>
                                </h4>
                                <div class="u-form u-form-1">
                                    <form action="https://forms.nicepagesrv.com/v2/form/process"
                                        class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email"
                                        name="form" style="padding: 10px;">
                                        <div class="u-form-group u-form-name">
                                            <label for="name-54c6" class="u-label u-label-1">ID</label>
                                            <input type="text" placeholder="Masukkan ID gedung" id="name-54c6"
                                                name="id_gedung"
                                                class="u-border-2 u-border-black u-grey-5 u-input u-input-rectangle u-radius u-input-1"
                                                required="">
                                        </div>
                                        <div class="u-form-group">
                                            <label for="email-54c6" class="u-label u-label-2">Nama</label>
                                            <input type="text" placeholder="Masukkan nama gedung" id="email-54c6"
                                                name="nama_gedung"
                                                class="u-border-2 u-border-black u-grey-5 u-input u-input-rectangle u-radius u-input-2"
                                                required="required">
                                        </div>
                                        <div class="u-form-group u-form-message">
                                            <label for="message-54c6" class="u-label u-label-3">Deskripsi</label>
                                            <textarea placeholder="Masukkan deskripsi gedung" rows="4" cols="50"
                                                id="message-54c6" name="deskripsi_gedung"
                                                class="u-border-2 u-border-black u-grey-5 u-input u-input-rectangle u-radius u-input-3"
                                                required=""></textarea>
                                        </div>
                                        <div
                                            class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-4">
                                            <label for="select-bf12" class="u-label u-label-4">Status</label>
                                            <div class="u-form-select-wrapper">
                                                <select id="select-bf12" name="status_gedung"
                                                    class="u-border-2 u-border-black u-grey-5 u-input u-input-rectangle u-radius u-input-4"
                                                    required="required">
                                                    <option value="Available" data-calc="Available">Available</option>
                                                    <option value="Unavailable" data-calc="Unavailable">Unavailable
                                                    </option>
                                                </select>
                                                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="16px" height="16px" viewBox="0 0 16 16"
                                                    style="fill:currentColor;" xml:space="preserve">
                                                    <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-4">
                                            <label for="url-b7cb" class="u-label u-label-5">Unggah Foto</label>
                                            <input type="file" id="upload-image" name="image"
                                                class="u-border-2 u-border-grey-25 u-input u-input-rectangle u-radius u-input-4"
                                                required="required">
                                        </div>
                                        <div class="u-align-left u-form-group u-form-submit">
                                            <a href="#"
                                                class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius u-btn-1">Tambah
                                                Gedung</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message
                                            has been sent. </div>
                                        <div class="u-form-send-error u-form-send-message"> Unable to send your message.
                                            Please fix errors then try again. </div>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices"
                                            value="ef042633-b5e1-2143-32b9-b984b939a6f4">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

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
                    window.location.href = 'logout.php';
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