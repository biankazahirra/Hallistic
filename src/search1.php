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
  <title>Search Building</title>
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
      background-image: url('../public/asset/searchbg.png');
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
              <a href="contact1.php"
                class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">CONTACT</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 opensans font-semibold text-white rounded lg:bg-transparent lg:p-0  tracking-widest"
                aria-current="page">SEARCH</a>
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

  <section class="bg-image w-[1440px] pt-[0] ">
    <div class="flex flex-col p-[190px_0_120px_100px] w-[fit-content] box-sizing-border">
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
            CARI GEDUNG
          </p>
        </div>
      </div>
      <p
        class="m-[0_0_25px_0] self-start break-words font-['Abril_Fatface'] font-[var(--heading-very-big,400)] text-[55px] text-[#F3ECDC]">
        <span class="tentang-kami-sub-0">Cari Gedung </span><span class="text-[#A3B18A]"> Anda</span>
      </p>
      <span
        class="self-start break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[var(--white-transparent,rgba(255,255,255,0.75))]">
        Segera cari gedung yang ingin anda sewa, atur jadwal checkin dan checkout
      </span>
    </div>

    <div
      class="rounded-t-[30px] border-[1px_solid_#9C9C9C] bg-[#FFFBF2] m-[0_107px_0_107px] flex flex-row justify-between p-[9px_24px_9px_27.8px] w-[1226px] box-sizing-border">

      <!-- Kota Dituju -->
      <form action="searchresult.php" method="get" class="flex items-center justify-center">
        <div class="flex flex-row items-center">
          <div class="m-[12.8px_22.8px_12.8px_0] flex w-[22.5px] h-[22.5px] box-sizing-border">
            <img class="w-[22.5px] h-[22.5px]" src="../public/asset/search1.svg" />
          </div>
          <div
            class="m-[10px_14px_10px_0] inline-block w-[180px] break-words font-['Inter'] font-normal text-[12px] leading-[2.325] text-[#4D4D4D]">
            <input type="text" name="kota_gedung" placeholder="Pilih Kota yang dituju"
              class="w-full p-[5px] border-[1px_solid_#9C9C9C] rounded bg-transparent" />
          </div>
        </div>

        <!-- Separator -->
        <div class="flex items-center justify-center mx-[10px]">
          <span class="text-[12px] text-[#4D4D4D]">|</span>
        </div>

        <!-- Check-in/Check-out -->
        <div
          class="flex flex-row items-center border-l-[1px_solid_#A3B18A] border-r-[1px_solid_#A3B18A] p-[10px_10.2px_9px_0] box-sizing-border">
          <div class="flex items-center mr-[20px]">
            <img class="w-[22.5px] h-[22.5px] mr-[5px]" src="../public/asset/calseacrh.svg">
            <label for="checkin-date" class="mr-[5px] text-[#4D4D4D] whitespace-nowrap">Check-in:</label>
            <input id="checkin-date" type="date" name="checkin_date"
              class="p-[5px] border-[1px_solid_#9C9C9C] rounded w-[150px] bg-transparent cursor-pointer" />
          </div>
          <div class="flex items-center">
            <img class="w-[22.5px] h-[22.5px] mr-[5px]" src="../public/asset/calseacrh.svg">
            <label for="checkout-date" class="mr-[5px] text-[#4D4D4D] whitespace-nowrap">Check-out:</label>
            <input id="checkout-date" type="date"  name="checkout_date"
              class="p-[5px] border-[1px_solid_#9C9C9C] rounded w-[150px] bg-transparent cursor-pointer" />
          </div>
        </div>

        <!-- Separator -->
        <div class="flex items-center justify-center mx-[10px]">
          <span class="text-[12px] text-[#4D4D4D]">|</span>
        </div>

        <!-- Jumlah Orang -->
        <div class="flex flex-row items-center">
          <div class="m-[15px_52px_15px_0] flex flex-row box-sizing-border items-center">
            <div class="flex items-center mr-1">
              <img class="w-[24px] h-[24px]" src="../public/asset/profiluser.svg" />
            </div>
            <div class="mr-[25.1px]">
              <span
                class="break-words font-['Inter'] font-normal text-[15px] leading-[2.325] text-[#4D4D4D]">Orang:</span>
            </div>
            <div class="flex items-center -ml-3">
              <button class="bg-[#4D4D4D] w-[12px] h-[1.5px] text-white" onclick="decrementGuests()">-</button>
              <input id="guestCount" type="number" value="0" nsme="jumlah_orang"
                class="mx-[10px] w-[50px] text-center font-['Inter'] font-normal text-[20px] leading-[1.395] text-[#4D4D4D] border border-[#4D4D4D]" />
              <button
                class="bg-[#FFFBF2] w-[12px] h-[1.5px] text-2xl text-[#4D4D4D] flex items-center justify-center mb-1"
                onclick="incrementGuests()">+</button>
            </div>

          </div>
          <a href="#">
            <div
              class="rounded-[98px] border-[1px_solid_#9C9C9C] bg-[#588157] flex p-[14px_0_14px_0] w-[121px] box-sizing-border justify-center items-center text-[#F3ECDC] text-[15px] font-bold font-['Inter'] text-center break-words">
              Cari
            </div>
          </a>
        </div>
      </form>
    </div>


    <script>
      function decrementGuests() {
        let guestCount = document.getElementById('guestCount');
        if (guestCount.value > 0) {
          guestCount.value = parseInt(guestCount.value) - 1;
        }
      }

      function incrementGuests() {
        let guestCount = document.getElementById('guestCount');
        guestCount.value = parseInt(guestCount.value) + 1;
      }

      // Optional: Prevent manual input of negative numbers
      document.getElementById('guestCount').addEventListener('input', function () {
        if (this.value < 0) {
          this.value = 0;
        }
      });
    </script>
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