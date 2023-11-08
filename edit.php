<?php 
require 'function.php';
$id_baju = $_GET["id_baju"];
if(isset($_GET["id_baju"])){
    $id_baju = $_GET["id_baju"];
    $penjualan = query("SELECT * FROM kelola_baju WHERE id_baju = $id_baju")[0];
    if(isset($_POST["submit"])) {
      if(ubah($_POST) > 0) {
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


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <title>DZeert</title>
</head>
<body>
<?php require'layouts/navbar.php'?>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Baju
  </div>
  <div class="card-body">
      <form action="" method="post">
      <input type="hidden" name="id_baju" value="<?= $penjualan["id_baju"];?>">
      <div class="mb-3">
          <label for="nama" class="form-label">Nama Baju</label>
          <input value="<?= $penjualan["nama_baju"]; ?>" type="text" class="form-control" name="nama_baju" id="nama_baju" placeholder="Nama Baju" <?= $penjualan["nama_baju"];?>>
          
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Baju</label>
          <input value='<?= $penjualan["jenis_baju"]; ?>' type="text" class="form-control" name="jenis_baju" id="jenis_baju" placeholder="Jenis Baju"  <?= $penjualan["jenis_baju"];?>>
         
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Ukuran</label>
          <select value='<?= $penjualan["ukuran_baju"]; ?>' class="form-select" name="ukuran_baju" id="ukuran_baju" <?= $penjualan["ukuran_baju"];?>>
              <option>Pilih Ukuran</option>
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>XXL</option>
            </select>
            
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Tambah Stok</label>
          <input value='<?= $penjualan["tambah_stok"]; ?>' type="number" class="form-control" name="tambah_stok" id="tambah_stok" placeholder="Tambah Stok" <?= $penjualan["tambah_stok"];?>>
          
      </div>
        <div class="row">
            <div class="col">
            <div class="mb-3">
              <label for="nama" class="form-label">harga_jual</label>
              <input value='<?= $penjualan["harga_jual"]; ?>' type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga Jual"  <?= $penjualan["harga_jual"];?>>
             
            </div>
          </div>
            <div class="col">
            <div class="mb-3">
          <label for="nama" class="form-label">tanggal_pemasukan</label>
          <input value='<?= $penjualan["tanggal_pemasukan"]; ?>' type="date" class="form-control" name="tanggal_pemasukan" id="tanggal_pemasukan" placeholder="Harga Jual" <?= $penjualan["tanggal_pemasukan"];?>>
          
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="nama" class="form-label">Deskripsi</label>
              <input value='<?= $penjualan["deskripsi"]; ?>' type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deksripsi" <?= $penjualan["deskripsi"];?>>
              
            </div>
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
</body>
</html>