<?php 
require'function.php';
$id_penjualan = $_GET["id_penjualan"];
  if(isset($_GET["id_penjualan"])){
      $id_penjualan = $_GET["id_penjualan"];
      $penjualan = jual("SELECT * FROM kelola_penjualan WHERE id_penjualan = $id_penjualan")[0];
      if(isset($_POST["submit"])) {
        if(edite($_POST) > 0) {
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


<?php require'layouts/navbar.php'?>
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
      <input type="hidden" name="id_penjualan" value="<?= $penjualan["id_penjualan"];?>">
      <div class="mb-3">
        <label for="" class="form-label">Jenis Baju</label>
        <input value="<?= $penjualan["jenis_baju"];?>" type="text" class="form-control" name="jenis_baju" id="jenis_baju" placeholder="jenis baju" <?= $penjualan["jenis_baju"];?>>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Ukuran</label>
        <select value="<?= $penjualan["ukuran"];?>" class="form-select" name="ukuran" id="ukuran" <?= $penjualan["ukuran"];?>>
          <option>S</option>
          <option>M</option>
          <option>L</option>
          <option>XL</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Jenis transaksi</label>
        <select value="<?= $penjualan["jenis_transaksi"];?>" class="form-select" name="jenis_transaksi" id="jenis_transaksi" <?= $penjualan["jenis_transaksi"];?>>
        <option>COD</option>
        <option>Transfer</option>
       </select>
      <div class="mb-3">
        <label for="" class="form-label">Jenis pengiriman</label>
        <select value="<?= $penjualan["jenis_pengiriman"];?>" class="form-select" name="jenis_pengiriman" id="jenis_pengiriman" <?= $penjualan["jenis_pengiriman"];?>>
        <option>JNE</option>
        <option>JNT</option>
        <option>Si Cepat</option>
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