<?php
require 'function.php';
$id_baju =$_GET["id_baju"];


if(hapus($id_baju) > 0) {
 echo "<script>alert ('berhasil');
    document.location.href = 'lapor.php';
    </script>";
} else {
    echo "<script>alert ('gagal');
    document.location.href = 'lapor.php';
    </script>";
}

?>