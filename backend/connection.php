<?php
$conn_host = 'localhost';
$conn_username = 'root';
$conn_password = '';
$conn_database = 'bedengan';

$db = new mysqli($conn_host, $conn_username, $conn_password, $conn_database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}