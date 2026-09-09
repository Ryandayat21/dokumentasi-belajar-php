<?php 
// Pengulanagan pada array
// for / foreach

$angka = [3, 4, 12, 53, 7, 11, 9, 88, 20];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h2>Menggunakan for</h2>
    <?php for ( $i = 0; $i < count($angka); $i++) {?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <h2>Menggunakan foreach</h2>
    <?php foreach($angka as $a) {?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <h2>Menggunakan foreach dengan sintaks alternatif</h2>
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>