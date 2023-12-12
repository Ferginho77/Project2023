<?php
require 'function.php';
//FUNGSI MENGHAPUS PENJUALAN
$id_penjualan = $_GET["id_penjualan"];
if(del($id_penjualan ) >0){
echo "<script>alert ('berhasil');
document.location.href = 'lapor.php';
</script>";
}

?>