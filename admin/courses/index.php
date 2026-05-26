<?php
include '../security.php';
include '../../koneksi.php';

$sql = "SELECT * FROM courses";
$query = mysqli_query($conn, $sql);

?>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th></th>
        </tr>
    <tbody>
        <?php
        $no = 1;
        while ($result = mysqli_fetch_assoc($query)) {
            $name = $result['name'];
            $description = $result['description'];
            $price = number_format($result['price'], 0, ',', '.');
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $name ?></td>
                <td><?= $description ?></td>
                <td>Rp <?= $price ?></td>
                <td>Ubah | Hapus</td>
            </tr>
        <?php
            $no++;
        } ?>
    </tbody>
</table>