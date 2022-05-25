<?php
//  konek ke DB
require '../functions.php';
$nim = $_GET["nim"];

if(hapusmhs($nim) > 0 ) {
    echo "
        <script>
            alert ('Data TERHAPUS');
            document.location.href = 'datamhs.php';
        </script>";
} else {
    echo "
        <script>
            alert ('Data Gagal DIHAPUS');
            document.location.href = 'datamhs.php'
        </script>";
}
?>