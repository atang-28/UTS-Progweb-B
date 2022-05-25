<?php
// konek ke database
require '../functions.php';
// ambil data dari link URL
$kd_prodi = $_GET["kd_prodi"];
// ambil data dari tabel prodi
$prodi = query("SELECT * FROM prodi WHERE kd_prodi = '$kd_prodi'")["0"];
// cek tombol submit
if(isset($_POST["submit"])){
    if(updateprodi($_POST)>0){
        echo "
           <script>
                alert ('Update Data BERHASIL!');
                document.location.href = 'dataprodi.php';
           </script>";
    } else{
        echo "
           <script>
                alert ('Update Data GAGAL!');
                document.location.href = 'ubahprodi.php';
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
    <h2>Update Data Prodi</h2>

    <form action="" method="post">
        <table border="0" cellpadding="4" cellspacing="3">
            <tr>
                <td>
                    <label for="kd_prodi">Kode Prodi : </label>
                </td>
                <td>
                    <input type="text" name="kd_prodi" id="kd_prodi" required value="<?= $prodi["kd_prodi"] ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_prodi">Nama Prodi : </label>
                </td>
                <td>
                    <input type="text" name="nama_prodi" id="nama_prodi" required value="<?= $prodi["nama_prodi"] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="kaprodi">Kepala Prodi : </label>
                </td>
                <td>
                    <input type="text" name="kaprodi" id="kaprodi" required value="<?= $prodi["kaprodi"] ?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Update Data</button>
    </form>
</body>
</html>