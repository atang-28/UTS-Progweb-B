<?php
// konek ke DB
require '../functions.php';
$kd_prodi = $_GET["kd_prodi"];

if(hapusprodi($kd_prodi) > 0 ){
    echo "
            <script>
                alert ('Data TERHAPUS!');
                document.location.href = 'dataprodi.php';
           </script>";
} else{
    echo "
           <script>
                alert ('Data GAGAL! Dihapus');
                document.location.href = 'dataprodi.php';
           </script>";
}
?>