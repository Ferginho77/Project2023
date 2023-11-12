<?php
require'function.php';
if(isset($_POST["submit"])) {
  if(pegawai($_POST) > 0) {
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
  <h3 class="text-center text-light mt-3">Kelola Pegawai</h3>
<div class="row">
  <div class="col-md-8 mx-auto">
  <div class="card mt-5">
  
  <div class="card-header bg-secondary text-light">
    Form Input Data Pegawai
  </div>
  <div class="card-body">
      <form action="" method="post">
      <div class="mb-3">
          <label for="nama" class="form-label"><i data-feather="user"></i>Nama Pegawai</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Jenis Kelamin</label>
          <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
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




</div>
