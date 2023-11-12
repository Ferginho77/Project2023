<?php
require 'function.php';
$id_transaksi = $_GET["id_transaksi"];
if(yamsah($id_transaksi ) >0){
echo "<script>alert ('berhasil');
document.location.href = 'lapor.php';
</script>";
}

?>