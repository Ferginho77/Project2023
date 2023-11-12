<?php
require 'function.php';
$id_pegawai = $_GET["id_pegawai"];
if(delete($id_pegawai ) >0){
echo "<script>alert ('berhasil');
document.location.href = 'lapor.php';
</script>";
}

?>