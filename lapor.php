<?php
require'function.php';
$kelola_baju = query("SELECT * FROM kelola_baju");
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <title>DZeert</title>
<body>
<?php require'layouts/navbar.php'?>
<div class="card text-center mt-5">
  
  <div class="card-header bg-secondary text-light">
    Data Baju
  </div>
  <div class="card-body">
  
    <table class="table table-striped table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Nama Baju</th>
        <th>Jenis Baju</th>
        <th>Ukuran</th>
        <th>tambah_stok</th>
        <th>Harga Jual</th>
        <th>Tanggal Pemasukan</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
     
      </tr>

            <tr>
            <?php 
           $i = 1;
           ?>
           
            <?php foreach($kelola_baju as $tampil) : ?>

              <td><?= $i ?></td>
              <td><?= $tampil["nama_baju"]; ?></td>
              <td><?= $tampil["jenis_baju"]; ?></td>
              <td><?= $tampil["ukuran_baju"]; ?></td>
              <td><?= $tampil["tambah_stok"]; ?></td>
              <td><?= $tampil["harga_jual"]; ?></td>
              <td><?= $tampil["tanggal_pemasukan"]; ?></td>
              <td><?= $tampil["deskripsi"]; ?></td>
              <td>
                <a href="edit.php?id_baju=<?= $tampil["id_baju"]?>" class="btn btn-primary">Edit</a>
                <a href="hapus.php?id_baju=<?= $tampil["id_baju"]?>" onclick="return confirm('yakin');" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php $i++ ?>
           <?php endforeach; ?>
    </table>

  </div>
  <div class="card-footer bg-secondary text-light">
  
  </div>
</div>
</body>
</html>