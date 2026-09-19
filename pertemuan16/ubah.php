<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// Ambil data di URL
$id = $_GET["id"];

// Query data laptop berdasarkan id
$laptop = query("SELECT * FROM laptop WHERE id = $id")[0];

// Cek apakah form telah disubmit
if (isset($_POST["submit"])) {
    
    // Cek apakah data berhasil diubah atau tidak
    if( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Laptop</title>
</head>
<body>
    <h1>Edit Data Laptop</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $laptop["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $laptop["gambar"]; ?>">
        <ul>
            <li>
                <label for="merk">Merk: </label>
                <input type="text" name="merk" id="merk" required
                value="<?= $laptop["merk"]; ?>">
            </li>
            <li>
                <label for="tipe">Tipe: </label>
                <input type="text" name="tipe" id="tipe" required
                value="<?= $laptop["tipe"]; ?>">
            </li>
            <li>
                <label for="tahunRilis">Tahun Rilis: </label>
                <input type="text" name="tahunRilis" id="tahunRilis" required
                value="<?= $laptop["tahunRilis"]; ?>">
            </li>
            <li>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" id="harga" required
                value="<?= $laptop["harga"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <img src="img/<?= $laptop['gambar']; ?>" width="150" alt="">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>