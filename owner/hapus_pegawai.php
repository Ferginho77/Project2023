<?php
require 'function.php';
//FUNGSI MENGHAPUS PEGAWAI
$id_pegawai = $_GET["id_pegawai"];
if(delete($id_pegawai ) >0){
echo "<script>alert ('berhasil');
document.location.href = 'lapor.php';
</script>";
}

?>