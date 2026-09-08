<?php 
// Pengulangan (for, while, do...while, foreach)

for( $i = 0; $i < 5; $i++ ) {
    echo "Hello Bro!<br>";
}

// Contoh lain pengulangan
// while, do...while
$i = 0;
while( $i < 5) {
    echo "Hello juga bro!<br>";
    $i++;
}

$i = 0;
do {
    echo "Kamu siapa bro?<br>";
    $i++;
} while( $i < 5);
?>