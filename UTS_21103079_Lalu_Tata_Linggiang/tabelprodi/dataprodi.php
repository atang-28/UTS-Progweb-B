<?php

// konek ke database
require '../functions.php';
// 
$prodi = query("SELECT * FROM prodi");

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
    <h2>Program Studi Instiki</h2>
    <br>
    <button><a href="tambahprodi.php">Tambah Data</a></button>
    <br><br>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>  </th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Kepala Prodi</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($prodi as $row) : ?>
        <tr>
            <td><?= $no; ?> </td>
            <td><a href="ubahprodi.php?kd_prodi=<?= $row["kd_prodi"];?>">Ubah</a> | <a href="hapusprodi.php?kd_prodi=<?= $row["kd_prodi"];?>" onclick="return confirm('Data akan terhapus, Yakin?');" >Hapus</a> </td>
            <td><?= $row["kd_prodi"]; ?> </td>
            <td><?= $row["nama_prodi"]; ?> </td>
            <td><?= $row["kaprodi"]; ?> </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>