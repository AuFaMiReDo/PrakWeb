<?php
require 'Koneksi.php';

// Fungsi untuk ambil semua data
function getData($table) {
    $conn = koneksiDB();
    $result = mysqli_query($conn, "SELECT * FROM $table");
    return $result;
}

// Fungsi tambah data
function insertData($table, $data) {
    $conn = koneksiDB();
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_values($data));
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    return mysqli_query($conn, $sql);
}

// Fungsi update data
function updateData($table, $data, $id, $idField) {
    $conn = koneksiDB();
    $set = [];
    foreach ($data as $key => $val) {
        $set[] = "$key='$val'";
    }
    $setString = implode(", ", $set);
    $sql = "UPDATE $table SET $setString WHERE $idField=$id";
    return mysqli_query($conn, $sql);
}

// Fungsi hapus data
function deleteData($table, $id, $idField) {
    $conn = koneksiDB();
    $sql = "DELETE FROM $table WHERE $idField=$id";
    return mysqli_query($conn, $sql);
}
?>
