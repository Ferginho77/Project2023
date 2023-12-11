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

function cari ($keyword) {
    $query = "SELECT * FROM kelola_baju WHERE nama_baju LIKE '%$keyword%'";
    return query($query);
}

//FUNGSI PEGAWAI
function pegawaian($pegawaian) {
    global $koneksi;
    $result= mysqli_query($koneksi, $pegawaian);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}
//MEMBUAT FUNGSI TAMBAH PEGAWAI
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

//EDIT PEGAWAI
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



//FUNGSI PENJUALAN
function jual($jual) {
    global $koneksi;
    $result= mysqli_query($koneksi, $jual);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}

function penjualan($data) {
    global $koneksi;
    $jenis_baju = $data["jenis_baju"];
    $ukuran = $data["ukuran"];
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
  

    mysqli_query($koneksi, "INSERT INTO kelola_penjualan VALUES ('', '$jenis_baju','$ukuran','$jenis_pengiriman','$jenis_transaksi','$jumlah','$harga')");
    return mysqli_affected_rows($koneksi);
}


function del($id_penjualan) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_penjualan WHERE id_penjualan = $id_penjualan");
    return mysqli_affected_rows($koneksi);
}

function edite($data) {
    global $koneksi;
    $id_penjualan = $data["id_penjualan"];
    $jenis_baju = $data["jenis_baju"];
    $ukuran = $data["ukuran"];
    $jenis_transaksi = $data["jenis_transaksi"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
  

$query = "UPDATE kelola_penjualan SET
                id_penjualan = '$id_penjualan',
                jenis_baju = '$jenis_baju',
                ukuran = '$ukuran',
                jenis_transaksi = '$jenis_transaksi',
                jenis_pengiriman = '$jenis_pengiriman',
                jumlah = '$jumlah',
                harga = '$harga'
                WHERE id_penjualan = $id_penjualan";

mysqli_query($koneksi, $query);
return mysqli_affected_rows($koneksi);
}
 
    function nyari($keyword) {
        $query = "SELECT * FROM kelola_penjualan WHERE tanggal_penjualan LIKE '%$keyword%'";
        return query($query);
    }



//FUNGSI PENGIRIMAN


function kiriman($kiriman) {
    global $koneksi;
    $result= mysqli_query($koneksi, $kiriman);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}

function pengiriman($data) {
    global $koneksi;
    $no_resi = $data["no_resi"];
    $nama_penerima = $data["nama_penerima"];
    $alamat_penerima = $data["alamat_penerima"];
    $telepon_penerima = $data["telepon_penerima"];
    $kode_pos = $data["kode_pos"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $catatan_pengiriman = $data["catatan_pengiriman"];
 mysqli_query($koneksi,"INSERT INTO kelola_pengiriman VALUES ('','$no_resi','$nama_penerima','$alamat_penerima','$telepon_penerima','$kode_pos','$jenis_pengiriman','$catatan_pengiriman')");
 return mysqli_affected_rows($koneksi);
}

function apus($id_pengiriman) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_pengiriman WHERE id_pengiriman = $id_pengiriman");
    return mysqli_affected_rows($koneksi);
}

function ngubah($data) {
    global $koneksi;
    $id_pengiriman = $data["id_pengiriman"];
    $no_resi = $data["no_resi"];
    $nama_penerima = $data["nama_penerima"];
    $alamat_penerima = $data["alamat_penerima"];
    $telepon_penerima = $data["telepon_penerima"];
    $kode_pos = $data["kode_pos"];
    $jenis_pengiriman = $data["jenis_pengiriman"];
    $catatan_pengiriman = $data["catatan_pengiriman"];

$kiriman = "UPDATE kelola_pengiriman SET
                id_pengiriman = '$id_pengiriman',
                no_resi = '$no_resi',
                nama_penerima = '$nama_penerima',
                alamat_penerima = '$alamat_penerima',
                telepon_penerima = '$telepon_penerima',
                kode_pos = '$kode_pos',
                jenis_pengiriman = '$jenis_pengiriman',
                catatan_pengiriman = '$catatan_pengiriman'
                WHERE id_pengiriman = $id_pengiriman";

mysqli_query($koneksi, $kiriman);
return mysqli_affected_rows($koneksi);
}


function kirim($keyword) {
    $query = "SELECT * FROM kelola_pengiriman WHERE no_resi LIKE '%$keyword%'";
    return query($query);
}



//FUNGSI TRANSAKSI

function cash($cash) {
    global $koneksi;
    $result= mysqli_query($koneksi, $cash);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}

function transaksi($data) {
    global $koneksi;
    $tanggal_transaksi = $data["tanggal_transaksi"];
    $jenis_barang = $data["jenis_barang"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
    $jenis_transaksi = $data["jenis_transaksi"];
   

 mysqli_query($koneksi,"INSERT INTO kelola_transaksi VALUES ('','$tanggal_transaksi','$jenis_barang','$jumlah','$harga','$jenis_transaksi')");
 return mysqli_affected_rows($koneksi);
}

function yamsah($id_transaksi) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM  kelola_transaksi WHERE id_transaksi = $id_transaksi");
    return mysqli_affected_rows($koneksi);
}

function change($data) {
    global $koneksi;
    $id_transaksi = $data["id_transaksi"];
    $tanggal_transaksi = $data["tanggal_transaksi"];
    $jenis_barang = $data["jenis_barang"];
    $jumlah = $data["jumlah"];
    $harga = $data["harga"];
    $jenis_transaksi = $data["jenis_transaksi"];
    
$cash = "UPDATE kelola_transaksi SET
                id_transaksi = '$id_transaksi',
                tanggal_transaksi = '$tanggal_transaksi',
                jenis_barang = '$jenis_barang',
                jumlah = '$jumlah',
                harga = '$harga',
                jenis_transaksi = '$jenis_transaksi'
                WHERE id_transaksi = $id_transaksi";

mysqli_query($koneksi, $cash);
return mysqli_affected_rows($koneksi);
}

function look($keyword) {
    $query = "SELECT * FROM kelola_transaksi WHERE jenis_barang LIKE '%$keyword%'";
    return query($query);
}

?>
