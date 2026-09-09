<?php 
$mahasiswa = [
    ["Subaru", "2304040490", "Ilmu Komunikasi", 
    "Subaru@students.isekai.co.id"],
    ["Rudeus", "2304040495", "Teknik Sihir", 
    "Rudeus@students.isekai.co.id"],
    ["Kazuma", "2304040500", "Ilmu Bisnis", 
    "Kazuma@students.isekai.co.id"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>