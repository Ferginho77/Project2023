<?php 
//mengkoneksi kan php dengan mysql
$koneksi = mysqli_connect("localhost","root","","penjualan"); 
if (!$koneksi) { //cek koneksi
    die("koneksi gagal");
}

//fungsi query

function query($query) {
    global $koneksi;
    $result= mysqli_query($koneksi, $query);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}



//fungsi  Register
function update($data) {
    global $koneksi;
    $username = $data["username"];
    $password = $data["password"];
    $alamat = $data["alamat"];
    $kode_pos = $data["kode_pos"];
    $email = $data["email"];
    $telepon = $data["telepon"];

    //enkripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO user VALUES  ('','$username','$password','$alamat','$kode_pos','$email','$telepon')");
    
    return mysqli_affected_rows($koneksi);
    
}
//TAMBAH BAJU
function tambah($data) {
    global $koneksi;
    $nama_baju = $data["nama_baju"];
    $jenis_baju = $data["jenis_baju"];
    $ukuran_baju = $data["ukuran_baju"];
    $tambah_stok = $data["tambah_stok"];
    $harga_jual = $data["harga_jual"];
    $tanggal_pemasukan = $data["tanggal_pemasukan"];
    $deskripsi = $data["deskripsi"];

    mysqli_query($koneksi,"INSERT INTO kelola_baju VALUES ('','$nama_baju','$jenis_baju','$ukuran_baju','$tambah_stok','$harga_jual','$tanggal_pemasukan','$deskripsi')");
    return mysqli_affected_rows($koneksi);
}

//MENAMBAH FUNGSI UBAH
function ubah($data) {
    global $koneksi;
    $id_baju = $data["id_baju"];
    $nama_baju = $data["nama_baju"];
    $jenis_baju = $data["jenis_baju"];
    $ukuran_baju = $data["ukuran_baju"];
    $tambah_stok = $data["tambah_stok"];
    $harga_jual = $data["harga_jual"];
    $tanggal_pemasukan = $data["tanggal_pemasukan"];
    $deskripsi = $data["deskripsi"];

$query = "UPDATE kelola_baju SET
                id_baju = '$id_baju',
                nama_baju = '$nama_baju',
                jenis_baju = '$jenis_baju',
                ukuran_baju = '$ukuran_baju',
                tambah_stok = '$tambah_stok',
                harga_jual = '$harga_jual',
                tanggal_pemasukan = '$tanggal_pemasukan',
                deskripsi = '$deskripsi'
                WHERE id_baju = $id_baju";

mysqli_query($koneksi, $query);
return mysqli_affected_rows($koneksi);
}


//FUNGSI HAPUS
function hapus($id_baju) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_baju WHERE id_baju = $id_baju");
    return mysqli_affected_rows($koneksi);
}
?>
