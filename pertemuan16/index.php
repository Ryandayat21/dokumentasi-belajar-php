<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$laptop = query("SELECT * FROM laptop");

// Tombol cari diklik
if (isset($_POST["cari"])) {
    $laptop = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Laptop</h1>
    <a href="tambah.php">Tambah Data Laptop</a>
    <br> <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="35" autofocus 
        placeholder="Masukan keyword pencarian..." autocomplete="off">
        <button typr="submit" name="cari">🔍</button>
    </form>
    <br>

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
                <a href="ubah.php?id=<?= $row["id"]; ?>">edit</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" 
                onclick="return confirm('Yakin?');">hapus</a>
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