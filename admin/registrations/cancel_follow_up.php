<?php
include "../security.php";
include "../../koneksi.php";

$registration_id = $_GET['id'];

$sql = "UPDATE registrations SET is_followed_up=0, followed_up_by=NULL, followed_up_at=NULL WHERE id='$registration_id'";
$query = mysqli_query($conn, $sql) or die($sql);
header("Location: index.php");
exit;
