<?php
require_once 'backend/connection.php';
session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
}


if (isset($_POST['signIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['id'];
        $_SESSION['is_admin'] = $row['is_admin'];
        header("Location: index.php");
    } else {
        echo "<script>alert('ID User atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

if (isset($_POST['signUp'])){

}

?>


<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="assets/pages/login-form.css">
<script src="assets/pages/login-form.js"></script>

<body>

<h2>Welcome To Bedengan !</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="backend/register_input.php" name="signUp">
			<h1>Create Account</h1>
			<input type="text" name="name" placeholder="Nama" />
            <input type="text" name="username" placeholder="Username" />
			<input type="text" name="phone" placeholder="No Telepon" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="signUp">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form name="signIn" method="POST">
			<h1>Sign in</h1>
			<input type="text" name="username" placeholder="Username" />
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