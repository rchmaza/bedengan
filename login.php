<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    
    <style type="text/css">
    .tulis {
          font-family: 'Nunito', sans-serif;
          font-size: 18px;
          color: #000000;
        }
    input {
			width: 350px;
			padding: 10px 20px;
			border-radius: 30px;
			background-color: white;
			font-size: 15px;
		}
    .tulis p {
    margin-top: 20px;
    }
    .container3 {
			width: 500px;
			height: auto;
			padding-bottom: 20px;
			background: #808080;
      opacity: 90%;
			border-radius: 50px;
			text-align: center;
		}

    </style>

    <title>Taman Wisata Bedengan</title>
  </head>
  <body style="background-image: url(images/background/bedengan.jpg); background-size:cover">
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
    ?>

  <!-- Jumbotron -->
      <div class="">
        <div class="container">
          <h1 class="" style="color: white; text-align: center;"><span class="font-weight-bold">TAMAN WISATA BEDENGAN</span></h1>
          <hr>
          <p class="lead font-weight-bold" style="color: white; text-align: center;">Cocok Camping Disini <br> </p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  
  <!-- Menu -->    
  <div class="container" style="margin-top: 20px; margin-left: 420px;">
  <?php
			if (isset($_POST['login'])) {
				$iduser = $_POST['iduser'];
				$password = $_POST['password'];

				$sql = 'SELECT iduser, password FROM user where iduser="'.$iduser.'"';
				$result = $conn->query($sql);
				
				if($result->num_rows > 0) { //user id benar
					$row=$result->fetch_assoc();
					if($row['password'] != null) {
						if($row['password']==$password) { //berhasil login
							header("Location: http://localhost/bedengan_2/index.php");
						}
						else { //password salah
							?>
							<div class="alert alert-warning">
								<strong>Wrong Password!</strong> Please write the right password</a>
							</div>
							<?php
						}
					}
				}
				else { //tidak menemukan user_id
					?>
					<div class="alert alert-warning">
						<strong>User Not Found!</strong> Please write the right user id</a>
					</div>
					<?php
				}
			}
		?>	
    <div class="row">
    		<div class="col">
    			<div class="container3">
    				<form name="masuk" method="POST" onsubmit="return validateForm()">
						<p style="font-family: 'Croissant One', cursive; font-size: 35px; padding-top: 30px;"><b>LOGIN</b></p>
							<div class="tulis">
								<p>User ID</p>
								<input type="text" name="iduser" placeholder="Username" >
								<p>Password</p>
								<input type="password" name="password" placeholder="Password"></br>
							</div>
						<button style="width: 182px; height: 60px; font-family: 'Poppins', sans-serif; font-size: 20px; background-color: black; color:white; border: none; border-radius: 50px; cursor: pointer; margin-top: 30px;"
            type="submit" name="login">SUBMIT</button>
						<p style="font-family: 'Nunito', sans-serif; padding-top: 10px;">Don't Have an Account ? <a href="register.html" style="color: white; font-family: 'Nunito', sans-serif;">Make One ! </a></p>
					</form>
    			</div>
    		</div>
    		
    	</div>
    </div>
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->
  <script>
		function validateForm() {
			if (document.forms["masuk"]["iduser"].value == "") {
				alert("User ID Tidak Boleh Kosong !");
				document.forms["masuk"]["iduser"].focus();
				return false;
			}
			if (document.forms["masuk"]["password"].value == "") {
				alert("Password Tidak Boleh Kosong !");
				document.forms["masuk"]["password"].focus();
				return false;
			}
		}
	</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  
  </body>
</html>