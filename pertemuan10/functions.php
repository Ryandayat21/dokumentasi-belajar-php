<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar", 3307);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $merk = htmlspecialchars($data["merk"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $tahunRilis = htmlspecialchars($data["tahunRilis"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Insert data ke database
    $query = "INSERT INTO laptop VALUES ('','$merk', '$tipe', '$tahunRilis', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>