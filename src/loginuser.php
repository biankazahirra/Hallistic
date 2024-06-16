<?php
include "ceklogout.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="../public/Logo Hallistic/logo.png" type="image/x-icon">
    <style>
        .bg-green {
            background-color: #344E41;
            /* Ganti dengan kode warna hijau yang diinginkan */
        }

        .bg-greent {
            background-color: #073937;
            /* Ganti dengan kode warna hijau yang diinginkan */
        }

        .abrilfatface {
            font-family: 'Abril Fatface', cursive;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
        }

        .background-image {
            background-image: url('../public/asset/Rectangle 11.png');
            background-size: auto;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="2xl:container h-screen m-auto flex relative">
        <div class="relative h-full w-6/12 background-image flex items-center justify-center">
            <div class="text-center">
                <p class="font-medium text-greent text-4xl text-dla abrilfatface">Selamat Datang!</p>
                <div class="space-y-4 mt-10">
                    <button
                        class="px-110 py-3 rounded-xl bg-green transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800 poppins"
                        onclick="redirectToLoginPage()">
                        <span class="font-semibold text-white text-lg">LOG IN</span>
                    </button>
                    <button
                        class="px-100 py-3 rounded-xl bg-green transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800 poppins"
                        onclick="redirectToCreatePage()">
                        <span class="font-semibold text-white text-lg">SIGN UP</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="relative h-full w-6/12 bg-green flex items-center justify-center">
            <div class="absolute-position">
                <img src="../public/asset/Group 7533.svg" alt="Group 7533">
            </div>
        </div>
    </div>

    <!-- JavaScript script tag -->
    <script>
        function redirectToLoginPage() {
            window.location.href = 'login1.html';
        }

        function redirectToCreatePage() {
            window.location.href = 'create.html';
        }
    </script>
</body>

</html>