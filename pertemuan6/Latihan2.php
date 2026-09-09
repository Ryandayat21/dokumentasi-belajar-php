<?php 
// $mahasiswa = [
//     ["Subaru", "230958940", "Ilmu Komunikasi", 
//     "Subaru@students.isekai.co.id"],
//     ["Kazuma", "230958940", "Ilmu Bisnis", 
//     "Kazuma@students.isekai.co.id"]
// ];

// Array Associative
// key => value
$mahasiswa = [
    [
        "nama" => "Subaru", 
        "nim" => "230958940", 
        "jurusan" => "Ilmu Komunikasi", 
        "email" => "Subaru@students.isekai.co.id",
        "gambar" => "pp.jpeg",
    ],
    [
        "nama" => "Kazuma",
        "nim" => "230958940",
        "jurusan" => "Ilmu Bisnis",
        "email" => "Kazuma@students.isekai.co.id",
        "gambar" => "pp.jpeg",
    ]
];
echo $mahasiswa[1]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="<?= $mhs["gambar"]; ?>" alt="Foto <?= $mhs["nama"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
