<?php
$laptop = [
    [
        "merk" => "Apple",
        "tipe" => "MacBook Air M3",
        "tahunRilis" => "2024",
        "harga" => "Rp 20.000.000",
        "gambar" => "Apple 2024 MacBook Air 13.jpeg",
    ],
    [
        "merk" => "Lenovo",
        "tipe" => "ThinkPad X1 Carbon",
        "tahunRilis" => "2023",
        "harga" => "Rp 15.000.000",
        "gambar" => "Lenovo ThinkPad X1 Carbon.jpeg",
    ],
    [
        "merk" => "ASUS ROG",
        "tipe" => "Strix Scar 17",
        "tahunRilis" => "2023",
        "harga" => "Rp 40.000.000",
        "gambar" => "ASUS ROG Strix Scar 17.jpeg",
    ],
    [
        "merk" => "Dell",
        "tipe" => "XPS 15",
        "tahunRilis" => "2023",
        "harga" => "Rp 25.000.000",
        "gambar" => "Dell XPS 15.jpeg",
    ],
    [
        "merk" => "Acer",
        "tipe" => "Predator Helios 300",
        "tahunRilis" => "2023",
        "harga" => "Rp 30.000.000",
        "gambar" => "Acer Predator Helios 300.jpeg",
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Merk</title>
    <style>
        img {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Daftar Merk Laptop</h1>
    <ul>
        <?php foreach ($laptop as $ltp) : ?>
            <li>
                <a href="daftarlaptop.php?merk=<?= $ltp["merk"] ?>
                &gambar=<?= $ltp["gambar"] ?>
                &tipe=<?= $ltp["tipe"] ?>
                &tahunRilis=<?= $ltp["tahunRilis"] ?>
                &harga=<?= $ltp["harga"] ?>">
                    <?= $ltp["merk"]; ?></a>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>