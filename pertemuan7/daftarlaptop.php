<?php
// Cek apakah tidak ada data di $_GET
if (
    !isset($_GET["merk"]) ||
    !isset($_GET["tipe"]) ||
    !isset($_GET["gambar"]) ||
    !isset($_GET["tahunRilis"]) ||
    !isset($_GET["harga"])
) {
    //redirect
    header("Location: daftarmerk.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
    <style>
        img {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li>Merk : <?= $_GET["merk"]; ?></li>
        <li>Tipe : <?= $_GET["tipe"]; ?></li>
        <li>Tahun Rilis : <?= $_GET["tahunRilis"]; ?></li>
        <li>Harga : <?= $_GET["harga"] ?></li>
    </ul>

    <a href="daftarmerk.php">Kembali ke Daftar Merk</a>
</body>

</html>