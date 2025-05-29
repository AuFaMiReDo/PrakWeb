<?php
require 'Model.php';

$nama = "";
$id = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_fetch_assoc(mysqli_query(koneksiDB(), "SELECT * FROM member WHERE id_member=$id"));
    $nama = $result['nama'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = ["nama" => $_POST['nama']];
    if ($_POST['id'] === "") {
        insertData("member", $data);
    } else {
        updateData("member", $data, $_POST['id'], "id_member");
    }
    header("Location: Member.php");
}
?>

<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    Nama: <input type="text" name="nama" value="<?= $nama ?>"><br>
    <input type="submit" value="Simpan">
</form>
