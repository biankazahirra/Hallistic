<?php

include "ceklogin.php";
include 'koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
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
  <link rel="shortcut icon" href="../public/Logo Hallistic/logo.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

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
      background-image: url('../public/asset/home1.jpg');
      background-size: full;
      background-position: center;
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
        <a href="home1.php" class="flex items-center">
          <img src="../public/asset/logobar.svg" class="h-6 mr-3 sm:h-9" alt="Halistic Logo" />
        </a>
        <div class="flex items-center lg:order-2  mr-[90px] gap-[30px]">

          <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
          <a href="home1.php"
            class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
            Hi, <?php
            echo isset($_SESSION['nama_penyewa']) ? explode(' ', $_SESSION['nama_penyewa'])[0] : 'Pengguna'; ?>!</a>
          <a href="#" onclick="logout()"
            class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">LOG
            OUT</a>

        </div>
        <div class="mr-[60px] items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
          id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 opensans font-semibold text-white rounded lg:bg-transparent lg:p-0  tracking-widest"
                aria-current="page">HOME</a>
            </li>
            <li>
              <a href="about1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">ABOUT
                US</a>
            </li>
            <li>
              <a href="contact1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">CONTACT</a>
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

  <section class="bg-image w-[1440px] pt-[130px] ">
    <div class="m-[0px_96px_0_96px]  flex flex-col self-start w-[fit-content] box-sizing-border">
      <p
        class="m-[0_0_25px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[var(--secondary,#A3B18A)]">
        TEMPATNYA SEWA GEDUNG TERBAIK DI INDONESIA
      </p>
      <h1
        class="m-[0_0_25px_0] break-words font-['Abril_Fatface'] font-[var(--heading-very-big,400)] text-[55px] text-[#F3ECDC]">
        Ayo, <span class="text-[#A3B18A]">Cari</span> Gedung Impian <br><span class="text-[#A3B18A]">Anda
          Disini..</span>
      </h1>
      <p
        class="m-[0_35.4px_25px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
        Gedung Impian Anda, Hanya Satu Klik Jauhnya: Temukan Kenyamanan<br> dalam Setiap Gedung di Indonesia.
      </p>
      <div class="flex flex-row self-start w-[535px] box-sizing-border gap-[30px] pb-[20px]">
        <div class="flex items-center justify-center">
          <a href="about1.php"
            class="break-words tracking-widest text-white px-[40px] py-[20px] rounded-full bg-[#588157] transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800 opensans">
            LIHAT SELENGKAPNYA
          </a>
        </div>
        <div class="flex items-center justify-center">
          <a href="#"
            class="break-words opensans text-[15px] tracking-widest text-[#588157] bg-[#F3ECDC] dark:hover:bg-gray-200 font-medium rounded-full px-[40px] py-[20px] dark:focus:ring-[#F3ECDC]">
            SEWA SEKARANG
          </a>
        </div>
      </div>

    </div>
  </section>

  <section class="flex justify-center w-[1440px]">
    <div class="bg-[var(--accent,#344E41)] flex justify-center p-[30px_72px] w-[1440px] box-sizing-border">
      <div class="flex justify-between w-[1240px]">
        <div class="flex flex-col items-center box-sizing-border">
          <div class="m-[0_0.7px_10px_0] flex flex-row w-[fit-content] box-sizing-border">
            <span
              class="m-[0_8px_0_0] break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[35px] text-[#F3ECDC]">
              386
            </span>
            <span
              class="m-[0_0_20px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[14px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              +
            </span>
          </div>
          <p class="break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[18px] text-[#F3ECDC]">
            Gedung Terbaik
          </p>
        </div>
        <div class="flex flex-col items-center box-sizing-border">
          <div class="m-[0_0.7px_10px_0] flex flex-row w-[fit-content] box-sizing-border">
            <span
              class="m-[0_8px_0_0] break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[35px] text-[#F3ECDC]">
              56
            </span>
            <span
              class="m-[0_0_20px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[14px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              +
            </span>
          </div>
          <p class="break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[18px] text-[#F3ECDC]">
            Partner Kami
          </p>
        </div>
        <div class="flex flex-col items-center box-sizing-border">
          <div class="m-[0_0.7px_10px_0] flex flex-row w-[fit-content] box-sizing-border">
            <span
              class="m-[0_8px_0_0] break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[35px] text-[#F3ECDC]">
              78K
            </span>
            <span
              class="m-[0_0_20px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[14px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              +
            </span>
          </div>
          <p class="break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[18px] text-[#F3ECDC]">
            Customer Suka
          </p>
        </div>
        <div class="flex flex-col items-center box-sizing-border">
          <div class="m-[0_0.7px_10px_0] flex flex-row w-[fit-content] box-sizing-border">
            <span
              class="m-[0_8px_0_0] break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[35px] text-[#F3ECDC]">
              15 th
            </span>
            <span
              class="m-[0_0_20px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[14px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              +
            </span>
          </div>
          <p class="break-words font-['Abril_Fatface'] font-[var(--heading-small,400)] text-[18px] text-[#F3ECDC]">
            Pengalaman Terbaik
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="flex flex-col ">
    <div class="bg-[#F3ECDC]  flex p-[93px_26px_100px_100px] w-[1440px] box-sizing-border">
      <div class=" flex flex-col items-center w-[1314px] h-[fit-content] box-sizing-border">
        <div class=" m-[0_0_35px_0] flex p-[7px_0_0_0] w-[1314px] box-sizing-border">
          <div class=" flex flex-row justify-between w-[1314px] h-[fit-content] box-sizing-border">
            <div class="flex flex-col box-sizing-border">
              <p
                class="m-[0_0_20px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[var(--secondary,#A3B18A)]">
                LAYANAN KAMI
              </p>
              <span
                class="break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[45px] text-[var(--heading,#2D2D2D)]">
                Gedung impian dan ruangan <br> yang modern.
              </span>
            </div>
            <a href="#" class="m-[71px_0_68px_0] flex flex-row box-sizing-border" style="margin-right: 60px;">
              <p
                class="m-[0_10.5px_3px_0] inline-block break-words font-['Open_Sans'] font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[var(--primary,#588157)]">
                LIHAT SELENGKAPNYA
              </p>
              <span
                class="break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[var(--primary,#588157)]">
                <img src="../public/asset/arrow-right.svg">
              </span>
            </a>
          </div>
          <div
            class="bg-[url('../assets/images/dot_smoke_11.png')] bg-[50%_50%] bg-cover bg-no-repeat absolute top-[0px] right-[443px] w-[83px] h-[53px]">
          </div>
        </div>
        <div class=" m-[0_74px_0_0] flex w-[1240px] box-sizing-border">
          <div class=" flex flex-row w-[1240px] h-[fit-content] box-sizing-border">
            <div
              class="rounded-[30px] bg-[#344E41]  m-[0_218px_0_0] flex flex-col justify-center items-center w-[417px]"
              style="margin-right: 30px;">
              <img src="../public/asset/quote-left.svg"
                class="m-[0_280px_12px_0]  inline-block break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-big,900)] text-[45px] text-[var(--border,#DADADA)]"
                style="margin-left: 50px;">
              <p class="m-[0_10px_20px_0] mr-[140px] mt-2 inline-block break-words font-['Open_Sans'] var(--quote-font-style, italic) font-[var(--quote-font-weight,600)] text-[22px] leading-[var(--quote-line-height,1.318)] text-[rgba(255,255,255,0.75)]"
                style="margin-right: 110px;">
                <i>“Layanan gedung<br> paling terbaik di<br> Indonesia, suka<br> banget.. “</i>
              </p>
              <span
                class="ml-[2px] mr-[160px] break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]"
                style="margin-right: 120px;">
                Najwa Shihab
              </span>
            </div>
            <div class="m-[30px_20px_30px_0px] flex w-[287.5px] h-[245px] box-sizing-border">
              <div
                class="shadow-[var(--shadow,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] border-[10px_solid_#F3ECDC] bg-[url('../public/asset/Image.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[287.5px] h-[245px]">
              </div>
            </div>
            <div class="m-[30px_20px_30px_0px] flex w-[287.5px] h-[245px] box-sizing-border">
              <div
                class="shadow-[var(--shadow,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] border-[10px_solid_#F3ECDC] bg-[url('../public/asset/Image2.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[287.5px] h-[245px]">
              </div>
            </div>
            <div class="m-[30px_0_20px_0px] flex w-[287.5px] h-[245px] box-sizing-border">
              <div
                class="shadow-[var(--shadow,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] border-[10px_solid_#F3ECDC] bg-[url('../public/asset/Image2.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[287.5px] h-[245px]">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="bg-[url('../assets/images/dot_smoke_11.png')] bg-[50%_50%] bg-cover bg-no-repeat absolute right-[67px] bottom-[145px] w-[76px] h-[49px]">
      </div>
    </div>
  </section>

  <section class="flex flex-col">
    <div class="bg-[#F3ECDC] flex justify-center items-center p-[100px_100px_50px_100px] w-[1440px] box-sizing-border">
      <div class="rounded-[30px] bg-cover bg-no-repeat justify-center items-center p-[100px_0] w-[1240px]"
        style="background-image: url('../public/asset/Box.png');">
        <div class="flex flex-col items-center box-sizing-border text-center">
          <div
            class="m-[0_0_20px_0] inline-block break-words font-['Abril_Fatface'] font-[var(--heading-very-big,400)] text-[55px] text-[#F3ECDC]">
            Sewa Gedung Terbaik<br />
            Sesuai Impian Anda
          </div>
          <div
            class="m-[0_1.6px_20px_1.6px] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[var(--white-transparent,rgba(255,255,255,0.75))]">
            Tersedia banyak sekali apartemen terbaik yang siap anda tempati
          </div>
          <div class="flex justify-center items-center">
            <a href="#"
              class="break-words tracking-widest text-white px-[40px] py-[20px] rounded-full bg-[#588157] transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800 opensans">
              GET STARTED
            </a>
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
    function redirectToHomePage() {
      window.location.href = 'home.php';
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

</body>

</html>