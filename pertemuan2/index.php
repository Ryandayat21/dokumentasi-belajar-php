<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output (echo, print, print_r, var_dump)

echo "Ryan Hidayat<br>" ;
print "Teknik Informatika<br>" ;
echo "2304130075<br>";

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Ryan";
$umur = 22;
$ipk = 3.5;
$mahasiswa = true;
echo "Halo, nama saya $nama, umur saya $umur tahun, IPK saya $ipk, dan status mahasiswa saya adalah $mahasiswa.<br>";

// Operator
// Aritmatika
// + - * / %
// Unary
// + - ! ~
// Increment / Decrement
// ++ --
$x = 10;
$y = 20;
echo ($x + $y) . "<br>";

// Penggabungan String / Concatenation
// .
$nama_depan = "Ryan";
$nama_belakang = "Pedrosa";
echo $nama_depan . " " . $nama_belakang . "<br>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x .= 5;
echo $x . "<br>";

// Perbandingan
// <, >, <=, >=, ==, !=
// tidak membandingkan tipe data, hanya nilai
$a = 25;
$b = "25";
var_dump($a == $b) . "<br>"; 

// Identitas
// ===, !==
// membandingkan tipe data dan nilai
var_dump($a === $b) . "<br>";

// Logika
// &&, ||, !
$c = 25;
var_dump($a < 30 && $c > 20) . "<br>";
?>
