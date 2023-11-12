<?php
require'function.php';
if(isset($_POST["submit"])) {
  if(pengiriman($_POST) > 0) {
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
  <h3 class="text-center text-light mt-3">Kelola Pengiriman</h3>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Pengiriman
  </div>
  <div class="card-body text-dark">
      <form action="" method="post">
      <div class="mb-3">
          <label for="nama" class="form-label"><i data-feather="user"></i>No Resi </label>
          <input type="text" class="form-control" name="no_resi" id="no_resi" placeholder="No Resi">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label"><i data-feather="user"></i>Nama Penerima </label>
          <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" placeholder="Nama Penerima">
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat_penerima" id="alamat_penerima" placeholder="Alamat">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Telepon Penerima</label>
          <input type="text" class="form-control" name="telepon_penerima" id="telepon_penerima" placeholder="Telepon Penerima">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Kode Pos</label>
          <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos">
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
          <input type="text" class="form-control" name="catatan_pengiriman" id="catatan_pengiriman" placeholder="Catatan pengiriman">
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
