<?php 
require'function.php';
$id_penjualan = $_GET["id_penjualan"];
  if(isset($_GET["id_penjualan"])){
      $id_penjualan = $_GET["id_penjualan"];
      $penjualan = query("SELECT * FROM kelola_penjualan WHERE id_penjualan = $id_penjualan")[0];
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


<?php require'layouts/navbar.php';?>
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
          <label for="" class="form-label">Tanggal Penjualan</label>
          <input value="<?= $penjualan["tanggal_penjualan"]; ?>" type="date" class="form-control" name="tanggal_penjualan" id="tanggal_penjualan" placeholder="Tanggal Penjualan" <?= $penjualan["tanggal_penjualan"]; ?>>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Jumlah</label>
          <input value="<?= $penjualan["jumlah"]; ?>" type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" <?= $penjualan["jumlah"]; ?>>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Harga</label>
          <input value="<?= $penjualan["harga"]; ?>" type="text" class="form-control" name="harga" id="harga" placeholder="Harga" <?= $penjualan["harga"]; ?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Baju</label>
          <select <?= $penjualan["jenis_baju"]; ?> class="form-select" name="jenis_baju" id="jenis_baju" <?= $penjualan["jenis_baju"]; ?>>
            <option>Pilih Jenis</option>
              <option>T Shirt</option>
              <option>Hoodie</option>
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