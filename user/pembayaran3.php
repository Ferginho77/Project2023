<?php require'function.php';
$kelola_penjualan = query("SELECT * FROM kelola_penjualan ORDER BY id_penjualan DESC LIMIT 1");
?>

<?php require '../layouts/navbar_user.php'; ?>
<div class="position-relative mt-5 text-light">
    <img src="../img/baju3.jpg.png" width="272px" height="307px">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card">
            <div class="card-body">
                <?php foreach($kelola_penjualan as $tampil) : ?>

                
                    <p>Produk :<?= $tampil["jenis_baju"]; ?></p>
                    <p>Ukuran : <?= $tampil["ukuran"]; ?></p>
                    <p>Pembayaran :<?= $tampil["jenis_transaksi"]; ?></p>
                    <p>Ekspedisi :<?= $tampil["jenis_pengiriman"]; ?></p>
                    <p>Jumlah :<?= $tampil["jumlah"]; ?></p>
                    <p>Harga :Rp.<?= $tampil["harga"]; ?></p>

                <?php endforeach;?>
                <a href="selesai.php" class="btn">Selesai Checkout</a>
                <a href="all_tshirt.php" class="btn">Pesan Lagi</a>
            </div>
        </div>
    </div>
</div>