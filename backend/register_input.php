<?php
require_once 'connection.php';
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO user (name, username, phone, password)
VALUES ('$name','$username','$phone','$password')";

$result  = mysqli_query($db, $sql);

if ($result) {
    header('Location: ../login.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);