<?php 
require'function.php';
if(isset($_POST["submit"])) {
  if(transaksi($_POST) > 0) {
    echo "<script>alert ('berhasil');
    document.location.href = 'lapor.php';
    </script>";
  } else {
    echo "gagal";
  }

}
?>


<?php require'layouts/navbar.php';?>
<div class="container">
  <h3 class="text-center text-light mt-3">Kelola Transaksi</h3>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Transaksi
  </div>
  <div class="card-body">
      <form action="" method="post">
      <div class="mb-3">
          <label for="" class="form-label">Tanggal Transaksi</label>
          <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="Tanggal Transaksi">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Barang</label>
          <select class="form-select" name="jenis_barang" id="jenis_barang">
            <option>Pilih Jenis</option>
              <option>T Shirt</option>
              <option>Hoodie</option>
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
      <div class="mb-3">
          <label for="" class="form-label">Catatan</label>
          <input type="text" class="form-control" name="catatan_transaksi" id="catatan_transaksi" placeholder="Catatan">
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