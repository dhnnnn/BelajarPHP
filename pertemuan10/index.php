<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>


    <a href="tambah.php">Tambah data mahasiswa</a>
    <br></br>

    <table border='1' cellpadding='10' cellspacing='0'>

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>

        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin');">Hapus</a>
            </td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["npm"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>
</html>
