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
function jual($jual) {
    global $koneksi;
    $result= mysqli_query($koneksi, $jual);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}
function baju2($baju2) {
    global $koneksi;
    $result= mysqli_query($koneksi, $baju2);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}
function pengiriman($data) {
    global $koneksi;
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    mysqli_query($koneksi,"INSERT INTO pembelian  VALUES('', '$jenis_transaksi', '$jenis_pengiriman')" );
    return mysqli_affected_rows($koneksi);
}
function baju($data) {
    global $koneksi;
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    mysqli_query($koneksi,"INSERT INTO pembelian  VALUES('', '$jenis_transaksi', '$jenis_pengiriman')" );
    return mysqli_affected_rows($koneksi);
}
