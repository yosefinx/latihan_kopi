<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);

if ($num > 0) {
    $_SESSION['username'] = $username;
    header("Location: admin/dashboard.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}
