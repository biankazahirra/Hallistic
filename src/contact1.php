<?php

include 'koneksi.php'; // Sertakan file koneksi.php
include "ceklogin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $subjek = $_POST["subjek"];
  $pesan = $_POST["pesan"];

  // Siapkan query untuk menyimpan data
  $sql = "INSERT INTO daftar_pesan (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";

  // Jalankan query dan periksa apakah berhasil
  if ($koneksi->query($sql) === TRUE) {
    header("Location: contact1.php");
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | Hallistic</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface:wght@400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
  <link href="path/to/tailwind.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="../public/Logo Hallistic/logo.png" type="image/x-icon">

  <style>
    /* Kustomisasi warna dan font family */
    .bg-green {
      background-color: #344E41;
    }

    .bg-left {
      background-color: #F3ECDC;
    }

    .abrilfatface {
      font-family: 'Abril Fatface', cursive;
    }

    .poppins {
      font-family: 'Poppins', sans-serif;
    }

    .opensans {
      font-family: 'Open Sans', sans-serif;
    }

    .bg-image {
      background-image: url('../public/asset/contactbg.png');
      background-size: full;
      background-position: center;
      padding-top: 100px;
    }

    /* Kustomisasi ukuran input */
    .input-text {
      border: 1px solid #ccc;
      padding: 10px;
      width: 400px;
      background-color: transparent;
      border-radius: 8px;
      /* border bulat */
    }
  </style>
</head>

<body>

  <header class="fixed w-full">
    <nav class="bg-[#588157] border-dlr-200 py-4 navbar fixed top-0 w-full">
      <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto ml-[90px]">
        <a href="#" class="flex items-center">
          <img src="../public/asset/logobar.svg" class="h-6 mr-3 sm:h-9" alt="Halistic Logo" />
        </a>
        <div class="flex items-center lg:order-2  mr-[90px] gap-[30px]">

          <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
          <a href="home1.php"
            class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
            Hi,
            <?php
            echo isset($_SESSION['nama_penyewa']) ? explode(' ', $_SESSION['nama_penyewa'])[0] : 'Pengguna'; ?>!</a>
          <a href="#" onclick="logout()"
            class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">LOGOUT</a>

        </div>
        <div class="mr-[60px] items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
          id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="home1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">HOME</a>
            </li>
            <li>
              <a href="about1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">ABOUT
                US</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 opensans font-semibold text-white rounded lg:bg-transparent lg:p-0  tracking-widest"
                aria-current="page">CONTACT</a>
            </li>
            <li>
              <a href="search1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">SEARCH</a>
            </li>
            <li>
              <a href="transaction1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">TRANSACTION</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="bg-image w-[1440px] pt-[20] ">
    <div class="flex flex-col p-[110px_0_120px_100px] w-[fit-content] box-sizing-border">
      <div class=" m-[0_0_22px_0] self-start w-[fit-content] box-sizing-border">
        <div class=" flex flex-row box-sizing-border">
          <p
            class="m-[0_24.6px_3px_0] inline-block break-words font-['Open_Sans'] font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[var(--secondary,#A3B18A)]">
            HOMEPAGE
          </p>
          <span class="text-[20px] h-6 w-6 pt-1">
            <img src="../public/asset/caret-right.svg" />
          </span>
          <p
            class="m-[0_20.6px_3px_0] inline-block break-words font-['Open_Sans'] font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[var(--secondary,#A3B18A)]">
            CONTACT US
          </p>
        </div>
      </div>
      <p
        class="m-[0_0_25px_0] self-start break-words font-['Abril_Fatface'] font-[var(--heading-very-big,400)] text-[55px] text-[#F3ECDC]">
        <span class="tentang-kami-sub-0">Hubungi </span><span class="text-[#A3B18A]"> Kami</span>
      </p>
      <span
        class="self-start break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[var(--white-transparent,rgba(255,255,255,0.75))]">
        Kami di Hallistic siap membantu Anda! Jika Anda memiliki pertanyaan tentang<br> layanan kami, butuh bantuan
        dalam pemesanan gedung, atau ingin memberikan<br> umpan balik, jangan ragu untuk menghubungi kami.
      </span>
    </div>
  </section>

  <section>
    <div class="bg-[#F3ECDC] flex flex-row justify-center p-[100px_0_50px_0] w-[100%] box-sizing-border">
      <div class="flex flex-row justify-center box-sizing-border">
        <!-- Form Section -->
        <div
          class="shadow-[var(--shadow-shape,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] bg-[var(--white-smoke,#F9F9F9)] m-[100px_60px_0_0] flex flex-col p-[50px_50px_50px_50px] w-[590px] box-sizing-border">
          <div
            class="m-[0_0_36px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-medium,400)] text-[35px] text-[var(--heading,#2D2D2D)]">
            Hubungi kami
          </div>
          <form class="flex flex-col w-[fit-content] box-sizing-border" method="post" action="contact1.php">
            <div class="m-[0_0_30px_0] flex flex-row w-[fit-content] box-sizing-border">
              <div class="m-[0_30px_0_0] flex flex-col w-[fit-content] box-sizing-border">
                <label
                  class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                  Nama
                </label>
                <input type="text" id="nama" name="nama"
                  class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[490px] box-sizing-border"
                  placeholder="Nama" required>
              </div>
            </div>
            <div class="m-[0_0_30px_0] flex flex-row w-[fit-content] box-sizing-border">
              <div class="m-[0_30px_0_0] flex flex-col w-[230px] box-sizing-border">
                <label
                  class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                  Alamat E-mail
                </label>
                <input type="email" id="email" name="email"
                  class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[fit-content] box-sizing-border"
                  placeholder="Alamat e-mail" required>
              </div>
              <div class="flex flex-col w-[230px] box-sizing-border">
                <label
                  class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                  Subjek
                </label>
                <input type="text" id="subjek" name="subjek"
                  class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[fit-content] box-sizing-border"
                  placeholder="Topik pertanyaan" required>
              </div>
            </div>
            <div class="m-[0_0_30px_0] flex flex-col w-[fit-content] box-sizing-border">
              <label
                class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                Pesan
              </label>
              <textarea class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_75px_20px] w-[490px] box-sizing-border"
                id="pesan" name="pesan" placeholder="Ketik pesan disini..." required></textarea>
            </div>
            <input type="submit" name="create" value="Kirim"
              class="rounded-[30px] bg-[var(--primary,#588157)] flex justify-center items-center p-[20px] w-[216px] box-sizing-border text-center transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800 opensans text-white">
          </form>
        </div>

        <!-- Contact Information Section -->
        <div class=" m-[107px_0_121px_0] flex flex-col p-[114px_0_0_0] box-sizing-border">
          <div class=" flex flex-col box-sizing-border">
            <div
              class="m-[0_0_30px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[var(--secondary,#A3B18A)]">
              TETAP BERSAMA KAMI
            </div>
            <div
              class="m-[0_0_30px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[45px] text-[var(--heading,#2D2D2D)]">
              Hubungi kami
            </div>
            <div
              class="m-[0_0_30px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[var(--body,#6E6E6E)]">
              Jangan ragu untuk berkonsultasi langsung dengan kami.
            </div>

            <!-- Tempat Kami Section -->
            <div class="m-[0_0_30px_0] flex flex-row self-start w-[fit-content] items-center box-sizing-border">
              <div
                class="m-[0_20px_0_0] inline-block break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-medium,900)] text-[35px] text-[var(--secondary,#A3B18A)]">
                <img src="../public/asset/map.png" alt="map">
              </div>
              <div class="flex flex-col box-sizing-border">
                <div
                  class="m-[0_0_7px_0] inline-block break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[21px] text-[var(--heading,#2D2D2D)]">
                  Tempat Kami
                </div>
                <span
                  class="break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[var(--body,#6E6E6E)]">
                  Jakarta, Indonesia
                </span>
              </div>
            </div>

            <!-- Email Address Section -->
            <div
              class=" m-[0_0_30px_0] flex flex-row self-start w-[fit-content] items-center p-[0_0_14px_0] box-sizing-border">
              <div
                class="m-[0_20px_0_0] inline-block break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-medium,900)] text-[35px] text-[var(--secondary,#A3B18A)]">
                <img src="../public/asset/envelope.png" alt="envelope">
              </div>
              <div class="flex flex-col box-sizing-border">
                <div
                  class="m-[0_0_7px_0] inline-block break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[21px] text-[var(--heading,#2D2D2D)]">
                  Email Address
                </div>
                <span
                  class="break-words font-['Open_Sans'] font-[var(--body-small,400)] text-[15px] text-[var(--body,#6E6E6E)]">
                  hallistic@gmail.com
                </span>
              </div>
            </div>

            <!-- Telephone Section -->
            <div class=" flex flex-row self-start w-[fit-content] items-center p-[0_12px_23px_0] box-sizing-border">
              <div
                class="m-[0_20px_0_0] inline-block break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-medium,900)] text-[35px] text-[var(--secondary,#A3B18A)]">
                <img src="../public/asset/phone-square.png" alt="phone-square">
              </div>
              <div class="flex flex-col box-sizing-border">
                <div
                  class="m-[0_0_7px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[21px] text-[var(--heading,#2D2D2D)]">
                  Telephone
                </div>
                <span
                  class="break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[var(--body,#6E6E6E)]">
                  ( +62 ) 123 456 789
                </span>
              </div>
            </div>
          </div>
          <div
            class="bg-[url('../assets/images/dot_smoke_11.png')] bg-[50%_50%] bg-cover bg-no-repeat absolute top-[0px] right-[15.6px] w-[115px] h-[74px]">
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div
      class="bg-[var(--accent,#344E41)] flex flex-col items-center p-[95px_100px_30px_100px] w-[fit-content] box-sizing-border">
      <div class="m-[0_18.5px_60px_0] flex flex-row w-[fit-content] box-sizing-border">
        <div class="m-[0_111.3px_80px_0] flex flex-col box-sizing-border">
          <div class="m-[0_0_20px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
            <img class="m-[0_11px_0_0] w-[49px] h-[48px]" src="../public/asset/Vector.svg" />
            <div
              class="m-[1.5px_0_1.5px_0] inline-block break-words font-['Poppins'] font-medium text-[30px] tracking-[4.5px] uppercase text-[#FFFFFF]">
              HALLISTIC.
            </div>
          </div>
          <div
            class="m-[0_0_40px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
            Aplikasi terbaik layanan penyewaan<br />
            gedung di Indonesia
          </div>
          <div class="flex justify-center items-center space-x-[12px] self-start w-[fit-content] box-sizing-border">
            <span
              class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/facebook.svg" />
            </span>
            <span
              class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/twitter.svg" />
            </span>
            <span
              class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/instagram.svg" />
            </span>
            <span
              class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/pinterest.svg" />
            </span>
          </div>
        </div>
        <div class="m-[5px_96.7px_0_0] flex flex-col box-sizing-border">
          <div
            class="m-[0_0_25px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]">
            Quick Links
          </div>
          <div class="flex flex-col w-[fit-content] box-sizing-border">
            <div class="flex flex-col w-[fit-content] box-sizing-border">
              <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                <span
                  class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/caret-right.svg" />
                </span>
                <span
                  class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  Home
                </span>
              </div>
            </div>
            <div class="flex flex-col w-[fit-content] box-sizing-border">
              <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                <span
                  class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/caret-right.svg" />
                </span>
                <span
                  class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  About Us
                </span>
              </div>
            </div>
            <div class="flex flex-col w-[fit-content] box-sizing-border">
              <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                <span
                  class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/caret-right.svg" />
                </span>
                <span
                  class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  Check-In Check-Out
                </span>
              </div>
            </div>
            <div class="flex flex-col w-[fit-content] box-sizing-border">
              <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                <span
                  class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/caret-right.svg" />
                </span>
                <span
                  class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  Layanan
                </span>
              </div>
            </div>
            <div class="flex flex-col w-[fit-content] box-sizing-border">
              <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                <span
                  class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/caret-right.svg" />
                </span>
                <span
                  class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  Blog
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="m-[5px_78.3px_0_0] flex flex-col w-[204.7px] box-sizing-border">
          <div
            class="m-[0_0_25px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]">
            Site Links
          </div>
          <div class="flex flex-col w-[fit-content] box-sizing-border">
            <div
              class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
              <span
                class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                <img src="../public/asset/caret-right.svg" />
              </span>
              <span
                class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                Syarat dan ketentuan
              </span>
            </div>
            <div
              class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
              <span
                class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                <img src="../public/asset/caret-right.svg" />
              </span>
              <span
                class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                Disclaimer
              </span>
            </div>
            <div
              class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
              <span
                class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                <img src="../public/asset/caret-right.svg" />
              </span>
              <span
                class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                Hubungi kami
              </span>
            </div>
            <div
              class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
              <span
                class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                <img src="../public/asset/caret-right.svg" />
              </span>
              <span
                class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                GDPR
              </span>
            </div>
            <div
              class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
              <span
                class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                <img src="../public/asset/caret-right.svg" />
              </span>
              <span
                class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                Aturan pemakaian
              </span>
            </div>
          </div>
        </div>
        <div class="m-[5px_0_68px_0] flex flex-col box-sizing-border">
          <div
            class="m-[0_0_25px_0] inline-block break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]">
            Tetap bersama kami
          </div>
          <div
            class="relative m-[0_0_25px_0] self-start p-[0_0_6px_0] w-[fit-content] box-sizing-border flex items-center">
            <span
              class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/map-pin.svg" />
            </span>
            <span
              class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              Jakarta, Indonesia
            </span>
          </div>
          <div
            class="relative m-[0_0_25px_0] self-start p-[0_0_6px_0] w-[fit-content] box-sizing-border flex items-center">
            <span
              class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/envelope.svg" />
            </span>
            <span
              class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              hallistic@gmail.com
            </span>
          </div>
          <div
            class="relative m-[0_0_25px_0] self-start p-[0_0_6px_0] w-[fit-content] box-sizing-border flex items-center">
            <span
              class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
              <img src="../public/asset/phone-square.svg" />
            </span>
            <span
              class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              ( +62 ) 123 456 789
            </span>
          </div>
        </div>
      </div>
      <div class="flex flex-col items-center p-[29px_0_0_0] w-[1240px] box-sizing-border">
        <hr class="w-[98%] border-t-[1px_solid_rgba(255,255,255,0.3)] mb-[50px]">
        <span
          class="break-words oppensans font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[#F3ECDC] text-center">
          COPYRIGHT HALLISTIC | @2024 ALL RIGHT RESERVED
        </span>
      </div>
    </div>
  </footer>


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