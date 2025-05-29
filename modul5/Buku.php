<?php
require 'Model.php';

$data = getData("buku");

echo "<a href='FormBuku.php'>Tambah Buku</a><br><br>";
echo "<table border='1'><tr><th>ID</th><th>Judul</th><th>Pengarang</th><th>Aksi</th></tr>";

while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>{$row['id_buku']}</td>
        <td>{$row['judul']}</td>
        <td>{$row['pengarang']}</td>
        <td>
            <a href='FormBuku.php?id={$row['id_buku']}'>Edit</a> |
            <a href='Buku.php?hapus={$row['id_buku']}'>Hapus</a>
        </td>
    </tr>";
}

if (isset($_GET['hapus'])) {
    deleteData("buku", $_GET['hapus'], "id_buku");
    header("Location: Buku.php");
}
?>
