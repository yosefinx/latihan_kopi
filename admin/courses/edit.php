<?php
include '../security.php';
include '../../koneksi.php';

$id = $_GET['id'];

if ($id == '') {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM courses WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}

//buat untuk menangani proses update data course biar error bisa masuk melalui $error
// if (isset($_POST['ubah'])) {
//     $id_course = $_POST['id'];
//     $title = trim($_POST['title']);
//     $description = trim($_POST['description']);
//     $price = (int) $_POST['price'];

//     if ($title == '' || $description == '' || $price <= 0) {
//         $error = "Semua field wajib diisi dengan benar.";
//     } else {
//         $sql_update = "UPDATE courses SET name='$title', description='$description', price='$price' WHERE id='$id_course'";
//         $query_update = mysqli_query($conn, $sql_update);

//         if ($query_update) {
//             header("Location: index.php");
//             exit;
//         } else {
//             $error = "Data gagal diubah di database.";
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Course</title>
</head>

<body>
    <h1>Edit Course</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <?php /* if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; */ ?>
    <form method="POST" action="ubah.php">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Judul Course</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($data['name']); ?>">

        <br><br>

        <label>Deskripsi</label><br>
        <textarea name="description" rows="5" cols="40"><?= htmlspecialchars($data['description']); ?></textarea>

        <br><br>

        <label>Harga</label><br>
        <input type="number" name="price" value="<?= $data['price']; ?>">

        <br><br>

        <button type="submit" name="ubah">Ubah</button>
    </form>
</body>

</html>