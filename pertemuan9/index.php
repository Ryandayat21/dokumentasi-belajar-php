<?php
require 'functions.php';
$laptop = query("SELECT * FROM laptop");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Laptop</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Tahun Rilis</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $laptop as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">edit</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" width="100"></td>
            <td><?= $row["merk"] ?></td>
            <td><?= $row["tipe"] ?></td>
            <td><?= $row["tahunRilis"] ?></td>
            <td><?= $row["harga"] ?></td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
</body>
</html>