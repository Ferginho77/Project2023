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
    $tanggal_penjualan = $data["tanggal_penjualan"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
    $jenis_baju = $data["jenis_baju"];

 mysqli_query($koneksi,"INSERT INTO kelola_penjualan VALUES ('','$tanggal_penjualan','$jumlah','$harga','$jenis_baju')");
 return mysqli_affected_rows($koneksi);
}

function del($id_penjualan) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_penjualan WHERE id_penjualan = $id_penjualan");
    return mysqli_affected_rows($koneksi);
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

$query = "UPDATE kelola_pegawai SET
                id_pegawai = '$id_pegawai',
                nama = '$nama',
                email = '$email',
                alamat = '$alamat',
                jenis_kelamin = '$jenis_kelamin'
                WHERE id_pegawai = $id_pegawai";

mysqli_query($koneksi, $query);
return mysqli_affected_rows($koneksi);
}

?>