<?php
require'function.php';
$kelola_baju = query("SELECT * FROM kelola_baju");
$kelola_pegawai = query("SELECT * FROM kelola_pegawai");
$kelola_penjualan = query("SELECT * FROM kelola_penjualan");
$kelola_pengiriman = query("SELECT * FROM kelola_pengiriman");
$kelola_transaksi = query("SELECT * FROM kelola_transaksi");

//FUNGSI CARI
if(isset($_POST["cari"])){
  $kelola_baju = cari($_POST["keyword"]);
  
}
if(isset($_POST["find"])){
  $kelola_pegawai = find($_POST["keyword"]);
}
if(isset($_POST["nyari"])){
  $kelola_penjualan = nyari($_POST["keyword"]);
}
if(isset($_POST["kirim"])){
  $kelola_pengiriman = kirim($_POST["keyword"]);
}
if(isset($_POST["neangan"])){
  $kelola_transaksi = neangan($_POST["keyword"]);
}

        ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    
  <link rel="stylesheet" href="css/user.css">
    <title>ADMIN</title>
</head>

<nav class="navbar navbar-expand-lg bg-#292832 navbar-dark text-light">
  <div class="container-fluid">
    <img src="img/logo.jpg.png" width="120px" height="80px">
   
    <!-- <img src="/path/ke/proyek/project/images/nama_gambar.jpg" alt="Deskripsi Gambar"> -->


     <div class="navbar-nav ms-auto text-light fixed-top">
      <a href="#baju" class="btn btn-dark text-light">Data Baju</a>
      <a href="#pegawai" class="btn btn-dark text-light">Data pegawai</a>
      <a href="#penjualan" class="btn btn-dark text-light">Data penjualan</a>
      <a href="#pengiriman" class="btn btn-dark text-light">Data pengiriman</a>
      <a href="#transaksi" class="btn btn-dark text-light">Data transaksi</a>
      </div>
  </div>
</nav>
<a href="home.php" class="btn btn-danger">Kembali</a>
<!-- TABLE BAJU -->
      <section id="baju">
      <div class="card text-center mt-5">
        
        <div class="card-header bg-secondary text-light">
          Data Baju
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="text" name="keyword" size="30" placeholder="Cari Disini">
            <button type="submit" class="btn btn-dark text-light" name="cari">Cari</button>
          </form>
        
          <table class="table table-striped table-hover table-bordered">
            <tr>
              <th>No</th>
              <th>Nama Baju</th>
              <th>Jenis Baju</th>
              <th>Ukuran</th>
              <th>Tambah Stok</th>
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
      </section>
      <!-- TABLE PEGAWAI -->
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
      <!-- PENJUALAN -->
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
      </section>
      <!-- PENGIRIMAN -->
      <section id="pengiriman">
      <div class="card text-center mt-5">
        <div class="card-header bg-info text-light">
            Data Pengiriman
          </div>
          <form action="" method="post">
            <input type="text" name="keyword" size="30" placeholder="Cari Disini">
            <button type="submit" class="btn btn-dark text-light" name="kirim">Cari</button>
          </form>
      <div class="card-body">
      <table class="table table-striped table-hover table-bordered">
            <tr>
              <th>No</th>
              <th>No Resi </th>
              <th>Nama Penerima</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Kode Pos</th>
              <th>Jenis Pengiriman</th>
              <th>Catatan</th>
              <th>Aksi</th>
          
            </tr>

                  <tr>
                  <?php 
                $i = 1;
                ?>
                
                  <?php foreach($kelola_pengiriman as $tampil) : ?>

                    <td><?= $i ?></td>
                    <td><?= $tampil["no_resi"]; ?></td>
                    <td><?= $tampil["nama_penerima"]; ?></td>
                    <td><?= $tampil["alamat_penerima"]; ?></td>
                    <td><?= $tampil["telepon_penerima"]; ?></td>
                    <td><?= $tampil["kode_pos"]; ?></td>
                    <td><?= $tampil["jenis_pengiriman"]; ?></td>
                    <td><?= $tampil["catatan_pengiriman"]; ?></td>
                    <td>
                      <a href="edit.php?id_pengiriman=<?= $tampil["id_pengiriman"]?>" class="btn btn-primary">Edit</a>
                      <a href="hapus_pengiriman.php?id_pengiriman=<?= $tampil["id_pengiriman"]?>" onclick="return confirm('yakin');" class="btn btn-danger">Hapus</a>
                  </td>
                  </tr>
                  <?php $i++ ?>
                <?php endforeach; ?>
          </table>
      </div>
      <div class="card-footer bg-info text-light">
        
        </div>
      </div>
      </section>
      <!-- TRANSAKSI -->
      <section id="transaksi">
      <div class="card text-center mt-5">
        <div class="card-header bg-danger text-light">
            Data Transaksi
          </div>
          <form action="" method="post">
            <input type="text" name="keyword" size="30" placeholder="Cari Disini">
            <button type="submit" class="btn btn-dark text-light  " name="neangan">Cari</button>
          </form>
      <div class="card-body">
      <table class="table table-striped table-hover table-bordered">
            <tr>
              <th>No</th>
              <th>Tanggal Transaksi</th>
              <th>Jenis Barang</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Catatan</th>
              <th>Aksi</th>
          
            </tr>

                  <tr>
                  <?php 
                $i = 1;
                ?>
                
                  <?php foreach($kelola_transaksi as $tampil) : ?>

                    <td><?= $i ?></td>
                    <td><?= $tampil["tanggal_transaksi"]; ?></td>
                    <td><?= $tampil["jenis_barang"]; ?></td>
                    <td><?= $tampil["jumlah"]; ?></td>
                    <td><?= $tampil["harga"]; ?></td>
                    <td><?= $tampil["catatan_transaksi"]; ?></td>
                    <td>
                      <a href="edit.php?id_transaksi=<?= $tampil["id_transaksi"]?>" class="btn btn-primary">Edit</a>
                      <a href="hapus_transaksi.php?id_transaksi=<?= $tampil["id_transaksi"]?>" onclick="return confirm('yakin');" class="btn btn-danger">Hapus</a>
                  </td>
                  </tr>
                  <?php $i++ ?>
                <?php endforeach; ?>
          </table>
      </div>
      <div class="card-footer bg-danger text-light">
        
        </div>
      </div>
      </section>

</body>
</html>