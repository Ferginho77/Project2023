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

function penjualan($data) {
    global $koneksi;
    $jenis_baju = $data["jenis_baju"];
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
  

    mysqli_query($koneksi, "INSERT INTO kelola_penjualan VALUES ('', '$jenis_baju','$jenis_pengiriman','$jenis_transaksi','$jumlah','$harga')");
    return mysqli_affected_rows($koneksi);
}

function del($id_penjualan) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_penjualan WHERE id_penjualan = $id_penjualan");
    return mysqli_affected_rows($koneksi);
}

function ubah($data) {
    global $koneksi;
    $id_penjualan = $data["id_penjualan"];
    $jenis_baju = $data["jenis_baju"];
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
  

$query = "UPDATE kelola_penjualan SET
                id_penjualan = '$id_penjualan',
                jenis_baju = '$jenis_baju',
                jenis_transaksi = '$jenis_transaksi',
                jenis_pengiriman = '$jenis_pengiriman',
                jumlah = '$jumlah'
                harga = '$harga'
                WHERE id_penjualan = $id_penjualan";

mysqli_query($koneksi, $query);
return mysqli_affected_rows($koneksi);
}

function nyari($keyword) {
    $query = "SELECT * FROM kelola_penjualan WHERE tanggal_penjualan LIKE '%$keyword%'";
    return query($query);
}


//PEGAWAI
function pegawaian($pegawaian) {
    global $koneksi;
    $result= mysqli_query($koneksi, $pegawaian);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}

function pegawai($data) {
    global $koneksi;
    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    $jenis_kelamin = $data["jenis_kelamin"];

 mysqli_query($koneksi,"INSERT INTO kelola_pegawai VALUES ('','$nama','$email','$alamat','$jenis_kelamin')");
 return mysqli_affected_rows($koneksi);
}
//HAPUS PEGAWAI

function delete($id_pegawai) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_pegawai WHERE id_pegawai = $id_pegawai");
    return mysqli_affected_rows($koneksi);
}

function edit($data) {
    global $koneksi;
    $id_pegawai = $data["id_pegawai"];
    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    $jenis_kelamin = $data["jenis_kelamin"];

$pegawaian = "UPDATE kelola_pegawai SET
                id_pegawai = '$id_pegawai',
                nama = '$nama',
                email = '$email',
                alamat = '$alamat',
                jenis_kelamin = '$jenis_kelamin'
                WHERE id_pegawai = $id_pegawai";

mysqli_query($koneksi, $pegawaian);
return mysqli_affected_rows($koneksi);
}
function find($keyword) {
    $query = "SELECT * FROM kelola_pegawai WHERE nama LIKE '%$keyword%'";
    return query($query);
}

?>