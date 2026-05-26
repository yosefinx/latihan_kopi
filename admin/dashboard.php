<?php
include 'security.php';
//session_start();
$username = $_SESSION['username'];

echo "Selamat datang, $username!";

?>
<br>
<a href="courses/index.php">Managemen Kelas</a>
<br>
<a href="logout.php">Logout</a>