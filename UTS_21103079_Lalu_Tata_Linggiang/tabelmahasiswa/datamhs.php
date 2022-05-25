<?php
//  konek ke Database
require '../functions.php';

// ambil Data dari Table Mahasiswa
$mhs = query("SELECT * FROM mahasiswa");
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
    <h2>Mahasiswa Instiki</h2>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No.</th>
            <th><button><a href="tambahmhs.php">Tambah</a></button></th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kode Prodi</th>
            <th>Kontak</th>
            <th>Alamat</th>
        </tr>

        <?php $no = "1"; ?>
        <?php foreach($mhs as $row) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td>
                <button><a href="ubahmhs.php?nim=<?= $row["nim"]; ?>">Ubah</a></button> | 
                <button><a href="hapusmhs.php?nim=<?= $row["nim"]; ?>" onclick="return confirm('Data Akan Terhapus, Yakin?');">Hapus</a></button>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama_mahasiswa"]; ?></td>
            <td><?= $row["kd_prodi"]; ?></td>
            <td><?= $row["kontak"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>