<?php require'function.php';
$kelola_penjualan = query("SELECT * FROM kelola_penjualan");
$kelola_pegawai = query("SELECT * FROM kelola_pegawai");

?>

<?php require'../layouts/navbar_owner.php'?>
<div class="card text-center mt-5">
  <div class="card-header bg-success text-light">
      Data Penjualan
    </div>
<div class="card-body">
<table class="table table-striped table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Tanggal Pemasukan</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Jenis Baju</th>
        <th>Aksi</th>
     
      </tr>

            <tr>
            <?php 
           $i = 1;
           ?>
           
            <?php foreach($kelola_penjualan as $tampil) : ?>

              <td><?= $i ?></td>
              <td><?= $tampil["tanggal_penjualan"]; ?></td>
              <td><?= $tampil["jumlah"]; ?></td>
              <td><?= $tampil["harga"]; ?></td>
              <td><?= $tampil["jenis_baju"]; ?></td>
              <td>
                <a href="edit_penjualan.php?id_penjualan=<?= $tampil["id_penjualan"]?>" class="btn btn-primary">Edit</a>
                <a href="hapus_penjualan.php?id_penjualan=<?= $tampil["id_penjualan"]?>" onclick="return confirm('yakin');" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php $i++ ?>
           <?php endforeach; ?>
    </table>
</div>
<div class="card-footer bg-success text-light">
  
  </div>
</div>

<div class="card text-center mt-5">
<div class="card-header bg-warning text-dark">
    Data Pegawai
  </div>
<div class="card-body">
<table class="table table-striped table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
     
      </tr>

            <tr>
            <?php 
           $i = 1;
           ?>
           
            <?php foreach($kelola_pegawai as $tampil) : ?>

              <td><?= $i ?></td>
              <td><?= $tampil["nama"]; ?></td>
              <td><?= $tampil["email"]; ?></td>
              <td><?= $tampil["alamat"]; ?></td>
              <td><?= $tampil["jenis_kelamin"]; ?></td>
              <td>
                <a href="edit_pegawai.php?id_pegawai=<?= $tampil["id_pegawai"]?>" class="btn btn-primary">Edit</a>
                <a href="hapus_pegawai.php?id_pegawai=<?= $tampil["id_pegawai"]?>" onclick="return confirm('yakin');" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php $i++ ?>
           <?php endforeach; ?>
    </table>
</div>

<div class="card-footer bg-warning text-light">
  
  </div>
</div>