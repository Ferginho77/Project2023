<?php 
require'function.php';
$id_transaksi = $_GET["id_transaksi"];
  if(isset($_GET["id_transaksi"])){
      $id_transaksi = $_GET["id_transaksi"];
      $penjualan = cash("SELECT * FROM kelola_transaksi WHERE id_transaksi = $id_transaksi")[0];
      if(isset($_POST["submit"])) {
        if(change($_POST) > 0) {
            echo "<script>alert ('berhasil');
            document.location.href = 'lapor.php';
            </script>";
         
        }
        else{
              echo "Gagal";  
        }
    
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
      <input type="hidden" name="id_transaksi" value="<?= $penjualan["id_transaksi"];?>">
      <div class="mb-3">
          <label for="" class="form-label">Tanggal Transaksi</label>
          <input value="<?= $penjualan["tanggal_transaksi"];?>" type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="Tanggal Transaksi" <?= $penjualan["tanggal_transaksi"];?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Barang</label>
          <select class="form-select" name="jenis_barang" id="jenis_barang" <?= $penjualan["jenis_barang"];?>>
            <option>Pilih Jenis</option>
              <option>T Shirt</option>
              <option>Hoodie</option>
            </select>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Jumlah</label>
          <input value="<?= $penjualan["jumlah"];?>" type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" <?= $penjualan["jumlah"];?>>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Harga</label>
          <input value="<?= $penjualan["harga"];?>" type="text" class="form-control" name="harga" id="harga" placeholder="Harga" <?= $penjualan["harga"];?>> 
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Jenis Transaksi</label>
          <select class="form-select" name="jenis_transaksi" id="jenis_transaksi" <?= $penjualan["jenis_transaksi"];?>>
            <option>Pilih Jenis</option>
              <option>COD</option>
              <option>Transfer</option>
            </select>
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