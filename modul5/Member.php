<?php
require 'Model.php';

$data = getData("member");

echo "<a href='FormMember.php'>Tambah Member</a><br><br>";
echo "<table border='1'><tr><th>ID</th><th>Nama</th><th>Aksi</th></tr>";

while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>{$row['id_member']}</td>
        <td>{$row['nama']}</td>
        <td>
            <a href='FormMember.php?id={$row['id_member']}'>Edit</a> |
            <a href='Member.php?hapus={$row['id_member']}'>Hapus</a>
        </td>
    </tr>";
}

if (isset($_GET['hapus'])) {
    deleteData("member", $_GET['hapus'], "id_member");
    header("Location: Member.php");
}
?>
