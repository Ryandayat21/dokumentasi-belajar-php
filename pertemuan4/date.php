<?php 
    // Menampilkan tanggal dengan format tertentu (date)
    echo date("l, d-M-Y") . "<br>"; // Menampilkan hari, tanggal, bulan, dan tahun

    // Time
    echo time() . "<br>";

    // Membuat format tanggal sendiri
    echo date("l, d-M-Y", time()-60*60*24*100) . "<br>"; // Menampilkan hari ... hari kedepan

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    echo mktime(0,0,0,11,17,2004) . "<br>";
    echo date("l, d-M-Y", mktime(0,0,0,11,17,2004)) . "<br>";

    //strtotime
    echo strtotime("17 nov 2004") . "<br>";
    echo date("l, d-M-Y", strtotime("17 nov 2004")) . "<br>";

?>