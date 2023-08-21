<?php
require_once 'backend/session.php';
require_once 'backend/connection.php';
include 'backend/pemesanan.php';

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

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>HISTORY</h4>
          <h2>RIWAYAT PEMESANAN</h2>
          <h3 style="color: white;">HUBUNGI NOMOR ADMIN DIBAWAH UNTUK MELAKUKAN PEMBAYARAN</h3>
         
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
                <h4>Silahkan <em>Check</em> Ground yang <em>dipesan pelanggan</em></h4>
              </div>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tgl Sewa</th>
                    <th scope="col">Status</th>
                    <th scope="col">Harga Total</th> 
                    <th scope="col">Detail</th>
                    <th scope="col">Aksi</th> 

                   
                    
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1; if (isset($result_data)) {
                foreach ($result_data as $item) {?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $item['user_name'] ?></td>
                        <td><?= $item['order_date'] ?></td>
                        <td><?= $item['status'] ?></td>
                        <td><?= $item['total'] ?></td>
                        <td><a href="" class="link-detail" data-order_id="<?= $item['order_id'] ?>">Detail</a></td>
                        <td><a href="" class="link-manage" data-order_id="<?= $item['order_id'] ?>" >Manage</a></td>

                    </tr>
                    <?php $i++;}} ?>
                </tbody>
              </table>
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Rincian Pemesanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table" id="detail_table">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ground</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tgl Sewa</th>
                    <th scope="col">Tgl Berakhir</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="manageModal" tabindex="-1" aria-labelledby="manageModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <form method="post">
              <div class="modal-header">
                  <h5 class="modal-title" id="manageModalLabel">Rubah Status Pemesanan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-12">
                          <select class="form-select" aria-label="Default select example" name="status">
                              <option value="inactive">Tidak aktif</option>
                              <option value="active">Aktif</option>
                              <option value="done">Selesai</option>
                              <option value="cancel">Batal</option>
                          </select>
                          <input type="hidden" name="order_id" value="" class="script-id">
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" name="update_status" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
              </form>
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
        $('.link-manage').on('click', function(e) {
            e.preventDefault(); // Prevent the default link behavior
            const order_id = $(this).data('order_id');
            const manageModal = $('#manageModal');
            manageModal.find('.script-id').val(order_id);
            manageModal.modal("show");
        });


      $('#detailModal').on('show.bs.modal', function(event) {
        const button = $(event.relatedTarget); // Button that triggered the modal
        const item = button.data('item'); // Get the item from the button's data attribute
        const modal = $(this); // The modal element

        //modal.find('.modal-title').text(`Modal for ${item}`);
        //modal.find('.modal-body').html(`This is the content for ${item}.`);
      });

      // Attach click event to item links
      $('.link-detail').on('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
          const order_id = $(this).data('order_id');
          const modalDetail = $('#detailModal');

          $.ajax({
              type: "GET",
              url: "backend/order-detail.php",
              data: {
                  order_id: order_id,
              },
              success: function (response) {
                  if (!response.success) {
                      alert("Gagal");
                  }

                  populateTable(response.data)
                  modalDetail.modal("show");
              }
          });
      });
    });

    function populateTable(data) {
        let tableBody = $('#detail_table tbody');
        tableBody.empty(); // Clear existing table rows

        let i = 1;

        data.forEach(function(detail) {
            let newRow = $('<tr>');
            newRow.append('<td>' + i + '</td>');
            newRow.append('<td>' + detail.name + '</td>');
            newRow.append('<td>' + detail.price + '</td>');
            newRow.append('<td>' + detail.day + '</td>');
            newRow.append('<td>' + detail.start_date + '</td>');
            newRow.append('<td>' + detail.end_date + '</td>');

            tableBody.append(newRow);
            i++;
        });
    }
  </script>

  </body>

</html>
