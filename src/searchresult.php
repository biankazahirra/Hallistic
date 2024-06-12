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
    <title>SearchResultAfterLogin</title>
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
                            <a href="#" class="block py-2 pl-3 pr-4 opensans font-semibold text-white rounded lg:bg-transparent lg:p-0  tracking-widest" aria-current="page">SEARCH</a>
                        </li>
                        <li>
                            <a href="transaciton1.php" class="block py-2 pl-3 pr-4 opensans font-semibold tracking-widest text-white text-opacity-75 border-b hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:p-0 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">TRANSACTION</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<section class="bg-[#F3ECDC] flex flex-col items-center p-[0_0_48px_0] w-[1440px] box-sizing-border pt-[120px] mx-auto">
    <div>
      <div class="flex flex-col items-center w-[1440px] box-sizing-border">
        <div class="m-[0_0_55px_0] inline-block break-words font-['Abril_Fatface'] font-[var(--heading-big,400)] text-[45px] text-[var(--heading,#2D2D2D)]">
          Hasil Pencarian
        </div>
        <div class="rounded-t-[30px] border-[1px_solid_#9C9C9C] bg-[#FFFBF2] m-[0_107px_0_107px] flex flex-row justify-between p-[9px_24px_9px_27.8px] w-[1226px] box-sizing-border">
  
          <!-- Kota Dituju -->
          <div class="flex flex-row items-center">
            <div class="m-[12.8px_22.8px_12.8px_0] flex w-[22.5px] h-[22.5px] box-sizing-border">
              <img class="w-[22.5px] h-[22.5px]" src="../public/asset/search1.svg" />
            </div>
            <div class="m-[10px_14px_10px_0] inline-block w-[180px] break-words font-['Inter'] font-normal text-[12px] leading-[2.325] text-[#4D4D4D]">
              <input type="text" placeholder="Pilih Kota yang dituju" class="w-full p-[5px] border-[1px_solid_#9C9C9C] rounded bg-transparent" />
            </div>
          </div>
        
          <!-- Separator -->
          <div class="flex items-center justify-center mx-[10px]">
            <span class="text-[12px] text-[#4D4D4D]">|</span>
          </div>
        
          <!-- Check-in/Check-out -->
          <div class="flex flex-row items-center border-l-[1px_solid_#A3B18A] border-r-[1px_solid_#A3B18A] p-[10px_10.2px_9px_0] box-sizing-border">
            <div class="flex items-center mr-[20px]">
              <img class="w-[22.5px] h-[22.5px] mr-[5px]" src="../public/asset/calseacrh.svg">
              <label for="checkin-date" class="mr-[5px] text-[#4D4D4D] whitespace-nowrap">Check-in:</label>
              <input id="checkin-date" type="date" class="p-[5px] border-[1px_solid_#9C9C9C] rounded w-[150px] bg-transparent" />
            </div>
            <div class="flex items-center">
              <img class="w-[22.5px] h-[22.5px] mr-[5px]" src="../public/asset/calseacrh.svg">
              <label for="checkout-date" class="mr-[5px] text-[#4D4D4D] whitespace-nowrap">Check-out:</label>
              <input id="checkout-date" type="date" class="p-[5px] border-[1px_solid_#9C9C9C] rounded w-[150px] bg-transparent" />
            </div>
          </div>
        
          <!-- Separator -->
          <div class="flex items-center justify-center mx-[10px]">
            <span class="text-[12px] text-[#4D4D4D]">|</span>
          </div>
        
          <!-- Jumlah Orang -->
          <div class="flex flex-row items-center">
            <div class="m-[15px_52px_15px_0] flex flex-row box-sizing-border items-center">
              <div class="flex items-center mr-[19.1px]">
                <img class="w-[24px] h-[24px]" src="../public/asset/profiluser.svg" />
              </div>
              <div class="mr-[25.1px]">
                <span class="break-words font-['Inter'] font-normal text-[12px] leading-[2.325] text-[#4D4D4D]">Orang</span>
              </div>
              <div class="flex items-center">
                <button class="bg-[#4D4D4D] w-[12px] h-[1.5px] text-white" onclick="decrementGuests()">-</button>
                <span id="guestCount" class="mx-[10px] break-words font-['Inter'] font-normal text-[20px] leading-[1.395] text-[#4D4D4D]">0</span>
                <button class="bg-[#FFFBF2] w-[24px] h-[24px] text-black" onclick="incrementGuests()">+</button>
              </div>
            </div>
            <div class="rounded-[98px] border-[1px_solid_#9C9C9C] bg-[#588157] flex p-[14px_0_14px_0] w-[121px] box-sizing-border justify-center items-center">
              <a href="searchresult.php" class="text-center break-words font-['Inter'] font-bold text-[15px] text-[#F3ECDC]">Cari</a>
            </div>
          </div>
        
        </div>
        
          
          <script>
            let guestCount = 0;
          
            function incrementGuests() {
              guestCount++;
              document.getElementById('guestCount').innerText = guestCount;
            }
          
            function decrementGuests() {
              if (guestCount > 1) {
                guestCount--;
                document.getElementById('guestCount').innerText = guestCount;
              }
            }
          </script>
      </div>
    </div>
    <?php

      $query = "SELECT id_gedung, nama_gedung, harga_sewa, kota_gedung FROM daftar_gedung";
      $result = $koneksi->query($query);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $id_gedung = $row['id_gedung'];
              $nama_gedung = $row['nama_gedung'];
              $harga_sewa = $row['harga_sewa'];
              $kota_gedung = $row['kota_gedung'];
              ?>
              <div class="bg-[#F3ECDC] flex justify-center p-[46px_0_69px_0] w-full box-sizing-border">
                <div class="shadow-[var(--shadow-shape,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[20px] bg-[#FFFFFF] flex flex-col items-center p-[36px_34px_35.8px_44px] box-sizing-border">
                  <div class="m-[0_18px_24px_0] flex flex-row justify-between w-full max-w-[796px] box-sizing-border">
                    <div class="m-[0_0_8.2px_0] flex flex-col box-sizing-border">
                      <div class="flex self-start box-sizing-border">
                        <span class="break-words font-['Inter'] font-normal text-[21.8px] tracking-[-0.2px] leading-[1.468] text-[#073937]">
                          <?php echo $nama_gedung; ?>
                        </span>
                      </div>
                      <div class=" m-[0_0_0_0px] w-[fit-content] box-sizing-border">
                        <div class=" flex p-[0_4.8px_0_0] box-sizing-border">
                          <div class=" flex flex-row box-sizing-border">
                            <div class="m-[2.1px_3.8px_7.9px_0] flex w-[18.7px] h-[18px] box-sizing-border">
                              <img class="w-[18.7px] h-[18px]" src="../public/asset/star.svg" />
                            </div>
                            <span class="m-[0_0.5px_0_0] break-words font-['Inter'] font-bold text-[16.6px] tracking-[0px] leading-[1.681] text-[#073937]">
                              4.3
                            </span>
                            <span class="break-words font-['Inter'] font-normal text-[17.6px] tracking-[0px] leading-[1.587] text-[#073937]">
                              /5 (
                            </span>
                            <div class="m-[3.9px_0_3.1px_0] flex box-sizing-border">
                              <span class="break-words font-['Inter'] font-normal text-[16.5px] underline leading-[1.258] text-[#073937]">
                                999+ reviews
                              </span>
                            </div>
                          </div>
                          <span class=" right-[0px] bottom-[0px] break-words font-['Inter'] font-normal text-[18px] tracking-[0px] leading-[1.55] text-[#073937]">
                            )
                          </span>
                          <span class=" right-[0px] bottom-[0px] break-words font-['Inter'] font-normal text-[16.9px] tracking-[0px] leading-[1.653] text-[#073937]">
                            | <?php echo $kota_gedung; ?>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="m-[0px_0_0_0] flex flex-col items-end box-sizing-border">
                      <div class="m-[0_0px_8px_0] flex flex-row w-[fit-content] box-sizing-border">
                        <div class="m-[0_12px_0_0] flex box-sizing-border">
                          <div class="rounded-[15px] bg-[#EAECE2] flex p-[0_16px_0_12px] box-sizing-border">
                            <span class="break-words font-['Inter'] font-normal text-[11.6px] tracking-[0.1px] leading-[2.581] text-[#073937]">
                              Sound System Umum
                            </span>
                          </div>
                        </div>
                        <div class="flex box-sizing-border">
                          <div class="rounded-[15px] bg-[#EAECE2] flex p-[0_8.5px_0_12px] box-sizing-border">
                            <span class="break-words font-['Inter'] font-normal text-[11.4px] tracking-[0.1px] leading-[2.623] text-[#073937]">
                              Kapasitas 500 orang
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="flex flex-row w-[fit-content] box-sizing-border">
                        <div class="m-[0_11.1px_0_0] flex box-sizing-border">
                          <div class="rounded-[15px] bg-[#EAECE2] flex p-[0_15px_0_12px] box-sizing-border">
                            <span class="break-words font-['Inter'] font-normal text-[11.6px] tracking-[0.1px] leading-[2.581] text-[#073937]">
                              Ruangan Ber AC
                            </span>
                          </div>
                        </div>
                        <div class="flex box-sizing-border">
                          <div class="rounded-[15px] bg-[#EAECE2] flex p-[7px_12px_7px_12px] box-sizing-border">
                            <span class="break-words font-['Inter'] font-normal text-[11.1px] leading-[1.443] text-[#073937]">
                              +2 lainnya
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-row w-[fit-content] box-sizing-border">
                    <div class="rounded-[15px] m-[0_40px_0.2px_0] flex w-[500px] box-sizing-border">
                    <img src="show_image.php?id_gedung=<?php echo $id_gedung; ?>" alt="<?php echo $nama_gedung; ?>" class="w-full h-auto"/>
                    </div>
                    </div>
                    <div class="flex flex-col box-sizing-border">
                      <div class="m-[0_0_16px_0] flex self-start box-sizing-border">
                        <span class="break-words font-['Inter'] font-normal text-[9.5px] tracking-[0.6px] leading-[1.259] text-[#073937]">
                          HARGA SEWA GEDUNG
                        </span>
                      </div>
                      <div class="m-[0_0_176.2px_0] flex w-[274px] box-sizing-border">
                        <div class="border-b-[4px_solid_rgba(0,0,0,0.1)] flex flex-row justify-between p-[8px_1.2px_7.9px_0] w-[274px] h-[fit-content] box-sizing-border">
                          <div class="flex box-sizing-border">
                            <span class="break-words font-['Inter'] font-normal text-[13.6px] tracking-[0.1px] leading-[1.474] text-[#073937]">
                              Total Harga
                            </span>
                          </div>
                          <div class="flex box-sizing-border">
                            <span class="break-words font-['Inter'] font-bold text-[12.9px] tracking-[0.1px] leading-[1.549] text-[#073937]">
                              Rp <?php echo number_format($harga_sewa, 0, ',', '.'); ?>K
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="m-[0_9.4px_0_0] flex flex-col self-center w-[150.6px] box-sizing-border">
                          <div class="rounded-[1000px] border-[4px_solid_#588157] bg-[#588157] flex justify-center items-center p-[2px_0] w-[108.6px] h-[40px] box-sizing-border transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800" style="margin-left: 20px">
                            <a href="booking.php" class="break-words font-['Inter'] font-normal text-center leading-[1.561] text-[#F3ECDC] hover:text-[#EAECE2]">
                              Book Now
                            </a>
                          </div>
                          <a href="detail.php" class="break-words font-['Inter'] font-normal text-center  text-[#588157] hover:text-green-800">
                              Lihat Selengkapnya
                            </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo "No gedung found.";
      }

      $koneksi->close();
      ?>


    <!-- <div class="bg-[#F3ECDC] flex justify-center p-[46px_0_69px_0] w-full box-sizing-border">
      <div class="shadow-[var(--shadow-shape,0px_10px_25px_0px_rgba(0,0,0,0.07))] rounded-[20px] bg-[#FFFFFF] flex flex-col items-center p-[36px_34px_35.8px_44px] box-sizing-border">
        <div class="m-[0_18px_24px_0] flex flex-row justify-between w-full max-w-[796px] box-sizing-border">
          <div class="m-[0_0_8.2px_0] flex flex-col box-sizing-border">
            <div class="flex self-start box-sizing-border">
              <span class="break-words font-['Inter'] font-normal text-[21.8px] tracking-[-0.2px] leading-[1.468] text-[#073937]">
                Gedung Serba Guna Worshix
              </span>
            </div>
            <div class=" m-[0_0_0_0px] w-[fit-content] box-sizing-border">
              <div class=" flex p-[0_4.8px_0_0] box-sizing-border">
                <div class=" flex flex-row box-sizing-border">
                  <div class="m-[2.1px_3.8px_7.9px_0] flex w-[18.7px] h-[18px] box-sizing-border">
                    <img class="w-[18.7px] h-[18px]" src="../public/asset/star.svg" />
                  </div>
                  <span class="m-[0_0.5px_0_0] break-words font-['Inter'] font-bold text-[16.6px] tracking-[0px] leading-[1.681] text-[#073937]">
                    4.3
                  </span>
                  <span class="break-words font-['Inter'] font-normal text-[17.6px] tracking-[0px] leading-[1.587] text-[#073937]">
                    /5 (
                  </span>
                  <div class="m-[3.9px_0_3.1px_0] flex box-sizing-border">
                    <span class="break-words font-['Inter'] font-normal text-[16.5px] underline leading-[1.258] text-[#073937]">
                      999+ reviews
                    </span>
                  </div>
                </div>
                <span class=" right-[0px] bottom-[0px] break-words font-['Inter'] font-normal text-[18px] tracking-[0px] leading-[1.55] text-[#073937]">
                  )
                </span>
                <span class=" right-[0px] bottom-[0px] break-words font-['Inter'] font-normal text-[16.9px] tracking-[0px] leading-[1.653] text-[#073937]">
                     | Kiaracondong, Bandung
                  </span>
              </div>
              
            </div>
          </div>
          <div class="m-[0px_0_0_0] flex flex-col items-end box-sizing-border">
            <div class="m-[0_0px_8px_0] flex flex-row w-[fit-content] box-sizing-border">
              <div class="m-[0_12px_0_0] flex box-sizing-border">
                <div class="rounded-[15px] bg-[#EAECE2] flex p-[0_16px_0_12px] box-sizing-border">
                  <span class="break-words font-['Inter'] font-normal text-[11.6px] tracking-[0.1px] leading-[2.581] text-[#073937]">
                    Sound System Umum
                  </span>
                </div>
              </div>
              <div class="flex box-sizing-border">
                <div class="rounded-[15px] bg-[#EAECE2] flex p-[0_8.5px_0_12px] box-sizing-border">
                  <span class="break-words font-['Inter'] font-normal text-[11.4px] tracking-[0.1px] leading-[2.623] text-[#073937]">
                    Kapasitas 500 orang
                  </span>
                </div>
              </div>
            </div>
            <div class="flex flex-row w-[fit-content] box-sizing-border">
              <div class="m-[0_11.1px_0_0] flex box-sizing-border">
                <div class="rounded-[15px] bg-[#EAECE2] flex p-[0_15px_0_12px] box-sizing-border">
                  <span class="break-words font-['Inter'] font-normal text-[11.6px] tracking-[0.1px] leading-[2.581] text-[#073937]">
                    Ruangan Ber AC
                  </span>
                </div>
              </div>
              <div class="flex box-sizing-border">
                <div class="rounded-[15px] bg-[#EAECE2] flex p-[7px_12px_7px_12px] box-sizing-border">
                  <span class="break-words font-['Inter'] font-normal text-[11.1px] leading-[1.443] text-[#073937]">
                    +2 lainnya
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-row w-[fit-content] box-sizing-border">
          <div class="rounded-[15px] m-[0_40px_0.2px_0] flex w-[500px] box-sizing-border">
            <div class="bg-[url('../public/asset/worsix.png')]  flex flex-row gap-[0_6px] p-[276.6px_0_16.4px_0] w-[500px] h-[fit-content] box-sizing-border">
            </div>
          </div>
          <div class="flex flex-col box-sizing-border">
            <div class="m-[0_0_16px_0] flex self-start box-sizing-border">
              <span class="break-words font-['Inter'] font-normal text-[9.5px] tracking-[0.6px] leading-[1.259] text-[#073937]">
                HARGA SEWA GEDUNG
              </span>
            </div>
            <div class="m-[0_0_176.2px_0] flex w-[274px] box-sizing-border">
              <div class="border-b-[4px_solid_rgba(0,0,0,0.1)] flex flex-row justify-between p-[8px_1.2px_7.9px_0] w-[274px] h-[fit-content] box-sizing-border">
                <div class="flex box-sizing-border">
                  <span class="break-words font-['Inter'] font-normal text-[13.6px] tracking-[0.1px] leading-[1.474] text-[#073937]">
                    Total Harga
                  </span>
                </div>
                <div class="flex box-sizing-border">
                  <span class="break-words font-['Inter'] font-bold text-[12.9px] tracking-[0.1px] leading-[1.549] text-[#073937]">
                    Rp 700K
                  </span>
                </div>
              </div>
            </div>
            <div class="m-[0_9.4px_0_0] flex flex-col self-center w-[150.6px] box-sizing-border">
                <div class="rounded-[1000px] border-[4px_solid_#588157] bg-[#588157] flex justify-center items-center p-[2px_0] w-[108.6px] h-[40px] box-sizing-border transition hover:bg-green-600 focus:bg-green-600 active:bg-green-800" style="margin-left: 20px">
                  <a href="booking.php" class="break-words font-['Inter'] font-normal text-center leading-[1.561] text-[#F3ECDC] hover:text-[#EAECE2]">
                    Book Now
                  </a>
                </div>
                <a href="detail.php" class="break-words font-['Inter'] font-normal text-center  text-[#588157] hover:text-green-800">
                    Lihat Selengkapnya
                  </a>
              </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>
  


<footer>
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