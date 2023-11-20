
<?php require '../layouts/navbar_user.php'; ?>
<div class="position-relative mt-5 text-light">
    <img src="../img/baju3.jpg.png" width="272px" height="307px">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card">
            <div class="card-body">
                <p class="fw-bolder">Info Pengiriman : </p>
                <p>Produk : Baby Astronaut</p>
                <?php
    session_start();

    // Munculkan data yang disimpan dalam sesi
    if (isset($_SESSION['jenis_transaksi']) && 
        isset($_SESSION['jenis_pengiriman']) 
        ) {
        echo "<p>Transaksi: " . $_SESSION['jenis_transaksi'] . "</p>";
        echo "<p>Ekspedisi: " . $_SESSION['jenis_pengiriman'] . "</p>";
    } else {
        echo "<p>Data tidak tersedia.</p>";
    }
    ?>
                <p>Sub Total : Rp.85.000</p>
                <a href="selesai.php" class="btn">Selesai Checkout</a>
                <a href="all_tshirt.php" class="btn">Pesan Lagi</a>
            </div>
        </div>
    </div>
</div>