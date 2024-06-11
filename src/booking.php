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
    <title>TransactionNowAfterLogin</title>
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
            background-size:full;
            background-position: center;
            padding-top: 100px;
        }
        /* Kustomisasi ukuran input */
        .input-text {
            border: 1px solid #ccc;
            padding: 10px;
            width: 400px;
            background-color: transparent;
            border-radius: 8px; /* border bulat */
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
                  Hi, <?php 
                  echo isset($_SESSION['nama_penyewa']) ? explode(' ', $_SESSION['nama_penyewa'])[0] : 'Pengguna'; ?>!</a>
                <a href="login.html" class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">LOGOUT</a>
                
            </div>
            <div class="mr-[60px] items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                      <a href="home1.php" class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">HOME</a>
                    </li>
                    <li>
                      <a href="about1.php" class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">ABOUT US</a>
                    </li>
                    <li>
                        <a href="contact1.php" class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" >CONTACT</a>
                    </li>
                    <li>
                        <a href="search1.php" class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">SEARCH</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 opensans font-semibold text-white rounded lg:bg-transparent lg:p-0  tracking-widest" aria-current="page">TRANSACTION</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="bg-[#F3ECDC] flex flex-col items-center p-[0_0_48px_0] w-[1440px] box-sizing-border pt-[120px] mx-auto">
    <div>
      <div class="flex flex-col items-center w-[1440px] box-sizing-border">
        <div class="flex box-sizing-border">
            <span class="break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[45px] text-[var(--heading,#2D2D2D)]">
            Book Confirmation
            </span>
          </div>
        </div>
        <div class="bg-[#F3ECDC] flex p-[36px_100px_18px_100px] box-sizing-border">
            <div class="shadow-[var(--shadow-shape,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] bg-[var(--white-smoke,#F9F9F9)] flex flex-col p-[50px_50px_75px_50px] box-sizing-border">
              <div class="m-[0_0_20px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-medium,400)] text-[35px] text-[var(--heading,#2D2D2D)]">
                Your Information
              </div>
              <div class="flex flex-col items-center w-[fit-content] box-sizing-border">
                <div class="m-[0_0_30px_0] flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0_30px_0_0] flex flex-col w-[555px] box-sizing-border">
                    <div class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                      First Name
                    </div>
                    <div class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[550px] box-sizing-border">
                      <input type="text" placeholder="First Name" class="w-full bg-transparent border-none outline-none font-['Open_Sans'] font-[var(--body-small,400)] text-[15px] text-[var(--body,#6E6E6E)]" />
                    </div>
                  </div>
                  <div class="flex flex-col w-[555px] box-sizing-border">
                    <div class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                      Last Name
                    </div>
                    <div class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[550px] box-sizing-border">
                      <input type="text" placeholder="Last Name" class="w-full bg-transparent border-none outline-none font-['Open_Sans'] font-[var(--body-small,400)] text-[15px] text-[var(--body,#6E6E6E)]" />
                    </div>
                  </div>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0_30px_0_0] flex flex-col w-[555px] box-sizing-border">
                    <div class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                      Email Address
                    </div>
                    <div class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[550px] box-sizing-border">
                      <input type="email" placeholder="Hello@email.com" class="w-full bg-transparent border-none outline-none font-['Open_Sans'] font-[var(--body-small,400)] text-[15px] text-[var(--body,#6E6E6E)]" />
                    </div>
                  </div>
                  <div class="flex flex-col w-[555px] box-sizing-border">
                    <div class="m-[0_0_10px_0] inline-block self-start break-words font-['Open_Sans'] font-[var(--form-label-font-weight,600)] text-[17px] leading-[var(--form-label-line-height,1.706)] text-[var(--heading,#2D2D2D)]">
                      Phone
                    </div>
                    <div class="rounded-[30px] bg-[#F1F1F1] p-[20px_20px_20px_20px] w-[550px] box-sizing-border">
                      <input type="tel" placeholder="Phone Number" class="w-full bg-transparent border-none outline-none font-['Open_Sans'] font-[var(--body-small,400)] text-[15px] text-[var(--body,#6E6E6E)]" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        <div class="bg-[#F3ECDC] p-[5px_100px_19px_100px] box-sizing-border">
          <div class="shadow-[var(--shadow-shape,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] bg-[var(--white-smoke,#F9F9F9)] flex flex-col p-[22px_0_41.9px_50px] box-sizing-border">
            <div class="m-[0_0_20px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-medium,400)] text-[35px] text-[var(--heading,#2D2D2D)]">
            Order Detail
            </div>
            <div class="m-[0_0_20px_0] flex flex-row justify-between self-start w-[607.3px] box-sizing-border">
              <div class="m-[3px_9.5px_0_0] inline-block w-[175.5px] break-words font-['Lato'] font-semibold text-[16px] text-[#000000]">
              Order Date
              </div>
              <div class="m-[3px_0_0_0] inline-block break-words font-['Lato'] font-semibold text-[16px] text-[#000000]">
              Check In
              </div>
              <div class="m-[3px_0_0_0] inline-block break-words font-['Lato'] font-semibold text-[16px] text-[#000000]">
              Check Out
              </div>
              <div class="m-[0_0_3px_0] inline-block break-words font-['Lato'] font-semibold text-[16px] text-[#000000]">
              Total
              </div>
            </div>
            <div class="flex flex-row justify-between self-start w-[633.2px] box-sizing-border">
              <div class="m-[0_12px_0.1px_0] inline-block w-[157px] break-words font-['Poppins'] font-normal text-[16px] text-[#000000]">
              20/09/2024
              </div>
              <div class=" m-[0_0_0.1px_0] inline-block break-words font-['Poppins'] font-normal text-[16px] text-[#000000]">
              23/09/2024
              </div>
              <div class=" m-[0_0_0.1px_0] inline-block break-words font-['Poppins'] font-normal text-[16px] text-[#000000]">
              24/09/2024
              </div>
              <div class=" m-[0.1px_0_0_0] inline-block break-words font-['Poppins'] font-normal text-[16px] text-[#000000]">
              Rp.700.000
              </div>
            </div>
          </div>
        </div>
        <div class="bg-[#F3ECDC] p-[5px_100px_25px_100px] box-sizing-border">
            <div class="shadow-[var(--shadow-shape,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[30px] bg-[var(--white-smoke,#F9F9F9)] flex flex-col p-[22px_0_32px_50px] box-sizing-border">
              <div class="m-[0_0_21.5px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-medium,400)] text-[35px] text-[var(--heading,#2D2D2D)]">
                Payment Method
              </div>
              
              <!-- Payment on Arrival -->
              <div class="m-[0_4.1px_21.5px_4.1px] flex flex-row self-start w-[fit-content] box-sizing-border">
                <input type="radio" id="payment-on-arrival" name="payment-method" value="on-arrival" class="m-[6.5px_13.1px_51px_0] w-[14.9px] h-[14.9px] box-sizing-border rounded-full" />
                <div class="flex box-sizing-border">
                  <label for="payment-on-arrival" class="m-[0_9.6px_9px_0] inline-block break-words font-['Inter'] font-extrabold text-[16px] leading-[1.5] text-[#073937]">
                    Payment on Arrival <br>
                    <span class="break-words font-['Inter'] font-normal text-[16px] leading-[1.5] text-[#073937]">Metode payment ini dilakukan ketika penyewa gedung datang langsung ke tempat lalu menunjukkan bukti pemesanan kepada pegawai dan melakukan pembayaran secara cash.</span>
                  </label>
                </div>
              </div>
              
              <!-- Payment via Bank -->
              <div class="m-[0_4.1px_0_4.1px] flex flex-row self-start w-[fit-content] box-sizing-border">
                <input type="radio" id="payment-via-bank" name="payment-method" value="via-bank" class="m-[8px_13.1px_60.5px_0] w-[14.9px] h-[14.9px] box-sizing-border rounded-full" />
                <div class="flex flex-col items-center box-sizing-border">
                  <label for="payment-via-bank" class="m-[0_30px_9px_0] inline-block break-words font-['Inter'] font-extrabold text-[16px] leading-[1.5] text-[#073937]">
                    Payment Via Bank
                  </label>
                  <div class="flex flex-row w-[152px] box-sizing-border">
                    <img class="m-[0_13px_0_0] w-[59px] h-[47px]" src="../public/asset/logos_mastercard.png" />
                    <div class="m-[0px_0_23.1px_0] flex w-[80px] h-[23.9px] box-sizing-border">
                      <img class="w-[80px] h-[23.9px]" src="../public/asset/logos_visa.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        
        
          <div class="bg-[#F3ECDC] flex flex-row p-[5px_0_44px_100px] w-[1440px]">
            <div id="bookButton" class="rounded-[1000px] border-[4px_solid_#588157] bg-[#588157] m-[0_15px_0_0] flex justify-center items-center w-[92.6px] h-[40px] box-sizing-border cursor-pointer transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800">
              <span class="break-words font-['Inter'] font-normal text-[15.4px] leading-[1.561] text-[#F3ECDC]">
                Book
              </span>
            </div>
            <div id="cancelButton" class="rounded-[1000px] border-[4px_solid_#588157] bg-[#588157] flex justify-center items-center w-[106.6px] h-[40px] box-sizing-border cursor-pointer transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800">
              <span class="break-words font-['Inter'] font-normal text-[15.4px] leading-[1.561] text-[#F3ECDC]">
                Cancel
              </span>
            </div>
          </div>
          
  </section>
  


<footer >
    <div class="bg-[var(--accent,#344E41)] flex flex-col items-center p-[95px_100px_30px_100px] w-[fit-content] box-sizing-border">
        <div class="m-[0_18.5px_60px_0] flex flex-row w-[fit-content] box-sizing-border">
          <div class="m-[0_111.3px_80px_0] flex flex-col box-sizing-border">
            <div class="m-[0_0_20px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
              <img class="m-[0_11px_0_0] w-[49px] h-[48px]" src="../public/asset/Vector.svg" />
              <div class="m-[1.5px_0_1.5px_0] inline-block break-words font-['Poppins'] font-medium text-[30px] tracking-[4.5px] uppercase text-[#FFFFFF]">
              HALLISTIC.
              </div>
            </div>
            <div class="m-[0_0_40px_0] inline-block break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
            Aplikasi terbaik layanan penyewaan<br />
            gedung di Indonesia
            </div>
            <div class="flex justify-center items-center space-x-[12px] self-start w-[fit-content] box-sizing-border">
                <span class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/facebook.svg"/>
                </span>
                <span class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/twitter.svg"/>
                </span>
                <span class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/instagram.svg"/>
                </span>
                <span class="relative break-words font-['Font_Awesome_6_Brands','Roboto_Condensed'] font-normal text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/pinterest.svg"/>
                </span>
              </div>              
          </div>
          <div class="m-[5px_96.7px_0_0] flex flex-col box-sizing-border">
            <div class="m-[0_0_25px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]">
            Quick Links
            </div>
            <div class="flex flex-col w-[fit-content] box-sizing-border">
                <div class="flex flex-col w-[fit-content] box-sizing-border">
                    <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                      <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                        <img src="../public/asset/caret-right.svg"/>
                      </span>
                      <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                        Home
                      </span>
                    </div>
                  </div>                  
                  <div class="flex flex-col w-[fit-content] box-sizing-border">
                    <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                      <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                        <img src="../public/asset/caret-right.svg"/>
                      </span>
                      <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                        About Us
                      </span>
                    </div>
                  </div> 
                  <div class="flex flex-col w-[fit-content] box-sizing-border">
                    <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                      <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                        <img src="../public/asset/caret-right.svg"/>
                      </span>
                      <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                        Check-In Check-Out
                      </span>
                    </div>
                  </div> 
                  <div class="flex flex-col w-[fit-content] box-sizing-border">
                    <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                      <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                        <img src="../public/asset/caret-right.svg"/>
                      </span>
                      <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                        Layanan
                      </span>
                    </div>
                  </div> 
                  <div class="flex flex-col w-[fit-content] box-sizing-border">
                    <div class="relative m-[0_0_15px_0] flex self-start items-center p-[4.5px_0_1.5px_0] box-sizing-border">
                      <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                        <img src="../public/asset/caret-right.svg"/>
                      </span>
                      <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                        Blog
                      </span>
                    </div>
                  </div> 
            </div>
          </div>
          <div class="m-[5px_78.3px_0_0] flex flex-col w-[204.7px] box-sizing-border">
            <div class="m-[0_0_25px_0] inline-block self-start break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]">
            Site Links
            </div>
            <div class="flex flex-col w-[fit-content] box-sizing-border">
              <div class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                    <img src="../public/asset/caret-right.svg"/>
                  </span>
                  <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                    Syarat dan ketentuan
                  </span>
              </div>
              <div class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                    <img src="../public/asset/caret-right.svg"/>
                  </span>
                  <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                    Disclaimer
                  </span>
              </div>
              <div class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                    <img src="../public/asset/caret-right.svg"/>
                  </span>
                  <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                    Hubungi kami
                  </span>
              </div>
              <div class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                    <img src="../public/asset/caret-right.svg"/>
                  </span>
                  <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                    GDPR
                  </span>
              </div>
              <div class="relative m-[0_0_15px_0] p-[4.5px_0_1.5px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                    <img src="../public/asset/caret-right.svg"/>
                  </span>
                  <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                    Aturan pemakaian
                  </span>
              </div>
            </div>
          </div>
          <div class="m-[5px_0_68px_0] flex flex-col box-sizing-border">
            <div class="m-[0_0_25px_0] inline-block break-words font-['Abril_Fatface'] font-[var(--heading-standar,400)] text-[25px] text-[#F3ECDC]">
            Tetap bersama kami
            </div>
            <div class="relative m-[0_0_25px_0] self-start p-[0_0_6px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/map-pin.svg"/>
                </span>
                <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  Jakarta, Indonesia
                </span>
              </div>
            <div class="relative m-[0_0_25px_0] self-start p-[0_0_6px_0] w-[fit-content] box-sizing-border flex items-center">
              <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                <img src="../public/asset/envelope.svg"/>
              </span>
              <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
              hallistic@gmail.com
              </span>
            </div>
            <div class="relative m-[0_0_25px_0] self-start p-[0_0_6px_0] w-[fit-content] box-sizing-border flex items-center">
                <span class="relative break-words font-['Font_Awesome_6_Free','Roboto_Condensed'] font-[var(--icon-small,900)] text-[20px] text-[#F3ECDC]">
                  <img src="../public/asset/phone-square.svg"/>
                </span>
                <span class="ml-[8px] break-words font-['Open_Sans'] font-[var(--body-1-font-weight,400)] text-[18px] leading-[var(--body-1-line-height,1.611)] text-[rgba(255,255,255,0.75)]">
                  ( +62 ) 123 456 789
                </span>
              </div>              
          </div>
        </div>
        <div class="flex flex-col items-center p-[29px_0_0_0] w-[1240px] box-sizing-border">
            <hr class="w-[98%] border-t-[1px_solid_rgba(255,255,255,0.3)] mb-[50px]">
            <span class="break-words oppensans font-[var(--accent-1-font-weight,600)] text-[15px] tracking-[var(--accent-1-letter-spacing,2.3px)] var(--accent-1-text-transform, uppercase) text-[#F3ECDC] text-center">
              COPYRIGHT HALLISTIC | @2024 ALL RIGHT RESERVED
            </span>
          </div>          
      </div>
</footer>

<script>
    document.getElementById('bookButton').addEventListener('click', function() {
      if (confirm('Apakah Anda yakin dengan pesanan Anda?')) {
        // Tindakan yang diambil jika pengguna mengklik "OK"
        console.log('Pesanan dikonfirmasi');
      } else {
        // Tindakan yang diambil jika pengguna mengklik "Cancel"
        console.log('Pesanan dibatalkan');
      }
    });

    document.getElementById('cancelButton').addEventListener('click', function() {
      window.location.href = 'searchresult.php';
    });
  </script>

</body>