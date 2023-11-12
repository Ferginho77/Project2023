<?php
require 'function.php';
$id_pengiriman = $_GET["id_pengiriman"];
if(apus($id_pengiriman ) >0){
echo "<script>alert ('berhasil');
document.location.href = 'lapor.php';
</script>";
}

?>