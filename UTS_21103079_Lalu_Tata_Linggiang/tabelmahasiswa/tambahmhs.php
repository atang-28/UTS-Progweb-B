<?php
// konek ke database
require '../functions.php';

// cek tombol submit
if(isset($_POST["submit"])){

    if(tambahmhs($_POST) > 0 ) {
        echo "
            <script> 
                alert ('Kirim Data Berhasil!!');
                document.location.href = 'datamhs.php';
            </script>";
    } else{
        echo "
            <script>
                alert ('Kirim Data Gagal');
                document.location.href = 'tambahmhs.php';
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
    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="post">
        <table border="0" cellpadding="4" cellspacing="3">
            <tr>
                <td>
                    <label for="nim">NIM : </label>
                </td>
                <td>
                    <input type="text" name="nim" id="nim">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_mahasiswa">Nama Mahasiswa : </label>
                </td>
                <td>
                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="kd_prodi">Kode Prodi : </label>
                </td>
                <td>
                    <select name="kd_prodi" id="kd_prodi">
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
                    <input type="text" name="kontak" id="kontak">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">Alamat : </label>
                </td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>