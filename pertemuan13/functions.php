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

    // upload gambar
    $gambar = upload();
    if( !$gambar ){
        return false;
    }


    // Insert data ke database
    $query = "INSERT INTO laptop VALUES ('','$merk', '$tipe', '$tahunRilis', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4){
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
                alert('Yang anda upload bukan gambar!');
            </script>
        ";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar!');
            </script>
        ";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id) {
    global $conn;

    $result = mysqli_query($conn, "SELECT gambar FROM laptop WHERE id = $id");
    $file = mysqli_fetch_assoc($result);

    mysqli_query($conn, "DELETE FROM laptop WHERE id = $id");

    if ($file && !empty($file["gambar"]) && file_exists('img/' . $file["gambar"])) {
        unlink('img/' . $file["gambar"]);
    }

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $merk = htmlspecialchars($data["merk"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $tahunRilis = htmlspecialchars($data["tahunRilis"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambarBaru = upload();
        if( !$gambarBaru ) {
            return false;
        }

        if( $gambarLama && file_exists('img/' . $gambarLama) ) {
            unlink('img/' . $gambarLama);
        }

        $gambar = $gambarBaru;
    }

    // Update data ke database
    $query = "UPDATE laptop SET 
                merk = '$merk', 
                tipe = '$tipe', 
                tahunRilis = '$tahunRilis', 
                harga = '$harga', 
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM laptop WHERE
                merk LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%' OR
                tahunRilis LIKE '%$keyword%' OR
                harga LIKE '%$keyword%'
                ";
    
    return query($query);
}


?>