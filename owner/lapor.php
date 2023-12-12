<?php require'function.php';
$kelola_penjualan = jual("SELECT * FROM kelola_penjualan");
$kelola_pegawai = jual("SELECT * FROM kelola_pegawai");

if(isset($_POST["nyari"])){
  $kelola_penjualan = nyari($_POST["keyword"]);
}
if(isset($_POST["find"])){
  $kelola_pegawai = find($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    
  <link rel="stylesheet" href="../css/user.css">
    <title>OWNER</title>
</head>

<nav class="navbar navbar-expand-lg bg-#292832 navbar-dark text-light">
  <div class="container-fluid">
    <img src="../img/logo.jpg.png" width="120px" height="80px">
  

     <div class="navbar-nav ms-auto text-light fixed-top">
      <a href="#pegawai" class="btn btn-dark text-light">Data pegawai</a>
      <a href="#penjualan" class="btn btn-dark text-light">Data penjualan</a>
      </div>
  </div>
</nav>
<a href="home.php" class="btn btn-danger">Kembali</a>
<section id="penjualan">
<div class="card text-center mt-5">
  <div class="card-header bg-success text-light">
      Data Penjualan
    </div>
    <form action="" method="post">
            <input type="text" name="keyword" size="30" placeholder="Cari Disini">
            <button type="submit" class="btn btn-dark text-light" name="nyari">Cari</button>
          </form>
<div class="card-body">
<table class="table table-striped table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Jenis Baju</th>
        <th>Ukuran</th>
        <th>Jenis Transaksi</th>
        <th>Jenis Pengiriman</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Aksi</th>
     
      </tr>

            <tr>
            <?php 
           $i = 1;
           ?>
           
            <?php foreach($kelola_penjualan as $tampil) : ?>

              <td><?= $i ?></td>
              <td><?= $tampil["jenis_baju"]; ?></td>
              <td><?= $tampil["ukuran"]; ?></td>
              <td><?= $tampil["jenis_transaksi"]; ?></td>
              <td><?= $tampil["jenis_pengiriman"]; ?></td>
              <td><?= $tampil["jumlah"]; ?></td>
              <td><?= $tampil["harga"]; ?></td>
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
</section>
<section id="pegawai">
<div class="card text-center mt-5">
<div class="card-header bg-warning text-dark">
    Data Pegawai
  </div>
  <form action="" method="post">
                <input type="text" name="keyword" size="30" placeholder="Cari Disini">
                <button type="submit" class="btn btn-dark text-light" name="find">Cari</button>
              </form>
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
</section>