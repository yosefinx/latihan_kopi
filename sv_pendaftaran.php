<?php
include 'koneksi.php';

$full_name = trim($_POST['full_name']) ?? '';
$email = trim($_POST['email']) ?? '';
$phone_number = trim($_POST['phone_number']) ?? '';
$course_id = (int) ($_POST['course_id'] ?? 0);
$participant_count = (int) ($_POST['participant_count'] ?? 0);

$course_price = "SELECT price FROM courses WHERE id='$course_id'";
$course_price_query = mysqli_query($conn, $course_price) or die($course_price);
$course_price_result = mysqli_fetch_assoc($course_price_query);
$unit_price = $course_price_result['price'] ?? 0;

$sql = "INSERT INTO registrations (full_name, email, phone_number, course_id, participant_count, unit_price) VALUES ('$full_name', '$email', '$phone_number', '$course_id', '$participant_count', '$unit_price')";

$query = mysqli_query($conn, $sql);

header("Location: index.php");
exit;
