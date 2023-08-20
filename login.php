<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="login-form.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="assets/js/login-form.js"></script>

<body>

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

    <h2>Welcome To Bedengan !</h2>
<div class="container" id="container">

<?php
			session_start();
 
      if (isset($_SESSION['iduser'])) {
          header("Location: index.php");
      }
       
      if (isset($_POST['signIn'])) {
          $iduser = $_POST['iduser'];
          $password = $_POST['password'];
       
          $sql = "SELECT * FROM user WHERE iduser='$iduser' AND password='$password'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows > 0) {
              $row = mysqli_fetch_assoc($result);
              $_SESSION['iduser'] = $row['iduser'];
              header("Location: index.php");
          } else {
              echo "<script>alert('ID User atau password Anda salah. Silahkan coba lagi!')</script>";
          }
      }
      ?>
	<div class="form-container sign-up-container">
		<form method="post" action="register_input.php" name="signUp">
			<h1>Create Account</h1>
			<input type="text" name="nama" placeholder="Nama" />
      <input type="text" name="iduser" placeholder="Username" />
			<input type="text" name="telp" placeholder="No Telepon" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="signUp">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form name="signIn" method="POST">
			<h1>Sign in</h1>
			<input type="text" name="iduser" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			
			<button type="submit" name="signIn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>Sign in dan Jelajahi alam dengan kita</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Sign up jika belum memiliki akun dan mulai menjelajah dengan kita</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	
</footer>
</body>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</html>