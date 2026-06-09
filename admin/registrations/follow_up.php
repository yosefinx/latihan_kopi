<?php
include '../../koneksi.php';
include '../security.php';

$registration_id = $_GET['id'];

$sql_admin = "SELECT id FROM users WHERE username='$username'";
$query_admin = mysqli_query($conn, $sql_admin) or die($sql_admin);
$result_admin = mysqli_fetch_assoc($query_admin);
$admin_id = $result_admin['id'];

$sql = "UPDATE registrations SET is_followed_up=1, followed_up_by='$admin_id', followed_up_at=NOW() WHERE id='$registration_id'";
$sql_query = mysqli_query($conn, $sql) or die($sql);

header("Location: index.php");
exit;
