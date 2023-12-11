<?php 
require'function.php';
$id_pengiriman = $_GET["id_pengiriman"];
  if(isset($_GET["id_pengiriman"])){
      $id_pengiriman = $_GET["id_pengiriman"];
      $penjualan = kiriman("SELECT * FROM kelola_pengiriman WHERE id_pengiriman = $id_pengiriman")[0];
      if(isset($_POST["submit"])) {
        if(ngubah($_POST) > 0) {
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
  <h3 class="text-center text-light mt-3">Kelola Pengiriman</h3>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Pengiriman
  </div>
  <div class="card-body text-dark">
      <form action="" method="post">
      <input type="hidden" name="id_pengiriman" value="<?= $penjualan["id_pengiriman"];?>">
      <div class="mb-3">
          <label for="nama" class="form-label">No Resi </label>
          <input value="<?= $penjualan["no_resi"];?>" type="text" class="form-control" name="no_resi" id="no_resi" placeholder="No Resi" <?= $penjualan["no_resi"];?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Nama Penerima </label>
          <input value="<?= $penjualan["nama_penerima"];?>" type="text" class="form-control" name="nama_penerima" id="nama_penerima" placeholder="Nama Penerima" <?= $penjualan["nama_penerima"];?>>
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Alamat</label>
          <input value="<?= $penjualan["alamat_penerima"];?>" type="text" class="form-control" name="alamat_penerima" id="alamat_penerima" placeholder="Alamat" <?= $penjualan["alamat_penerima"];?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Telepon Penerima</label>
          <input value="<?= $penjualan["telepon_penerima"];?>" type="text" class="form-control" name="telepon_penerima" id="telepon_penerima" placeholder="Telepon Penerima" <?= $penjualan["telepon_penerima"];?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Kode Pos</label>
          <input value="<?= $penjualan["kode_pos"];?>" type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" <?= $penjualan["kode_pos"];?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis pengiriman</label>
          <select class="form-select" name="jenis_pengiriman" id="jenis_pengiriman">
              <option>Pilih</option>
              <option>Si Cepat</option>
              <option>JNE</option>
              <option>JNT</option>
              <option>Anter Aja</option>
            </select>
            <div class="mb-3">
          <label for="nama" class="form-label">Catatan pengiriman</label>
          <input value="<?= $penjualan["catatan_pengiriman"];?>" type="text" class="form-control" name="catatan_pengiriman" id="catatan_pengiriman" placeholder="Catatan pengiriman" <?= $penjualan["catatan_pengiriman"];?>>
      </div>
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
