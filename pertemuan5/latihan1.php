<?php 
// Array
// variabel yang dapat memiliki banyak nilai

// Membuat array
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus"];

// Menampilkan array
var_dump($bulan);
echo "<br>";
print_r($bulan);

// Menampilkan 1 elemen pada array
echo "<br>";
echo $bulan[3];

// Menambahkan elemen baru pada array
$bulan[] = "Ramadhan";
$bulan[] = "Syawal";
echo "<br>";
var_dump($bulan);
?>