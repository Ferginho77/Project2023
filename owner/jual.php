<?php 
require'function.php';
if(isset($_POST["submit"])) {
  if(jualan($_POST) > 0) {
    echo "<script>alert ('berhasil');
    document.location.href = 'lapor.php';
    </script>";
  } else {
    echo "gagal";
  }

}
?>


<?php require'../layouts/navbar_owner.php'?>
<div class="container">
  <h3 class="text-center text-light mt-3">Kelola Penjualan</h3>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Penjualan
  </div>
  <div class="card-body">
      <form action="" method="post">
      <div class="mb-3">
        <label for="" class="form-label">Jenis Baju</label>
        <input type="text" class="form-control" name="jenis_baju" id="jenis_baju" placeholder="jenis baju">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Ukuran</label>
        <select class="form-select" name="ukuran" id="ukuran">
          <option>S</option>
          <option>M</option>
          <option>L</option>
          <option>XL</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Jenis transaksi</label>
        <select class="form-select" name="jenis_transaksi" id="jenis_transaksi">
        <option>COD</option>
        <option>Transfer</option>
       </select>
      <div class="mb-3">
        <label for="" class="form-label">Jenis pengiriman</label>
        <select class="form-select" name="jenis_pengiriman" id="jenis_pengiriman">
        <option>JNE</option>
        <option>JNT</option>
        <option>Si Cepat</option>
       </select>
      
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Jumlah</label>
          <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah">
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Harga</label>
          <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
      </div>
  
          <div class="text-center">
            <hr> <button type="submit" name="submit" class="btn btn-success">Simpan</button>
          </div>

      </form>

  </div>
  <div class="card-footer bg-secondary text-light">
  </div>
</div>
  </div>
  

</div>
</div>