<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "bedengan_3";
   $user = "";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       echo("Connection failed: " . $conn->connect_error);
       exit();
   }
  session_start();
  if (!isset($_SESSION['iduser'])){
      header("Location: login.php");
  }
    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Taman Wisata Bedengan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css-baru/fontawesome.css">
    <link rel="stylesheet" href="css-baru/templatemo-woox-travel.css">
    <link rel="stylesheet" href="css-baru/owl.css">
    <link rel="stylesheet" href="css-baru/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** 
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>-->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a style="font-size: 30px; margin-left: -70px; margin-top: 10px;"class="navbar-brand text-white" href="#"><strong>Taman</strong> Wisata Bedengan</a>
                     
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="daftar_menu.php" class="active">Ground</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        
                        
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>COCOK CAMPING DISINI</h4>
            <div class="line-dec"></div>
            <h2>Welcome To Bedengan</h2>
            <p>Mari kita berpetualang dan merasakan keajaiban alam dengan berkemah di bawah langit terbuka, mengisi waktu dengan momen tak terlupakan di tengah keindahan alam semesta</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2 style="color: white;">Tersedia Berbagai Ground Untuk Camping</h2>
            
            <div class="row mb-5 mt-5 ">
              <div class="col-md-4 d-flex justify-content-end" style="margin-left: 8%;">
                <div class="card-body" style="position: relative;">
                  <img src="images/Background/menu5.jpg" style="height: 300px; width: 400px; border-radius: 10px;filter: blur(6px) brightness(80%);" class="card-img" alt="Lihat Daftar Menu">
                  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center"> <!-- Ganti class mt-5 dengan class d-flex, flex-column, justify-content-center, dan align-items-center -->
                    <div class="main-button">
                      <a href="menuground.php">DAFTAR GROUND</a>
                    </div>
                  </div>
                </div> 
              </div>
  
              <div class="col-md-2 d-flex justify-content-center align-items-center">
                <div style="width: 2px; height: 300px; background-color: white;"></div>
              </div>

              <div class="col-md-4 d-flex justify-content-end" style="margin-left: 8%;">
                <div class="card-body" style="position: relative; margin-right: -200px;">
                  <img src="images/Background/menu5.jpg" style="height: 300px; width: 400px; border-radius: 10px;filter: blur(6px) brightness(80%);" class="card-img" alt="Lihat Daftar Menu">
                  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center"> <!-- Ganti class mt-5 dengan class d-flex, flex-column, justify-content-center, dan align-items-center -->
                    <div class="main-button">
                      <a href="menuground.php">LIHAT PESANAN</a>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Direct by Team <a href="#">Bahtiar</a> All rights reserved. 
          
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="js-baru/isotope.min.js"></script>
  <script src="js-baru/js/owl-carousel.js"></script>
  <script src="js-baru/js/wow.js"></script>
  <script src="js-baru/js/tabs.js"></script>
  <script src="js-baru/js/popup.js"></script>
  <script src="js-baru/js/custom.js"></script>


  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
