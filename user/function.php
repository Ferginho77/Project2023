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

