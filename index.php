<?php
include 'koneksi.php';
include 'header.php';
?>

<section>
    <h2>Tentang Program</h2>
    <p> Kelas Kopi Online adalah program pelatihan sederhana untuk pemula yang ingin belajar teknik dasar menyeduh kopi, membuat latte art, dan memahami peluang bisnis kopi rumahan.</p>
</section>
<section>
    <h2>Pilihan Kelas</h2>
    <div>
        <?php
        $sql = "SELECT * FROM courses";
        $query = mysqli_query($conn, $sql);
        ?>
        <div class="cards">
            <?php
            while ($result = mysqli_fetch_assoc($query)) {
            ?>
                <div class="card">
                    <h3><?= $result['name'] ?></h3>
                    <p><?= $result['description'] ?></p>
                    <strong>Rp <?= number_format($result['price'], 0, ',', '.') ?></strong>
                </div>
            <?php }  ?>
        </div>
    </div>
</section>
<section>
    <h2>Form Pendaftaran</h2>

</section>
</body>

</html>