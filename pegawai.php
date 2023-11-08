<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <title>Pesanan</title>
</head>
<body>
<?php require'layouts/navbar.php'?>
<div class="container">
  <h3 class="text-center text-light mt-3">Kelola Baju</h3>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Baju
  </div>
  <div class="card-body">
      <form action="" method="post">
      <div class="mb-3">
          <label for="nama" class="form-label">Nama Baju</label>
          <input type="text" class="form-control" name="nama_baju" id="nama_baju" placeholder="Nama Baju">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Baju</label>
          <input type="text" class="form-control" name="jenis_baju" id="jenis_baju" placeholder="Jenis Baju">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Ukuran</label>
          <select class="form-select" name="ukuran_baju" id="ukuran_baju">
              <option>Pilih Ukuran</option>
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>XXL</option>
            </select>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">TambahStok</label>
          <input type="number" class="form-control" name="tambah_stok" id="tambah_stok" placeholder="Tambah Stok">
      </div>
        <div class="row">
            <div class="col">
            <div class="mb-3">
              <label for="nama" class="form-label">harga_jual</label>
              <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Tambah Stok">
            </div>
          </div>
            <div class="col">
            <div class="mb-3">
          <label for="nama" class="form-label">tanggal_pemasukan</label>
          <input type="date" class="form-control" name="tanggal_pemasukan" id="tanggal_pemasukan" placeholder="Harga Jual">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="nama" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deksripsi">
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




</div>
</body>
</html>