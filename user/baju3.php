<?php
require'function.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simpan pilihan transaksi dan ekspedisi dalam sesi
    $_SESSION['jenis_transaksi'] = $_POST['jenis_transaksi'];
    $_SESSION['jenis_pengiriman'] = $_POST['jenis_pengiriman'];
  

    $jenis_transaksi = $_POST['jenis_transaksi'];
    $kelola_transaksi = "INSERT INTO kelola_transaksi (jenis_transaksi) VALUES ('$jenis_transaksi')";

    if ($koneksi->query($kelola_transaksi) !== TRUE) {
        echo "Error: " . $kelola_transaksi . "<br>" . $koneksi->error;
    }

    $jenis_pengiriman = $_POST['jenis_pengiriman'];
    $kelola_pengiriman = "INSERT INTO kelola_pengiriman (jenis_pengiriman) VALUES ('$jenis_pengiriman')";

    if ($koneksi->query($kelola_pengiriman) !== TRUE) {
        echo "Error: " . $kelola_pengiriman . "<br>" . $koneksi->error;
    }


    // Redirect ke halaman selanjutnya
    header("Location: pembayaran3.php");
    exit();
}

?>

<?php require '../layouts/navbar_user.php'; ?>
<div class="position-relative mt-5 text-light">
<img src="../img/baju3.jpg.png" width="272px" height="307px">
<div class="position-absolute top-50 start-50 translate-middle">
    <h3>baby Astronaut</h3>
    <h3 class="fw-bold">Rp.85.000</h3>
    <h5>Deskripsi Produk : <br> Kondisi:Baru <br> Min Pembelian : 1 </h5>
    <h6>Ready size : S,M,L,XL 
        <br>S : LEBAR 50 CM x PANJANG 72 CM 
        <br>M : LEBAR 52 CM x PANJANG 74 CM
        <br>L  : LEBAR 54 CM x PANJANG 76 CM
        <br>XL : LEBAR 56 CM X PANJANG 78 CM    
    </h6>
</div>

            <div class="card  bg-dark text-light border border-light" style="width: 18rem;">
                <div class="card-body">
                    <h6>Atur Jumlah</h6>
                    <p>Baby Astronaut</p>
                    <form action="" method="post">
                        <select class="form-select" name="jenis_transaksi" id="jenis_transaksi">
                            <option>Pilih Pembayaran</option>
                            <option>COD</option>
                            <option>Transfer</option>
                        </select>
                        <select class="form-select mt-3" name="jenis_pengiriman" id="jenis_pengiriman">
                            <option>Pilih Ekspedisi</option>
                            <option>JNE</option>
                            <option>JNT</option>
                            <option>Si Cepat</option>
                        </select>
                   
                        <p class="fw-bold">Subtotal : Rp.85.000</p>
                    <button type="submit" name="submit" class="btn">Beli</button>
                </form>
                </div>
            </div>
    
</div>