<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>


    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../public/asset/admin.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
        <div class="p-7 flex items-center ">
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
                <i class="fas fa-sticky-note mr-3"></i>
                Members
            </a>
            <a href="building.html"
                class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Building
            </a>
            <a href="payment.html" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
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
        </header>

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
                <div class="mb-4">
                    <span class="absolute left-8 top-40 items-center text-xl">
                        <i class='bx bx-search opacity-50'></i>
                    </span>
                    <input type="text" id="searchInput" placeholder="Search for names.."
                        class="border px-8 py-3 rounded-lg w-full" onkeyup="searchTable()">
                </div>


                <!-- Content goes here! 😁 -->

                <div class="bg-white overflow-auto">
                    <table id="customerTable" class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-center py-3 px-3 w-25 uppercase font-semibold text-sm">Customer ID</th>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Customer Name</th>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Password</th>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "koneksi.php";

                            $sql = "SELECT * FROM daftar_akun";
                            $rs = mysqli_query($koneksi, $sql);
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($rs)):
                                ?>
                                <tr class="">
                                    <td class="text-center py-3 px-3 w-25 uppercase font-semibold text-sm">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td class="text-center py-3 px-4 uppercase font-semibold text-sm">
                                        <?php echo $row["nama_penyewa"] ?>
                                    </td>
                                    <td class="text-center py-3 px-4 uppercase font-semibold text-sm">
                                        <?php echo $row["email_penyewa"] ?>
                                    </td>
                                    <td class="text-center py-3 px-4 uppercase font-semibold text-sm">
                                        <div class="flex justify-center w-full">
                                            <input class="w-8 outline-none" type="password" value="halodunia" readonly>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>

    </div>


    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("customerTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    }
                }
            }
        }
    </script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>