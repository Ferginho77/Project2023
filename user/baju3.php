<?php require'function.php';
//FUNGSI TAMBAH PEMBELIAN BAJU
if(isset($_POST["submit"])) {
    if(beli($_POST) > 0) {
     header("location:pembayaran3.php");
    } else {
      echo "gagal";
    }

  }

?>

<?php require '../layouts/navbar_user.php'; ?>
<div class="position-relative mt-5 text-light">
<img src="../img/baju3.jpg.png" width="272px" height="307px">
<div class="position-absolute top-50 start-50 translate-middle">
    <h3>Baby Astronaut</h3>
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
                    
                    <form action="" method="post">
                     <input type="hidden" name="jenis_baju" id="jenis_baju" value="Baby Astronaut">
                     <label for="jenis_baju">Baby Astronaut</label>
                     <select class="form-select" name="ukuran" id="ukuran">
                            <option>Pilih Ukuran</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                          
                        </select>
                        <select class="form-select mt-3" name="jenis_transaksi" id="jenis_transaksi">
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
                       <!-- Menentukan Jumlah -->
                       <label for="jumlah">Jumlah:</label>
        <input class="mt-3" type="number" name="jumlah" id="jumlah" required><br>

        <label for="harga">Harga:</label>
        <!-- Harga awal diatur menjadi 55,000 -->
        <input class="mt-3" type="number" name="awal" id="awal" value="55000" readonly><br>

        <button class="btn" type="button" onclick="hitungTotal()">Hitung Total</button>

        <input class="mt-3" type="text" name="harga" id="harga" placeholder="Harga total" readonly>
                    <button type="submit" name="submit" class="btn">Beli</button>
                    </form>
                </div>
            </div>
    
</div>
<!-- SISTEM QUANTITY -->
<script>
        function hitungTotal() {
            // Ambil nilai dari input jumlah dan harga
            var jumlah = document.getElementById('jumlah').value;
            var awal = document.getElementById('awal').value;

            // Hitung total
            var harga = jumlah * awal;

            // Setel nilai total ke dalam input total
            document.getElementById('harga').value = harga;
        }
    </script>
