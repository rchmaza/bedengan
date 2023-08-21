<?php
require_once 'backend/session.php';
require_once 'backend/connection.php';
include 'backend/ground.php';

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
                        <li><a href="about.html" class="active">Ground</a></li>
                        <li><a href="reservation.php">Cart</a></li>
                        <li><a href="reservation.php">Log Out</a></li>
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Taman Wisata Bedengan</h4>
          <h2>Ground Camping</h2>
          
        </div>
      </div>
    </div>
  </div>

  

  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          
        </div>

        <!-- Start Loop -->
          <?php if (isset($ground_data)):
          foreach ($ground_data as $item) { ?>

              <div class="col-lg-6 col-sm-6">
                  <div class="item">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="image">
                                  <img src="images/Lahan/<?= $item['filename'] ?>" alt="">
                              </div>
                          </div>
                          <div class="col-lg-6 align-self-center">
                              <div class="content">

                                  <h4><?= $item['ground_name'] ?></h4>

                                  <div class="row">
                                      <div class="col-6 d-flex align-items-center">
                                          <i class="fa fa-clock"></i>
                                          <input min="1" id="day_<?= $item['ground_id'] ?>" name="day" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                          <span class="list">(Hari)</span>
                                      </div>
                                      <div class="col-6 d-flex align-items-center">
                                          <input type="date" name="start_date" id="start_date_<?= $item['ground_id'] ?>" />
                                      </div>

                                  </div>
                                  <div class="main-button" style="margin-top: 20px;">
                                      <a href="#" class="link-add-script" data-ground_id="<?= $item['ground_id'] ?>">Add</a>
                                  </div>
                                  <div class="main-button">
                                      <a href="#" class="link-detail-script" data-item="Item 2">Lihat</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          <?php } endif; ?>
        
      </div>
    </div>
  </div>


  <!-- Modal Error -->
  <div class="modal fade" id="errorAddModal" tabindex="-1" aria-labelledby="errorAddModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="errorAddModalLabel">Berhasil!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>Berhasil menambahkan data ke keranjang!</p>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal Detail -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Ground A</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Lahan/A1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/Lahan/A2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/Lahan/A3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
      $('#detailModal').on('show.bs.modal', function(event) {
        const button = $(event.relatedTarget); // Button that triggered the modal
        const item = button.data('item'); // Get the item from the button's data attribute
        const modal = $(this); // The modal element

        modal.find('.modal-title').text(`Modal for ${item}`);
        //modal.find('.modal-body').html(`This is the content for ${item}.`);
      });

      // Attach click event to item links
      $('.link-detail-script').on('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
        const modal = $('#detailModal');
        modal.modal('show'); // Show the modal
      });

        $('.link-add-script').on('click', function(e) {
            e.preventDefault(); // Prevent the default link behavior
            const ground_id = $(this).data('ground_id');
            const day = $('#day_'+ground_id).val();
            const start_date = $('#start_date_'+ground_id).val();

            const modalResponse = $("#errorAddModal");

            $.ajax({
                type: "POST",
                url: "backend/cart-add.php",
                data: {
                    ground_id: ground_id,
                    day: day,
                    start_date: start_date,
                },
                success: function (response) {
                    if (response.success) {
                        modalResponse.find('.modal-title').text('Berhasil!');
                    } else {
                        modalResponse.find('.modal-title').text('Gagal!');
                    }
                    modalResponse.find('.modal-body p').text(response.message);
                    modalResponse.modal("show");
                }
            });
        });
    });
  </script>

  </body>

</html>
