<?php
function koneksiDB() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "perpustakaan";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}
?>
