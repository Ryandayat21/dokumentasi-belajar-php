<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            border: 1px solid #ccc;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
        $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>
    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b) : ?>
            <div class="kotak"><?php echo $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>