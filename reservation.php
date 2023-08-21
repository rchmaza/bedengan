<?php
require_once 'backend/session.php';
require_once 'backend/connection.php';
include 'backend/cart.php';

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
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
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
                        <li><a href="about.html">Ground</a></li>
                        <li><a href="reservation.php" class="active">Cart</a></li>
                        <li><a href="backend/logout.php">Log Out</a></li>
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

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>PEMESANAN</h4>
          <h2>Ground Camping</h2>
          <p>Scroll kebawah untuk melihat ground camping yang akan anda sewa</p>
         
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">company@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Place</h4>
            <a href="#">Umbuldawe, Kaliasri, Kec. Kalipare, Kabupaten Malang, Jawa Timur 65166</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!--<div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
          </div>-->
        </div>
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-12">
                <h4>Silahkan <em>Check</em> Ground yang <em>anda pesan</em></h4>
              </div>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ground</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Hari</th> 
                    <th scope="col">Tgl Sewa</th>
                    <th scope="col">Tgl Berakhir</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php $i = 1; if (isset($cartItems)) {
                foreach ($cartItems as $cartItem) {?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $cartItem['ground_name'] ?></td>
                    <td><?= $cartItem['ground_price'] ?></td>
                    <td><?= $cartItem['day'] ?></td>
                    <td><?= $cartItem['start_date'] ?></td>
                    <td><?= $cartItem['end_date'] ?></td>
                    <td>
                      <a href="#" class="link-delete-script" data-cart_id="<?= $cartItem['cart_id'] ?>" >Delete</a>
                    </td>
                  </tr>

                    <?php $i++;}} ?>
                </tbody>
              </table>
              <div class="col-lg-12 d-flex justify-content-center">            
                  <div class="main-button">
                    <a href="history.php">Sewa sekarang</a>
                  </div> 
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });

    $(document).ready(function() {
        $('.link-delete-script').on('click', function(e) {
            const cart_id = $(this).data('cart_id');

            $.ajax({
                type: "POST",
                url: "backend/cart-delete.php",
                data: {
                    cart_id: cart_id
                },
                success: function (response) {
                    if (response.success){
                        location.reload();
                    }else{
                        alert(response.message);
                    }
                }
            });
        });
    });
  </script>

  </body>

</html>
