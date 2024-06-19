<?php

include "ceklogin.php";
include 'koneksi.php';

if (isset($_GET['id_gedung'])) {
  $id_gedung = $_GET['id_gedung'];

  // Lakukan query untuk mendapatkan data gedung sesuai dengan id_gedung
  $query = "SELECT nama_gedung, deskripsi_gedung, kota_gedung, gambar_gedung FROM daftar_gedung WHERE id_gedung = ?";
  $stmt = $koneksi->prepare($query);
  $stmt->bind_param("i", $id_gedung);
  $stmt->execute();
  $stmt->bind_result($nama_gedung, $deskripsi_gedung, $kota_gedung, $gambar_gedung, );
  $stmt->fetch();
  $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail - Hallistic</title>
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
  <style>
    body {
      background-color: #F3ECDC;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .conten {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      background-color: #F3ECDC;
    }

    .image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      /* Space between main image and thumbnails */
    }

    .main-image {
      width: 100%;
      max-width: 800px;
      height: auto;
    }

    .thumbnail-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 10px;
      /* Space between thumbnails */
    }

    .thumbnail {
      width: 330px;
      /* Adjust as needed */
      height: auto;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
    }

    .Content {
      text-align: left;
      margin-bottom: 20px;
    }

    .Content h1 {
      font-size: 2.5em;
      margin: 0;

    }

    .rating {
      display: flex;
      align-items: center;
      margin: 10px 0;
    }

    .rating span {
      margin-left: 5px;
    }

    .rating a {
      color: #333;
      text-decoration: none;
      font-weight: bold;
    }

    .container h1 {
      font-size: 2em;
      /* Adjust the size as needed */
      font-weight: bold;
    }

    .main-content {
      display: flex;
      justify-content: space-between;
    }

    .description {
      flex: 1;
      margin-right: 20px;
    }

    .description p {
      margin-right: 10px;
      margin-bottom: 13px;
      line-height: 1.6;
      box-sizing: border-box;
    }

    .facilities {
      display: flex;
      justify-content: space-between;
      width: 55%;
      padding: 0 1px;
    }

    .facilities ul {
      flex: 1;
      margin: 0 8px;
      padding: 0;
      list-style: none;
    }

    .facilities li {
      margin: 5px 0;
      display: flex;
      align-items: center;
    }

    .facilities li::before {
      margin-right: 10px;
      color: #2b4d36;
    }

    .book-button {
      display: block;
      width: 129px;
      margin-left: 60%;
      padding: 10px 20px;
      background-color: #588157;
      color: #F3ECDC;
      text-align: center;
      text-decoration: none;
      border-radius: 1000px;
      font-weight: bold;
    }

    .Maps {
      max-width: 1000px;
      margin: 50px auto;
      padding: 20px;
      text-align: center;
    }

    .Maps h2 {
      font-size: 2em;
      /* Adjust the size as needed */
      font-weight: bold;
      text-align: center;
      /* Center the text horizontally */
      margin-bottom: 20px;
      /* Add some margin below the heading */
    }

    .map-container {
      display: flex;
      justify-content: center;
      overflow: hidden;
      border-radius: 20px;
      /* Rounded border */
      width: 593px;
      /* Adjust width as needed */
      height: 293px;
      background-color: #ffffff;
      /* Warna latar belakang hijau */
      padding: 15px;
      /* Menambahkan padding di sekitar peta */
    }

    .map {
      width: 100%;
      height: 100%;
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
          <a href="login.html"
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

  <div class="container mt-[100px]">
    <div class="conten">
      <div class="image-container">
        <img src="uploads/<?php echo $gambar_gedung; ?>" class="w-[50rem] h-[20rem]" alt="<?php echo $nama_gedung; ?>">
      </div>
      <div class="container">
        <div class="content-header">
          <h1 class="text-[#073937] font-['Abril_Fatface']"><?php echo $nama_gedung; ?></h1>
          <div class="rating">
            <span>⭐ 4.3/5</span>
            <span>Superb (<a href="#">999+ reviews</a>)</span>
          </div>
          <?php if ($kota_gedung): ?>
            <p><?php echo $kota_gedung; ?></p>
          <?php endif; ?>
        </div>
        <div class="main-content">
          <div class="description">
            <p><?php echo $deskripsi_gedung; ?></p>
          </div>
          <div class="facilities">
            <ul>
              <li>Top Facilities</li>
              <li><img src="../public/asset/pemanas.png" alt=""> Heating and workspace</li>
              <li><img src="../public/asset/AC.png" alt=""> Air-conditioned rooms</li>
              <li><img src="../public/asset/Elevator.png" alt=""> Elevator</li>
              <li><img src="../public/asset/Layanan.png" alt=""> 24/7 Service</li>
            </ul>
            <ul>
              <li>The Sonder standard</li>
              <li><img src="../public/asset/Check.png" alt=""> Password Check-in</li>
              <li><img src="../public/asset/Wifi.png" alt=""> Fast WIFI</li>
              <li><img src="../public/asset/Kebersihan.png" alt=""> Professional Cleaning</li>
              <li><img src="../public/asset/Perlengkapan.png" alt=""> Full Equipment</li>
            </ul>
          </div>
        </div>
        <a href="booking.php?id_gedung=<?php echo $id_gedung; ?>" class="book-button">Book Now</a>
      </div>
    </div>
    <div class="Maps">
      <h2>Location Map</h2>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.678910111213!2d106.8286!3d-6.1805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6b1de4d89e5%3A0x57c6d8bd9d3e17b4!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1623162787618!5m2!1sen!2sid"
          allowfullscreen="" loading="lazy" class="map"></iframe>
      </div>
    </div>
  </div>

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

  <div class="footer-wrapper">
    <footer class="w-full">
      <!-- Konten footer -->
    </footer>
  </div>

  <script>
    // Fungsi untuk menambahkan pin lokasi pada peta
    function initialize() {
      var mapOptions = {
        zoom: 15, // Tingkat zoom peta
        center: new google.maps.LatLng(-6.1805, 106.8286) // Koordinat lokasi
      };
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      // Menambahkan marker (pin)
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-6.1805, 106.8286), // Koordinat pin
        map: map,
        title: 'Monumen Nasional' // Judul pin
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</body>

</html>