<?php
require 'Model.php';

$data = getData("peminjaman");

echo "<a href='FormPeminjaman.php'>Tambah Peminjaman</a><br><br>";
echo "<table border='1'><tr><th>ID</th><th>ID Member</th><th>ID Buku</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th>Aksi</th></tr>";

while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>{$row['id_peminjaman']}</td>
        <td>{$row['id_member']}</td>
        <td>{$row['id_buku']}</td>
        <td>{$row['tgl_pinjam']}</td>
        <td>{$row['tgl_kembali']}</td>
        <td>
            <a href='FormPeminjaman.php?id={$row['id_peminjaman']}'>Edit</a> |
            <a href='Peminjaman.php?hapus={$row['id_peminjaman']}'>Hapus</a>
        </td>
    </tr>";
}

if (isset($_GET['hapus'])) {
    deleteData("peminjaman", $_GET['hapus'], "id_peminjaman");
    header("Location: Peminjaman.php");
}
?>
