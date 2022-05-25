<?php
// konek ke Database
require '../functions.php';
// ambil data yang akan diubah
$nim = $_GET["nim"];

$mhs = query("SELECT * FROM mahasiswa WHERE nim = '$nim'")["0"];
// cek tombol submit
if(isset($_POST["submit"])){
    if(updatemhs($_POST) > 0 ) {
        echo "
            <script> 
                alert ('Data Berhasil Diubah');
                document.location.href = 'datamhs.php';
            </script>";
    }else{
        echo "
            <script>
                alert ('Data Gagal Diupdate');
                document.location.href = 'ubahmhs.php';
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
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Update Data Mahasiswa</h2>

    <form action="" method="post">
        <table border="0" cellpadding="4" cellspacing="3">
            <tr>
                <td>
                    <label for="nim">NIM : </label>
                </td>
                <td>
                    <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_mahasiswa">Nama Mahasiswa : </label>
                </td>
                <td>
                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" required value="<?= $mhs["nama_mahasiswa"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="kd_prodi">Kode Prodi : </label>
                </td>
                <td>
                <select name="kd_prodi" id="kd_prodi" required value="<?= $mhs["kd-prodi"]; ?>">
                        <option value="101">Fisika</option>
                        <option value="201">Akuntansi & Bisnis</option>
                        <option value="202">TI-MTI</option>
                        <option value="203">Manajemen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="kontak">Kontak : </label>
                </td>
                <td>
                    <input type="text" name="kontak" id="kontak" required value="<?= $mhs["kontak"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">Alamat : </label>
                </td>
                <td>
                    <input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]; ?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Update Data</button>
    </form>
</body>
</html>