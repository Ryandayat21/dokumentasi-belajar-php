<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: greenyellow;
        }
        .warna-baris1 {
            background-color: lightblue;
        }
        .warna-kolom {
            background-color: greenyellow;
        }
        .warna-kolom1 {
            background-color: lightblue;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td class="<?= $j % 2 == 0 ? 'warna-kolom' : 'warna-kolom1'; ?>">
                    <?= "$i, $j"; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table><br>

<!--Cara lain -->
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++) : ?>
        <?php if( $i % 2 == 0): ?>
            <tr class="warna-baris1">
        <?php else: ?>
            <tr class="warna-baris">
        <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
    <?php endfor; ?>
</table>
    
</body>
</html>