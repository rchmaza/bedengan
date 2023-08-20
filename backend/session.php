<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user'];
$is_admin = $_SESSION['is_admin'];