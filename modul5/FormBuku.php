<?php
require 'Model.php';

$judul = "";
$pengarang = "";
$id = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_fetch_assoc(mysqli_query(koneksiDB(), "SELECT * FROM buku WHERE id_buku = $id"));
    $judul = $result['judul'];
    $pengarang = $result['pengarang'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        "judul" => $_POST['judul'],
        "pengarang" => $_POST['pengarang']
    ];

    if ($_POST['id'] === "") {
        insertData("buku", $data);
    } else {
        updateData("buku", $data, $_POST['id'], "id_buku");
    }

    header("Location: Buku.php");
}
?>

<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    Judul: <input type="text" name="judul" value="<?= $judul ?>"><br>
    Pengarang: <input type="text" name="pengarang" value="<?= $pengarang ?>"><br>
    <input type="submit" value="Simpan">
</form>
