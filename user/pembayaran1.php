<?php 
require'function.php';
$pembelian = query("SELECT * FROM pembelian");
?>

<?php require '../layouts/navbar_user.php'; ?>
<div class="position-relative mt-5 text-light">
    <img src="../img/baju1.jpg.png" width="272px" height="307px">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card">
            <div class="card-body">
                <p class="fw-bolder">Info Pengiriman : </p>
                <p>Produk : Red Tshirt</p>
                <?php foreach($pembelian as $tampil) : ?>
                    <p>Pembayaran :<?= $tampil["jenis_transaksi"];?> </p>
                <p>Ekspedisi :<?= $tampil ["jenis_pengiriman"];?> </p>
                <?php endforeach; ?>
                
                <a href="selesai.php" class="btn">Selesai Checkout</a>
                <a href="all_tshirt.php" class="btn">Pesan Lagi</a>
            </div>
        </div>
    </div>
</div>