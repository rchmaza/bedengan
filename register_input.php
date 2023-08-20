<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bedengan_3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$nama = $_POST['nama'];
$iduser = $_POST['iduser'];
$telp = $_POST['telp'];
$password = $_POST['password'];

$sql = "INSERT INTO user (nama, iduser, telp, password)
VALUES ('$nama','$iduser','$telp','$password')";

$result  = mysqli_query($conn, $sql);

if ($result)
{
    header("Location: http://localhost/BedenganFixed/login.php");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 