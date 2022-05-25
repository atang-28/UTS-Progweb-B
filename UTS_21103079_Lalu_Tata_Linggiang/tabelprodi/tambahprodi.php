<?php
//  konek ke DB
require '../functions.php';

// cek tombol submit
if(isset($_POST["submit"])) {

    if(tambahprodi($_POST) > 0 ) {
        echo "
            <script>
                alert ('Kirim Data BERHASIL!');
                document.location.href = 'dataprodi.php';
            </script>";
    } else{
        echo "
            <script>
                alert ('Kirim Data GAGAL!');
                document.location.href = 'dataprodi.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prodi</title>
</head>
<body>
    <h2>Tambah Data Prodi</h2>

    <form action="" method="post">
        <table border="0" cellpadding="4" cellspacing="3">
            <tr>
                <td>
                    <label for="kd_prodi">Kode Prodi : </label>
                </td>
                <td>
                    <input type="text" name="kd_prodi" id="kd_prodi">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_prodi">Nama Prodi : </label>
                </td>
                <td>
                    <input type="text" name="nama_prodi" id="nama_prodi">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="kaprodi">Kepala Prodi : </label>
                </td>
                <td>
                    <input type="text" name="kaprodi" id="kaprodi">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Kirim Data</button>
    </form>
    
</body>
</html>