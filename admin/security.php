<?php
session_start();
$username = $_SESSION['username'];
if (!isset($username)) {
    header("Location: ../login.php");
    exit;
}
