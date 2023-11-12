<?php 
require 'function.php';
$id_pegawai = $_GET["id_pegawai"];
  if(isset($_GET["id_pegawai"])){
      $id_pegawai = $_GET["id_pegawai"];
      $penjualan = query("SELECT * FROM kelola_pegawai WHERE id_pegawai = $id_pegawai")[0];
      if(isset($_POST["submit"])) {
        if(edit($_POST) > 0) {
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
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Pegawai
  </div>
  <div class="card-body">
      <form action="" method="post">
      <input type="hidden" name="id_pegawai" value="<?= $penjualan["id_pegawai"];?>">
      <div class="mb-3">
          <label for="nama" class="form-label"><i data-feather="user"></i>Nama Pegawai</label>
          <input value="<?= $penjualan["nama"]; ?>" type="text" class="form-control" name="nama" id="nama" placeholder="Nama" <?= $penjualan["nama"]; ?>>
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input value="<?= $penjualan["email"]; ?>"   type="email" class="form-control" name="email" id="email" placeholder="Email" <?= $penjualan["email"]; ?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Alamat</label>
          <input value="<?= $penjualan["alamat"]; ?>"  type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" <?= $penjualan["alamat"]; ?>>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Kelamin</label>
          <select value="<?= $penjualan["jenis_kelamin"]; ?>" class="form-select" name="jenis_kelamin" id="jenis_kelamin" <?= $penjualan["jenis_kelamin"]; ?>>
              <option>Pilih</option>
              <option>Pria</option>
              <option>Wanita</option>
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