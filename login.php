<?php
include 'koneksi.php';
include 'header.php';
?>

<section>
    <form action="sv_login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>
    </form>
</section>