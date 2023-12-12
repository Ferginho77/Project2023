<?php 
//mengkoneksi kan php dengan mysql
$koneksi = mysqli_connect("localhost","root","","penjualan"); 
if (!$koneksi) { //cek koneksi
    die("koneksi gagal");
}

function query($query) {
    global $koneksi;
    $result= mysqli_query($koneksi, $query);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}

//FUNGSI PEMBELIAN BAJU
function beli($data) {
    global $koneksi;
    $jenis_baju = $data["jenis_baju"];
    $ukuran = $data["ukuran"];
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
  

    mysqli_query($koneksi, "INSERT INTO kelola_penjualan VALUES ('', '$jenis_baju','$ukuran','$jenis_transaksi','$jenis_pengiriman','$jumlah','$harga')");
    return mysqli_affected_rows($koneksi);
}