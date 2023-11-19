<?php 
require'function.php';
if(isset($_POST["submit"])) {
    if(pengiriman($_POST) > 0) {
      echo "<script>alert ('berhasil');
      document.location.href = 'pembayaran1.php';
      </script>";
    } else {
      echo "gagal";
    }

  }

?>

<?php require '../layouts/navbar_user.php'; ?>
<div class="position-relative mt-5 text-light">
<img src="../img/baju1.jpg.png" width="272px" height="307px">
<div class="position-absolute top-50 start-50 translate-middle">
    <h3>Red T-Shirt</h3>
    <h3 class="fw-bold">Rp.55.000</h3>
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
                    <p>Red T-Shirt</p>
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
                   
                        <p class="fw-bold">Subtotal : Rp.55.000</p>
                    <button type="submit" name="submit" class="btn">Beli</button>
                </form>
                </div>
            </div>
    
</div>